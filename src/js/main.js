// CSS
import '../scss/style.scss';

// Images
import '../img/favicon.png';
import '../img/icono-admin.png';
import '../img/foto-1.jpg';
import '../img/foto-2.jpg';
import '../img/logotipo.svg';

// Fonts
import '../fonts/insigne_-_grnd-norbol-webfont.woff';
import '../fonts/insigne_-_grnd-norbol-webfont.woff2';
import '../fonts/insigne_-_grnd-nordem-webfont.woff';
import '../fonts/insigne_-_grnd-nordem-webfont.woff2';

// Js
import './contact-form.js';

var swiper1 = new Swiper ('.swiper-container-1', {
  speed: 1500,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },

  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
