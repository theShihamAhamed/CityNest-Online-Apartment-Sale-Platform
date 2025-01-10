const form = document.querySelector(".contactForm");

form.addEventListener("submit", function (event) {
    // Prevent form submission if validation fails
    if (!validateForm()) {
        event.preventDefault();
        return;  // Stop if validation fails
    }

    // Add confirmation before sending the message
    const isConfirmed = confirm("Are you sure you want to send this message?");
    if (!isConfirmed) {
        event.preventDefault(); // Prevent submission if user cancels
    }
});

function validateForm() {
    // Get form fields
    const name = form.name.value.trim();
    const phone = form.phone.value.trim();
    const email = form.email.value.trim();
    const message = form.message.value.trim();

    // Regular expression for valid email
    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Regular expression for valid phone number (10 digits)
    const phonePattern = /^[0-9]{10}$/;

    // Validation flags
    let isValid = true;

    // Clear previous error messages
    clearErrors();

    // Name validation
    if (name === "") {
        showError("name", "Please enter your name.");
        isValid = false;
    }

    // Phone validation
    if (phone === "") {
        showError("phone", "Please enter your phone number.");
        isValid = false;
    } else if (!phonePattern.test(phone)) {
        showError("phone", "Please enter a valid 10-digit phone number.");
        isValid = false;
    }

    // Email validation
    if (email === "") {
        showError("email", "Please enter your email.");
        isValid = false;
    } else if (!emailPattern.test(email)) {
        showError("email", "Please enter a valid email address.");
        isValid = false;
    }

    // Message validation
    if (message === "") {
        showError("message", "Please enter your message.");
        isValid = false;
    }

    return isValid;
}

function showError(field, message) {
    const inputField = document.querySelector(`input[name="${field}"], textarea[name="${field}"]`);
    const errorElement = document.createElement("span");
    errorElement.classList.add("error-message");
    errorElement.textContent = message;
    inputField.parentElement.appendChild(errorElement);
}

function clearErrors() {
    const errorMessages = document.querySelectorAll(".error-message");
    errorMessages.forEach(function (error) {
        error.remove();
    });
}
