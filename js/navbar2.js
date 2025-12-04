const navItems = document.querySelectorAll('.navbar2 .nav-item');
const aboutPage1 = document.querySelector('.about-page1');
const aboutPage2 = document.querySelector('.about-page2');
const moreTalesItem = document.querySelector('.more-tales-item');
const moreTalesPanel = document.querySelector('.more-tales-panel');

// Helper: set active button
function setActive(label) {
  navItems.forEach(i => i.classList.remove('active'));
  navItems.forEach(i => {
    if (i.textContent.trim() === label) {
      i.classList.add('active');
    }
  });
}

// Default active on load
setActive('Featured');

// Click behavior
navItems.forEach(item => {
  item.addEventListener('click', (ev) => {
    const label = item.textContent.trim();

    if (label === 'Featured') {
      // Scroll to about-page1 and highlight Featured
      aboutPage1.scrollIntoView({ behavior: 'smooth' });
      setActive('Featured');
      if (moreTalesPanel) moreTalesPanel.setAttribute('aria-hidden', 'true');
    } else if (label === 'More Tales') {
      // Scroll to the featured section then open the More Tales panel placed under it
      if (!moreTalesPanel) return;
      aboutPage1.scrollIntoView({ behavior: 'smooth' });
      // small timeout to allow scroll and then open panel so user sees content
      setTimeout(() => {
        const isOpen = moreTalesPanel.getAttribute('aria-hidden') === 'false';
        moreTalesPanel.setAttribute('aria-hidden', isOpen ? 'true' : 'false');
        // focus search input in panel when opened
        if (!isOpen) {
          const inp = moreTalesPanel.querySelector('#panel-search-input');
          if (inp) inp.focus();
        }
      }, 300);
      setActive('More Tales');
    } else if (label === 'My List') {
      // reserved for later
      setActive('My List');
      if (moreTalesPanel) moreTalesPanel.setAttribute('aria-hidden', 'true');
    }
  });
});

// Close the panel when clicking outside
document.addEventListener('click', function(e){
  if (!moreTalesPanel) return;
  const inside = moreTalesPanel.contains(e.target) || moreTalesItem.contains(e.target);
  if (!inside) {
    moreTalesPanel.setAttribute('aria-hidden', 'true');
  }
});

// Make book-card clickable: when clicked, scroll to about-page2
document.addEventListener('click', function(e){
  const card = e.target.closest('.book-card');
  if (card && aboutPage2) {
    aboutPage2.scrollIntoView({ behavior: 'smooth' });
    if (moreTalesPanel) moreTalesPanel.setAttribute('aria-hidden', 'true');
  }
});