const hiddenMenu = document.querySelector(".hidden-menu");
const toggleButton = document.querySelector(".menu-icon");

toggleButton.addEventListener("click", () => {
    hiddenMenu.style.display = hiddenMenu.style.display === "block" ? "none" : "block";
});

let currentSlide = 0;

function moveSlide(direction) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    
    // Update the current slide index
    currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
    
    // Move slides container to show the current slide
    slides.style.transform = `translateX(-${currentSlide * 100}%)`;
}

