// Change title when user change the tab
let docTittle = document.title;
window.addEventListener("blur", () => {
  document.title = "Bengal Coding Club waiting for you come back :( ";
});

window.addEventListener("scroll", () => {
  document
    .querySelector("header")
    .classList.toggle("window-scroll", window.scrollY > 0);
});

// Responsive menu open close
let navbar = document.querySelector(".header .nav-menu-links");

document.querySelector("#menu-btn").onclick = () => {
  navbar.classList.toggle("active");
  searchForm.classList.remove("active");
  cart.classList.remove("active");
  loginForm.classList.remove("active");
};

window.onscroll = () => {
  navbar.classList.remove("active");

  var element = document.getElementById("menu-icon");
  var icon = document.getElementById("menu-btn");

  // // Toggle between active and inactive class names
  element.classList.toggle("active");
  element.classList.toggle("inactive");

  icon.classList.add("fa-bars");
  icon.classList.remove("fa-x");
};

// JavaScript code to handle the click event
document.getElementById("menu-icon").addEventListener("click", function () {
  var element = document.getElementById("menu-icon");
  var icon = document.getElementById("menu-btn");

  // Toggle between active and inactive class names
  element.classList.toggle("active");
  element.classList.toggle("inactive");

  // Toggle between different Font Awesome icons
  if (element.classList.contains("active")) {
    icon.classList.remove("fa-bars");
    icon.classList.add("fa-x");
  } else {
    icon.classList.remove("fa-x");
    icon.classList.add("fa-bars");
  }
});
