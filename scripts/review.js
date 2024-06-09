let slides = document.querySelectorAll('.slide-container');
let index = 0;

function updateCounter() {
    document.getElementById('counter').innerText = `${index + 1}/${slides.length}`;
}

function next() {
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
    updateCounter();
}

function prev() {
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
    updateCounter();
}

// Initialize counter on page load
updateCounter();
