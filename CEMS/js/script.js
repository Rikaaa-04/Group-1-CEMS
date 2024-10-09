// script.js
// Example JavaScript to handle form validation and interaction
document.addEventListener("DOMContentLoaded", () => {
    const registerForm = document.querySelector("form");
    
    if (registerForm) {
        registerForm.addEventListener("submit", function(event) {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const contact = document.getElementById("contact").value;
            
            // Simple validation checks
            if (name === "" || email === "" || contact === "") {
                alert("All fields are required!");
                event.preventDefault(); // Prevent form submission
            } else {
                alert("Registration Successful!");
            }
        });
    }
});
