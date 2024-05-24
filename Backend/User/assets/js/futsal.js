
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

//JavaScript validation to prevent booking in the past and validate phone number
function validateBookingTime() {
  const dateTimeInput = document.getElementById('dateandtime').value;
  const selectedDateTime = new Date(dateTimeInput);
  const now = new Date();

  if (selectedDateTime < now) {
      alert("Booking time cannot be in the past.");
      return false;
  }

  const phoneNumberInput = document.getElementById('number').value;
  const phoneNumberPattern = /^(98|97|96)\d{8}$/;

  if (!phoneNumberPattern.test(phoneNumberInput)) {
      alert("Please enter a valid phone number.");
      return false;
  }

  return true;
}

// Set the minimum date and time to the current date and time
window.onload = function() {
  const dateTimeInput = document.getElementById('dateandtime');
  const now = new Date();
  const formattedDateTime = now.toISOString().slice(0, 16);
  dateTimeInput.min = formattedDateTime;
}
