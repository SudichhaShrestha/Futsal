
function openModal(imagePath) {
    var modal = document.getElementById('modal');
    var modalImg = document.getElementById('modal-image');
    modal.style.display = 'block';
    modalImg.src = imagePath;
  }
  
  function closeModal() {
    var modal = document.getElementById('modal');
    modal.style.display = 'none';
  }
  

//search bar
  document.addEventListener('DOMContentLoaded', function() {
    let searchBtn = document.querySelector('#search-btn');
    let searchBar = document.querySelector('.search-bar-container');

    
    searchBtn.addEventListener('click', () => {
        searchBtn.classList.toggle('fa-times');
        searchBar.classList.toggle('active');
    });
});
