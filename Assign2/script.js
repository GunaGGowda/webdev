$(document).ready(function () {
    $("#registrationForm").on("submit", function () {
        alert("Your registration form is being submitted...");
        return true; // allow form submission
    });
});
