function validatePhoneNumber(phoneNumber) {
    // Nepali phone numbers: 10 digits, starting with 97 or 98 for mobile, or 1 for landlines in Kathmandu
    var regex = /^(98|97)\d{8}$/;
    return regex.test(phoneNumber);
}

document.getElementById('updateForm').addEventListener('submit', function (e) {
    var phoneInput = document.getElementById('number').value;
    if (!validatePhoneNumber(phoneInput)) {
        alert('Please enter a valid phone number.');
        e.preventDefault(); // Prevent form submission
    }
});