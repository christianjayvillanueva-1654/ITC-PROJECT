const navItems = document.querySelectorAll('.navbar2 li');
const aboutPage1 = document.querySelector('.about-page1');
const aboutPage2 = document.querySelector('.about-page2');

// Helper: set active button
function setActive(label) {
  navItems.forEach(i => i.classList.remove('active'));
  navItems.forEach(i => {
    if (i.textContent === label) {
      i.classList.add('active');
    }
  });
}

// Default active on load
setActive('Featured');

// Click behavior
navItems.forEach(item => {
  item.addEventListener('click', () => {
    const label = item.textContent;

    if (label === 'Featured') {
      // Scroll to about-page1 and highlight Featured
      aboutPage1.scrollIntoView({ behavior: 'smooth' });
      setActive('Featured');
    } else if (label === 'More Tales') {
      // Scroll to about-page2 and highlight More Tales
      aboutPage2.scrollIntoView({ behavior: 'smooth' });
      setActive('More Tales');
    } else if (label === 'My List') {
      // reserved for later
      setActive('My List');
    }
  });
});