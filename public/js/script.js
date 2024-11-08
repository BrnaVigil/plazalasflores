// ----------------JavaScript para añadir clase de fondo transparente al hacer scroll
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('bg-transparent-scroll');
    } else {
        navbar.classList.remove('bg-transparent-scroll');
    }
});

//-------------------------Animacion del texto que cambia----------------------
setInterval(() => {
    const texts = [
        "Expansión",
        "Reconocimiento",
        "Negocio",
        "Crecimiento"
    ];

    const randomIndex = Math.floor(Math.random() * texts.length);
    const changingText = document.getElementById('changingText');
    changingText.classList.add('animate__animated', 'animate__flipOutX');
    setTimeout(() => {
        changingText.textContent = texts[randomIndex];
        changingText.classList.remove('animate__flipOutX');
        changingText.classList.add('animate__flipInX');
    }, 500); // Tiempo de espera antes de cambiar y animar de nuevo
}, 4000); // Cambiar cada 4 segundos (4000 milisegundos)

//-------------------------Animacion del texto Comitan----------------------
setInterval(() => {
    const texts = [
        "Servicios",
        "Diseño",
        "Atención"
    ];

    const randomIndex = Math.floor(Math.random() * texts.length);
    const changingText = document.getElementById('changingText-comitan');
    changingText.classList.add('animate__animated', 'animate__flipOutX');
    setTimeout(() => {
        changingText.textContent = texts[randomIndex];
        changingText.classList.remove('animate__flipOutX');
        changingText.classList.add('animate__flipInX');
    }, 500); // Tiempo de espera antes de cambiar y animar de nuevo
}, 4000); // Cambiar cada 4 segundos (4000 milisegundos)


//-------------------------Animacion del texto Tonala ----------------------
setInterval(() => {
    const texts = [
        "La mejor oportunidad para tu negocio ",
        "Invierte con nosotros, invierte en México"
    ];

    const randomIndex = Math.floor(Math.random() * texts.length);
    const changingText = document.getElementById('changingText-tonala-vf');
    changingText.classList.add('animate__animated', 'animate__flipOutX');
    setTimeout(() => {
        changingText.textContent = texts[randomIndex];
        changingText.classList.remove('animate__flipOutX');
        changingText.classList.add('animate__flipInX');
    }, 500); // Tiempo de espera antes de cambiar y animar de nuevo
}, 4000); // Cambiar cada 4 segundos (4000 milisegundos)

//-------------------------Animacion del texto Palenque ----------------------
setInterval(() => {
    const texts = [
        "Plaza Las Flores Palenque",
        "Invierte con nosotros, invierte en México"
    ];

    const randomIndex = Math.floor(Math.random() * texts.length);
    const changingText = document.getElementById('changingText-plq');
    changingText.classList.add('animate__animated', 'animate__flipOutX');
    setTimeout(() => {
        changingText.textContent = texts[randomIndex];
        changingText.classList.remove('animate__flipOutX');
        changingText.classList.add('animate__flipInX');
    }, 500); // Tiempo de espera antes de cambiar y animar de nuevo
}, 4000); // Cambiar cada 4 segundos (4000 milisegundos)


// -----------------------------Slider de fondo-------------------------------------------- //
const slider = document.getElementById('slider-fondo');
const slides = slider.children;
let currentIndex = 0;
function showNextSlide() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    currentIndex = (currentIndex + 1) % slides.length;
}
setInterval(showNextSlide, 3000); // Cambia cada 3 segundos

// --------------------------------acordion header----------------------------------
// const accordion = document.getElementsByClassName ('contentbx')

// for (i = 0; i<accordion.length; i++){
//     accordion[i].addEventListener('click', function(){
//         this.classList.toggle('active')
//     })
// }

document.addEventListener('DOMContentLoaded', function () {
    var accordions = document.querySelectorAll('.accordion .contentbx');

    accordions.forEach(function (accordion) {
        var label = accordion.querySelector('.label');
        var content = accordion.querySelector('.content');

        label.addEventListener('click', function () {
            if (accordion.classList.contains('active')) {
                accordion.classList.remove('active');
                content.style.maxHeight = '0';
            } else {
                accordion.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
            }
        });
    });
});

// ----------------------------slider de espacios interiores----------------------------
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.getElementById('slider-one');
    const slides = slider.children;
    let currentIndex = 0;

    function showNextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    setInterval(showNextSlide, 3000); // Cambia cada 3 segundos
});


// --------------------------------- link redes sociales ---------------------------------//

document.addEventListener('DOMContentLoaded', function() {
    const location = window.location.pathname.split('/')[1]; // Obtiene el primer segmento de la URL

    const facebookLink = document.getElementById('facebook-link');
    const instagramLink = document.getElementById('instagram-link');

    if (location === 'comitan') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresComitan/';
        instagramLink.href = 'https://www.instagram.com/plaza_lasflorescomitan';
    } 
    else if (location === 'tonala') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresTonala';
        instagramLink.href = 'https://www.instagram.com/PlazaLasFloresTonala';
    } 
    else if (location === 'palenque') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresPalenque/';
        instagramLink.href = 'https://www.instagram.com/plazalasflorespalenque';
    }
    else if (location === 'villaflores') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresVillaflores/';
        instagramLink.href = 'https://www.instagram.com/PlazaLasFloresVillaflores';
    } 
    else if (location === 'pinotepa') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresPinotepa';
        instagramLink.href = 'https://www.instagram.com/PlazaLasFloresPinotepa';
    }
    else if (location === 'viaplaza') {
        facebookLink.href = 'https://www.facebook.com/ViaPlazaCiudadHidalgo/';
        instagramLink.href = 'https://www.instagram.com/viaplaza_ciudadhidalgo/';
    }
});

// Links para las redes sociales del telefono

document.addEventListener('DOMContentLoaded', function() {
    const location = window.location.pathname.split('/')[1]; // Obtiene el primer segmento de la URL

    const facebookLink = document.getElementById('facebook-link-tel');
    const instagramLink = document.getElementById('instagram-link-tel');

    if (location === 'comitan') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresComitan/';
        instagramLink.href = 'https://www.instagram.com/plaza_lasflorescomitan';
    } 
    else if (location === 'tonala') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresTonala';
        instagramLink.href = 'https://www.instagram.com/PlazaLasFloresTonala';
    } 
    else if (location === 'palenque') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresPalenque/';
        instagramLink.href = 'https://www.instagram.com/plazalasflorespalenque';
    }
    else if (location === 'villaflores') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresVillaflores/';
        instagramLink.href = 'https://www.instagram.com/PlazaLasFloresVillaflores';
    }
    else if (location === 'pinotepa') {
        facebookLink.href = 'https://www.facebook.com/PlazaLasFloresPinotepa';
        instagramLink.href = 'https://www.instagram.com/PlazaLasFloresPinotepa';
    }
    else if (location === 'viaplaza') {
        facebookLink.href = 'https://www.facebook.com/ViaPlazaCiudadHidalgo/';
        instagramLink.href = 'https://www.instagram.com/viaplaza_ciudadhidalgo/';
    }
});

// -----------------------------------------menu nav-------------------------------------------

function showSidebar (){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = "flex"
}
function hideSidebar (){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = "none"
}

// ---------------------------------------- Zoom en la imagen -------------------------------------
const zoomImage = document.getElementById('zoomimg');
const zoomContainer = document.getElementById('zoomimage');

zoomContainer.addEventListener('mousemove', function (e) {
    const { offsetX, offsetY } = e;
    const { offsetWidth, offsetHeight } = zoomContainer;
    
    const xPos = (offsetX / offsetWidth) * 100; // Porcentaje de la posición X
    const yPos = (offsetY / offsetHeight) * 100; // Porcentaje de la posición Y

    zoomImage.style.transformOrigin = `${xPos}% ${yPos}%`;
});

zoomContainer.addEventListener('mouseenter', function () {
    zoomImage.style.transition = 'transform 0.5s ease';
    zoomImage.style.transform = 'scale(3)'; // Cambia el nivel de zoom
});

zoomContainer.addEventListener('mouseleave', function () {
    zoomImage.style.transform = 'scale(1)'; // Regresa al tamaño original
});
