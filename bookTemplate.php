<?php
session_start();
require_once __DIR__ . '/../db.php';

$post_error = '';

// Determine an identifier for this book. Prefer numeric id if available.
$book_identifier = (int) ($book['id'] ?? 0);

// Check whether comments table has a user_id column (some installs may not)
$has_user_id = false;
$colCheck = $connection->query("SHOW COLUMNS FROM comments LIKE 'user_id'");
if ($colCheck && $colCheck->num_rows > 0) {
  $has_user_id = true;
}

// Handle comment submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['comment'])) {
  $comment_text = trim($_POST['comment']);
  $book_id_post = (int) ($_POST['book_id'] ?? $book_identifier);

  if ($comment_text === '') {
    $post_error = '';
  } elseif (empty($_SESSION['user_id'])) {
    $post_error = 'You must be signed in to post a comment.';
  } else {
    $user_id = (int) ($_SESSION['user_id'] ?? 0);

    // Try inserting. Support both schemas (with or without user_id column)
        if ($has_user_id) {
            $stmt = $connection->prepare("INSERT INTO comments (book_id, user_id, comment, created_at) VALUES (?, ?, ?, NOW())");
            if ($stmt) {
                $stmt->bind_param('iis', $book_id_post, $user_id, $comment_text);
                if (!$stmt->execute()) {
                    $post_error = 'Database error: ' . htmlspecialchars($stmt->error);
                }
                $stmt->close();
            } else {
                $post_error = 'Database error: ' . htmlspecialchars($connection->error);
            }
        } else {
            // Fallback for older schema without user_id
            $stmt = $connection->prepare("INSERT INTO comments (book_id, comment, created_at) VALUES (?, ?, NOW())");
            if ($stmt) {
                $stmt->bind_param('is', $book_id_post, $comment_text);
                if (!$stmt->execute()) {
                    $post_error = 'Database error: ' . htmlspecialchars($stmt->error);
                }
                $stmt->close();
            } else {
                $post_error = 'Database error: ' . htmlspecialchars($connection->error);
            }
        }
  }
  // After handling POST, reload comments below (no redirect to keep simple)
}

// Fetch comments for this book (latest first). Left-join users to get commenter email.
$comments = [];
if ($has_user_id) {
  $stmt = $connection->prepare(
    "SELECT c.comment, c.created_at, u.email FROM comments c LEFT JOIN users u ON c.user_id = u.id WHERE c.book_id = ? ORDER BY c.created_at DESC"
  );
  if ($stmt) {
    $stmt->bind_param('s', $book_identifier);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
      $comments[] = $r;
    }
    $stmt->close();
  }
} else {
  $stmt = $connection->prepare(
    "SELECT comment, created_at FROM comments WHERE book_id = ? ORDER BY created_at DESC"
  );
  if ($stmt) {
    $stmt->bind_param('s', $book_identifier);
    $stmt->execute();
    $res = $stmt->get_result();
    while ($r = $res->fetch_assoc()) {
      $comments[] = $r;
    }
    $stmt->close();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($book['title']); ?></title>

  <link rel="stylesheet" href="../css/bookTemplateStyle.css">
  <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>

  <?php include __DIR__ . '/../navbar.php'; ?>

  <div class="book-hero" style="--bg-image: url('../<?php echo $book['cover_image']; ?>');">
    
    <!-- Gradient overlay layer -->
    <div class="gradient-layer"></div>
    
    <!-- Content layer split into two parts -->
    <div class="content-layer">
      <div class="about-book">
        <div class="bookcover">
          <div class="book-img-cover" style="background-image: url('../<?php echo $book['cover_image']; ?>');"></div>
        </div>
          
        <div class="book-comments">
          <?php if (!empty($post_error)): ?>
            <div class="comment-error" style="color:crimson"><?php echo htmlspecialchars($post_error); ?></div>
          <?php endif; ?>

          <form method="POST" action="">
            <textarea id="comments" name="comment" placeholder="Comment"></textarea>
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book_identifier); ?>">
            <button id="combtn" type="submit">Submit</button>
          </form>

        </div>

        <!-- Comments display section -->
        <div class="comSec">
          <?php if (empty($comments)): ?>
            <p>No comments yet. Be the first to comment.</p>
          <?php else: ?>
            <?php foreach ($comments as $c): ?>
              <div class="single-comment">
                <h4 class="comment-user"><?php echo htmlspecialchars($c['email'] ?? 'User'); ?></h4>
                <p class="comment-text"><?php echo nl2br(htmlspecialchars($c['comment'])); ?></p>
                <small class="comment-time"><?php echo htmlspecialchars($c['created_at']); ?></small>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="book-content">
        <!-- Fixed 50% viewport width section -->
         <?php echo $content; ?>
      </div>
    </div>

  </div>


<!-- No client-side comment injection: comments are posted to server and loaded from DB -->


</body>
</html>