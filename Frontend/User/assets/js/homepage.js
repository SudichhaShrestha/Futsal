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
const sliderContainer = document.querySelector('.slider-container');
const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.imgslider');
let slideIndex = 0;

slides.forEach(slide => {
  const clonedSlide = slide.cloneNode(true);
  slider.appendChild(clonedSlide);
});

function moveSlide() {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
    slider.style.transition = 'none';
    slider.style.transform = `translateX(0)`;
    setTimeout(() => {
      slider.style.transition = 'transform 0.7s ease-in-out';
    }, 50); 
  } else {
    slider.style.transition = 'transform 0.7s ease-in-out';
  }
  slider.style.transform = `translateX(-${slideIndex * slides[0].clientWidth}px)`;
}

setInterval(moveSlide, 10000); 




