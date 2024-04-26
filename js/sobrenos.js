//Select element function
const selectElement = function (element) {
    return document.querySelector(element);
};

let body = selectElement('body');

// Scroll Reveal
window.sr = ScrollReveal({reset:true});

sr.reveal('.animate-left', {
    origin: 'left',
    distance: '25rem',
    duration: 1000,
    delay: 300
});

sr.reveal('.animate-right', {
    origin: 'right',
    distance: '25rem',
    duration: 1000,
    delay: 600
});

sr.reveal('.animate-top', {
    origin: 'top',
    distance: '25rem',
    duration: 1000,
    delay: 600
});

sr.reveal('.animate-bottom', {
    origin: 'bottom',
    distance: '25rem',
    duration: 1000,
    delay: 600
});