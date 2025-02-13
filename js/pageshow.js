window.addEventListener("pageshow", function(event) {
    let formContainer = document.querySelector(".col-md-4");
    if (formContainer) {
        formContainer.classList.remove("fade-in");
        void formContainer.offsetWidth;
        formContainer.classList.add("fade-in");
    }
});