'use strict';

/**
 * navbar variables
 */

const navOpenBtn = document.querySelector("[data-menu-open-btn]");
const navCloseBtn = document.querySelector("[data-menu-close-btn]");
const navbar = document.querySelector("[data-navbar]");
const overlay = document.querySelector("[data-overlay]");

const navElemArr = [navOpenBtn, navCloseBtn, overlay];

for (let i = 0; i < navElemArr.length; i++) {

  navElemArr[i].addEventListener("click", function () {

    navbar.classList.toggle("active");
    overlay.classList.toggle("active");
    document.body.classList.toggle("active");

  });

}



/**
 * header sticky
 */

const header = document.querySelector("[data-header]");

window.addEventListener("scroll", function () {

  window.scrollY >= 10 ? header.classList.add("active") : header.classList.remove("active");

});



/**
 * go top
 */

const goTopBtn = document.querySelector("[data-go-top]");

window.addEventListener("scroll", function () {

  window.scrollY >= 500 ? goTopBtn.classList.add("active") : goTopBtn.classList.remove("active");

});


document.addEventListener("DOMContentLoaded", function() {
  var type = localStorage.getItem('contentType'); // Check if the content type is stored in local storage

  if (type) {
      toggleContent(type); // If stored, display the corresponding content
  }
});

function toggleContent(type) {
  var moviesContent = document.getElementById('moviesContent');
  var tvShowsContent = document.getElementById('tvShowsContent');
  var sectionTitle = document.getElementById('sectionTitle');

  if (type === 'movies') {
      moviesContent.style.display = "block";
      tvShowsContent.style.display = "none";
      sectionTitle.innerText = "Trending Movies";
      localStorage.setItem('contentType', 'movies'); // Store the content type in local storage
  } else if (type === 'tvShows') {
      moviesContent.style.display = "none";
      tvShowsContent.style.display = "block";
      sectionTitle.innerText = "Trending TV Shows";
      localStorage.setItem('contentType', 'tvShows'); // Store the content type in local storage
  }
}