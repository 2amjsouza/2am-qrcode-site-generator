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

let parseLinks = () => {
    let links = document.querySelectorAll('a');

    links.forEach((el, key) => {
        let href = links.item(key).getAttribute('href')

        if (href === null || href === undefined || href[0] !== '/') return;

        href = 'https://2am.tech' + href
        links.item(key).setAttribute('href', href)

    })
}

window.addEventListener('load', () => {
    parseLinks()
})
