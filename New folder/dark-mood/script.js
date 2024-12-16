// Selecting the button and box elements
const toggleButton = document.getElementById('toggle-dark-mode');
const box = document.querySelector('.box');

// Add event listener to toggle dark mode for the box
toggleButton.addEventListener('click', () => {
    box.classList.toggle('dark-mode');
    toggleButton.classList.toggle('dark-mode');
});
