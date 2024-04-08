var ondas = [
    document.getElementById('onda1'),
    document.getElementById('onda2'),
    document.getElementById('onda3'),
    document.getElementById('onda4')
];

window.addEventListener('scroll', function () {
    let header = document.querySelector(".header");
    let logoHeader = document.querySelector("#logo-nav");

    header.classList.toggle('scrolled', window.scrollY > 50);
    logoHeader.style.opacity = (window.scrollY > 50) ? 1 : 0;

    var scrollPos = window.scrollY

    ondas[0].style.backgroundPositionX = 400 + scrollPos * 4 + 'px';
    ondas[1].style.backgroundPositionX = 300 + scrollPos * -4 + 'px';
    ondas[2].style.backgroundPositionX = 200 + scrollPos * 2 + 'px';
    ondas[3].style.backgroundPositionX = 100 + scrollPos * -2 + 'px';
});

function typeWrite(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = ' ';
    textoArray.forEach(function (letra, i) {

        setTimeout(function () {
            elemento.innerHTML += letra;
        }, 30 * i)

    });
}
const titulo = document.querySelector('#panel-text');
typeWrite(titulo);

window.revelar = ScrollReveal({reset:true});

revelar.reveal('.hidden', {
    duration: 1500,
    distance: '90px'
});

revelar.reveal('.hidden-v', {
    duration: 1500,
    distance: '90px',
    delay: 300
});
