import './bootstrap';
import Alpine from 'alpinejs'
window.Alpine = Alpine
Alpine.start()

window.addEventListener("scroll", (event) => {
    if(window.scrollY > 100) {
        document.getElementsByClassName('header')[0].classList.add('visible');
    }
    else {
        document.getElementsByClassName('header')[0].classList.remove('visible');
    }
});
