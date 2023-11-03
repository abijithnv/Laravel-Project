document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const placeInput = document.getElementById('place');
    const collegeInput = document.getElementById('college');
    const descriptionInput = document.getElementById('description');
    const experienceInput = document.getElementById('experienced');
    const experienceFresher = document.getElementById('fresher');

    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const phoneError = document.getElementById('phoneError');
    const placeError = document.getElementById('placeError');
    const collegeError = document.getElementById('collegeError');
    const descriptionError = document.getElementById('descriptionError');
    
    const experienceError = document.getElementById('experiencedError');

    form.addEventListener('submit', function (event) {
        let isValid = true;

        // Reset previous error messages
        nameError.textContent = '';
        emailError.textContent = '';
        phoneError.textContent = '';
        placeError.textContent = '';
        collegeError.textContent = '';
        descriptionError.textContent = '';
        experienceError.textContent = '';

        // Name validation
        if (nameInput.value.trim() === '') {
            nameError.textContent = 'Name is required';
            isValid = false;
        }

        // Email validation (basic pattern)
        const emailPattern = /^\S+@\S+\.\S+$/;
        if (!emailPattern.test(emailInput.value)) {
            emailError.textContent = 'Invalid email format';
            isValid = false;
        }

        // Phone validation (basic pattern)
        const phonePattern = /^\d{10}$/;
        if (!phonePattern.test(phoneInput.value)) {
            phoneError.textContent = 'Invalid phone number format (10 digits)';
            isValid = false;
        }

        // Place validation (required)
        if (placeInput.value.trim() === '') {
            placeError.textContent = 'Place is required';
            isValid = false;
        }

        // College validation (required)
        if (collegeInput.value.trim() === '') {
            collegeError.textContent = 'College name is required';
            isValid = false;
        }
        // Description validation (required)
        if (descriptionInput.value.trim() === '') {
            descriptionError.textContent = 'Description is required';
            isValid = false;
        }

        // Experience radio button validation (at least one selected)
        if (!experienceInput.checked && !experienceFresher.checked) {
            experienceError.textContent = 'Select your experience';
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault(); // Prevent form submission
        }
    });
});
