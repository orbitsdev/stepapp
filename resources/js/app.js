import './bootstrap';


import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

var swiper = new Swiper(".mySwiper", {
    parallax: true,
    // autoplay: true,

     speed: 1000,
     loop: true,
     rewind:true,

    // centeredSlides: true,

    spaceBetween: 500,
    effect: "cards",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
        rotate:true,
      },

      cardsEffect: {
        perSlideOffset: 16,
        perSlideRotate: 4,
        rotate: false,
        slideShadows: true,
      },

    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
        clickable: true,
    }

});
// import Swiper from 'swiper';
// import 'swiper/css/bundle';

// function initSwiper() {
//     // Destroy existing Swiper instance if it exists to prevent duplicates
//     const existingSwiper = document.querySelector('.swiper-container')?.swiper;
//     if (existingSwiper) {
//         existingSwiper.destroy(true, true);
//     }

//     // Initialize a new Swiper instance
//     new Swiper('.swiper-container', {
//         loop: true,
//         direction: 'horizontal', // Ensure correct direction
//         pagination: {
//             el: '.swiper-pagination',
//             clickable: true,
//         },
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//         autoplay: {
//             delay: 5000,
//         },
//     });
// }

// // Initial load
// document.addEventListener('livewire:load', initSwiper);

// // Reinitialize on Livewire updates
// Livewire.hook('message.processed', (message, component) => {
//     initSwiper();
// });

// // Debugging Swiper instance
// console.log('Swiper initialized and ready.');
