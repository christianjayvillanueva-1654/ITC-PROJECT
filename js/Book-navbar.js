// js/navbar2.js
document.addEventListener("DOMContentLoaded", () => {
  const navItems = document.querySelectorAll(".navbar2 li");

  navItems.forEach(item => {
    item.addEventListener("click", () => {
      // remove active from all
      navItems.forEach(i => i.classList.remove("active"));
      // add active to the clicked one
      item.classList.add("active");
    });
  });
});