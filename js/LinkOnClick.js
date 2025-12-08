document.querySelectorAll('.card').forEach(card => {
  card.addEventListener('click', () => {
    if (card.classList.contains('active')) {
      const link = card.getAttribute('data-link');
      const carouselContainer = document.querySelector('.carousel-container');

      const isLoggedIn = carouselContainer && carouselContainer.getAttribute('data-logged-in') === 'true';
      
      if (link) {
        if (!isLoggedIn) {
          // User not logged in, prompt to sign in
          const confirmed = confirm('You must sign-in first to read this book. Click OK to go to the sign-in page.');
          if (confirmed) {
            window.location.href = 'sign-in.php';
          }
        } else {
          // User is logged in, proceed to book
          window.location.href = link;
        }
      }
    } else {
      centerOnCard(card); // from carousel.js
    }
  });
});
