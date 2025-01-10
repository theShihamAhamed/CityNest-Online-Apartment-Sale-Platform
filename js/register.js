document.querySelector('form').addEventListener('submit', function(event) {
    let valid = true;

    // Get form elements
    const firstName = document.querySelector('input[name="f_name"]');
    const lastName = document.querySelector('input[name="l_name"]');
    const email = document.querySelector('input[name="email"]');
    const password = document.querySelector('input[name="password"]');
    const confirmPassword = document.querySelector('input[placeholder="Confirm Password"]');
    const agreeTerms = document.querySelector('input[type="checkbox"]');
    
    // Regular expression for a valid email format
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Clear previous error messages
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach((message) => message.remove());

    // Helper function to display error messages
    const displayError = (input, message) => {
        const error = document.createElement('p');
        error.className = 'error-message';
        error.style.color = 'red';
        error.textContent = message;
        input.parentElement.appendChild(error);
    };

    // Validate first name
    if (firstName.value.trim() === '') {
        displayError(firstName, 'First name is required.');
        valid = false;
    }

    // Validate last name
    if (lastName.value.trim() === '') {
        displayError(lastName, 'Last name is required.');
        valid = false;
    }

    // Validate email
    if (email.value.trim() === '') {
        displayError(email, 'Email is required.');
        valid = false;
    } else if (!emailPattern.test(email.value.trim())) {
        displayError(email, 'Please enter a valid email address.');
        valid = false;
    }

    // Validate password
    if (password.value.trim() === '') {
        displayError(password, 'Password is required.');
        valid = false;
    }

    // Validate confirm password
    if (confirmPassword.value.trim() === '') {
        displayError(confirmPassword, 'Please confirm your password.');
        valid = false;
    } else if (password.value !== confirmPassword.value) {
        displayError(confirmPassword, 'Passwords do not match.');
        valid = false;
    }

    // Validate agree terms checkbox
    if (!agreeTerms.checked) {
        displayError(agreeTerms, 'You must agree to the terms and conditions.');
        valid = false;
    }

    // Prevent form submission if validation fails
    if (!valid) {
        event.preventDefault();
    }
});

