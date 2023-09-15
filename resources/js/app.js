import './bootstrap';
import Alpine from 'alpinejs'
import $ from "cash-dom";
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

$(function () {
    let body = $('body');

    body.on('click', '.header__addon button', () => {
        let el = $('.header__addon button');

        if (el.hasClass('btn--sandwich')) {
            menuOpened()
        }
        else {
            menuClosed()
        }
    })

    function menuOpened() {
        let el = $('.header__addon button');

        el.addClass('btn--close')
        el.removeClass('btn--sandwich')
        $('body').addClass('overflow--hidden')
        $('.menu').addClass('active')
    }

    function menuClosed() {
        let el = $('.header__addon button');

        el.addClass('btn--sandwich')
        el.removeClass('btn--close')
        $('body').removeClass('overflow--hidden')
        $('.menu').removeClass('active')
    }
})

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
