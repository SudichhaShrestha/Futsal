document.addEventListener('DOMContentLoaded', function() {
    let searchBtn = document.querySelector('#search-btn');
    let searchBar = document.querySelector('.search-bar-container');
//     let menu = document .querySelector('#menu-bar');
// let navbar = document .querySelector('.navbar');

    
    searchBtn.addEventListener('click', () => {
        searchBtn.classList.toggle('fa-times');
        searchBar.classList.toggle('active');
    });
});

// let menu = document .querySelector('#menu-bar');
// let navbar = document .querySelector('.navbar');

//slider js
let slideIndex = 0;
showSlides(slideIndex);

function moveSlide(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  const slides = document.querySelectorAll('.imgslider');
  
  if (n >= slides.length) {
    slideIndex = 0;
  } else if (n < 0) {
    slideIndex = slides.length - 1;
  }

  slides.forEach(slide => slide.style.display = 'none');
  slides[slideIndex].style.display = 'block';
}

