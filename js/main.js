//Show and hide the search input

const menuIcon = document.getElementById("menu-icon");
const slideOutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchBox.style.top = '10px';

searchIcon.addEventListener('click', function () {

  if (searchBox.style.top == '50px') {
    searchBox.style.top = '10px';
    searchBox.style.pointerEvents = 'none';
  } else {
    searchBox.style.top = '50px';
    searchBox.style.pointerEvents = 'auto';
  }

});

menuIcon.addEventListener('click', function () {
  if (slideOutMenu.style.opacity == "1") {
    slideOutMenu.style.opacity = '0';
    slideOutMenu.style.pointerEvents = 'none';
  } else {
    slideOutMenu.style.opacity = '1';
    slideOutMenu.style.pointerEvents = 'auto';
  }
});