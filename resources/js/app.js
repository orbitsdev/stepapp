import './bootstrap';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';


let reverseAutoplay = false;


var swiper = new Swiper(".mySwiper", {
    parallax: true,
    speed: 1000,
    loop: false,  // Disable loop for better control
    centeredSlides: true,
    initialSlide: Math.floor(document.querySelectorAll('.swiper-slide').length / 2),
    spaceBetween: 500,
    effect: "cards",

    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
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
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    on: {
        slideChange(swiper) {
            console.log('Slide Changed:', swiper.activeIndex); // Use activeIndex instead of realIndex
            const bullets = document.querySelectorAll('.swiper-pagination-bullet');
            bullets.forEach((bullet, index) => {
                if (index === swiper.activeIndex) {
                    bullet.classList.add('swiper-pagination-bullet-active');
                } else {
                    bullet.classList.remove('swiper-pagination-bullet-active');
                }
            });
        },

        reachEnd() {
            console.log('End reached, reversing direction');
            swiper.params.autoplay.reverseDirection = true;
            swiper.autoplay.start();
        },

        reachBeginning() {
            console.log('Beginning reached, resuming normal direction');
            swiper.params.autoplay.reverseDirection = false;
            swiper.autoplay.start();
        }
    }
});

gsap.registerPlugin(ScrollTrigger);

// gsap.fromTo(
//     '.ph, .w-title',
//     { y: 50, opacity: 0 },
//     {
//         y: 0,
//         opacity: 1,
//         duration: 1.2,
//         ease: 'power3.out',

//         scrollTrigger: {
//             trigger: '.carousel',
//             // start: 'top 80%',
//             // end: 'bottom 60%',
//             toggleActions: 'play none none none', // Add reverse action
//             markers: true,
//         },
//     }
// );

gsap.fromTo(
    '.newscard',
    { y: 60, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 3,
        ease: 'power3.out',

        scrollTrigger: {
            trigger: '.welcome',
             start: "top center ",
            toggleActions: 'play none none reverse', // Add reverse action
            markers: true,
        },
    }
);
