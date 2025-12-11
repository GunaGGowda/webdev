// ================================
// 1) Fade-in animation on page load
// ================================
document.addEventListener("DOMContentLoaded", () => {
    document.body.style.opacity = "0";
    setTimeout(() => {
        document.body.style.transition = "opacity 0.8s ease";
        document.body.style.opacity = "1";
    }, 80);
});


// =====================================
// 2) Animated redirect to Resume page
// Called when "Explore Resume" button is clicked
// =====================================
function goToResume() {
    // Fade-out effect
    document.body.style.transition = "opacity 0.5s ease";
    document.body.style.opacity = "0";

    // Redirect after animation finishes
    setTimeout(() => {
        window.location.href = "resume.html";
    }, 500);
}


// =====================================
// 3) Contact Form Validation
// =====================================
document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".contact-form");

    if (form) {
        form.addEventListener("submit", function (e) {
            const name = document.querySelector(".contact-input").value.trim();
            const email = document.querySelector("input[type='email']").value.trim();
            const message = document.querySelector(".contact-textarea").value.trim();

            if (name === "" || email === "" || message === "") {
                alert("❗ Please fill all fields before submitting.");
                e.preventDefault();
            } else {
                alert("✔ Your message has been sent successfully!");
            }
        });
    }
});


// ================================
// 4) Smooth scrolling for internal links
// (Only works if you use #section links)
// ================================
document.querySelectorAll("a[href^='#']").forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        const section = document.querySelector(this.getAttribute("href"));
        if (section) {
            section.scrollIntoView({ behavior: "smooth" });
        }
    });
});
