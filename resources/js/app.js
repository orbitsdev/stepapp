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


gsap.fromTo(
    '.welcome-container .w-title',
    { y: 40, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.welcome-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

gsap.fromTo(
    '.welcome-container .ph',
    { y: 20, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.welcome-container',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// News Section
gsap.fromTo(
    '.newsection-container h2, .newsection-container p',
    { x: -50, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        duration: 1,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.newsection-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

gsap.fromTo(
    '.newscard',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 0.8,
        stagger: 0.3,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.newsection-container',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Global Partners Section
gsap.fromTo(
    '.global-partners-container h2',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.global-partners-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

gsap.fromTo(
    '.global-partners-container img',
    { scale: 0.8, opacity: 0 },
    {
        scale: 1,
        opacity: 1,
        duration: 1,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.global-partners-container',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Optional Hover Effect for Partner Logos
document.querySelectorAll('.global-partners-container img').forEach((img) => {
    gsap.fromTo(
        img,
        { scale: 1 },
        {
            scale: 1.1,
            rotate: 2,
            duration: 0.3,
            ease: 'power1.out',
            paused: true,
        }
    ).eventCallback('onHover', () => {
        img.addEventListener('mouseenter', () => {
            gsap.to(img, { scale: 1.1, rotate: 2, duration: 0.3 });
        });
        img.addEventListener('mouseleave', () => {
            gsap.to(img, { scale: 1, rotate: 0, duration: 0.3 });
        });
    });
});

gsap.fromTo(
    '.move-container h2, .wall-container h2, .jog-container h2, .run-container h2, .service-container h2',
    { y: 40, scale: 0.95, opacity: 0 },
    {
        y: 0,
        scale: 1,
        opacity: 1,
        duration: 1.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.move-container h2, .wall-container h2, .jog-container h2, .run-container h2, .service-container h2',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Prose Content Animation for Each Section
const containers = [
    '.move-container',
    '.wall-container',
    '.jog-container',
    '.run-container',
    '.service-container',
];

containers.forEach((container) => {
    gsap.fromTo(
        `${container} .prose p`,
        { y: 20, opacity: 0 },
        {
            y: 0,
            opacity: 1,
            duration: 0.8,
            stagger: 0.2,
            ease: 'power2.out',
            scrollTrigger: {
                trigger: `${container} .prose`,
                start: 'top 85%',
                toggleActions: 'play none none reverse',
            },
        }
    );
});
gsap.fromTo(
    '.module-container',
    { y: 40, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.module-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Titles (Mandatory/Elective) Animation
gsap.fromTo(
    '.module-container p.text-xl.font-bold',
    { x: -30, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        duration: 1,
        stagger: 0.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.module-container',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// List Items Animation
gsap.fromTo(
    '.module-container ul li',
    { x: -50, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        duration: 0.6,
        stagger: 0.1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.module-container',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Final Note Animation
gsap.fromTo(
    '.module-container .text-4xl',
    { scale: 0.8, opacity: 0 },
    {
        scale: 1,
        opacity: 1,
        duration: 1,
        ease: 'elastic.out(1, 0.3)',
        scrollTrigger: {
            trigger: '.module-container',
            start: 'top 90%',
            toggleActions: 'play none none reverse',
        },
    }
);
// Image Animation
gsap.fromTo(
    '.mt-12 img',
    { scale: 0.8, opacity: 0,  },
    {
        scale: 1,
        opacity: 1,
        rotate: 0,
        duration: 1.5,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.mt-12 img',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Activities (Ordered List) Animation
gsap.fromTo(
    '.wall-container ol li, .run-container ol li',
    { x: 50, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        duration: 0.6,
        stagger: 0.15,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.wall-container ol, .run-container ol',
            start: 'top 90%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Grid Content in Service Section
gsap.fromTo(
    '.service-container .grid > div',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1,
        stagger: 0.2,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.service-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// advisory member

gsap.fromTo(
    '.advisory-container h3, .advisory-container h2',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.advisory-container h3, .advisory-container h2',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Advisory Content Animation
gsap.fromTo(
    '.advisory-container .prose p',
    { y: 20, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 0.8,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.advisory-container .prose',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Advisory Members Animation
gsap.fromTo(
    '.advisory-member div',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.advisory-member',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Team Section Title Animation
gsap.fromTo(
    '.advisory-team-container h2',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.advisory-team-container h2',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Team Members Animation
gsap.fromTo(
    '.advisory-team-member div',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.advisory-team-member',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);


gsap.fromTo(
    '.upcoming-event-container h2',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.upcoming-event-container h2',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Upcoming Events Cards Animation
gsap.fromTo(
    '.upcoming-event-container .grid div',
    { x: -30, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.upcoming-event-container .grid',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Recent Events Title and Subtitle Animation
gsap.fromTo(
    '.recent-event-container h2, .recent-event-container p',
    { scale: 0.95, opacity: 0 },
    {
        scale: 1,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.recent-event-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Recent Events Cards Animation
gsap.fromTo(
    '.recent-event-container a',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.recent-event-container .grid',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);


gsap.fromTo(
    '.view-event-container h1, .view-event-container p.text-gray-500, .view-event-container p.text-step-gray',
    { y: 20, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.view-event-container h1',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Back Button Hover Animation
const backButton = document.querySelector('.view-event-container a.inline-flex');
if (backButton) {
    backButton.addEventListener('mouseenter', () => {
        gsap.to(backButton, { scale: 1.05, duration: 0.2, ease: 'power1.out' });
    });
    backButton.addEventListener('mouseleave', () => {
        gsap.to(backButton, { scale: 1, duration: 0.2, ease: 'power1.in' });
    });
}

// Event Image Animation
gsap.fromTo(
    '.view-event-container img',
    { scale: 0.9, opacity: 0 },
    {
        scale: 1,
        opacity: 1,
        duration: 1.2,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.view-event-container img',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Event Description Animation
gsap.fromTo(
    '.view-event-container .prose p',
    { y: 20, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 0.8,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.view-event-container .prose',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Sidebar Upcoming Events Animation
gsap.fromTo(
    '.view-event-container aside ul li',
    { x: -30, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.view-event-container aside',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);


//mews page
gsap.fromTo(
    '.new-page-container h2, .new-page-container p.text-step-gray',
    { y: 20, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.new-page-container',
            start: 'top 80%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Divider Line Animation
gsap.fromTo(
    '.new-page-container h2::after',
    { width: 0 },
    {
        width: '100%',
        duration: 1,
        ease: 'power2.out',
        scrollTrigger: {
            trigger: '.new-page-container h2',
            start: 'top 85%',
        },
    }
);

// Main News Cards Animation
gsap.fromTo(
    '#news .grid div a',
    { y: 30, opacity: 0 },
    {
        y: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '#news',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Sidebar More News Animation
gsap.fromTo(
    '.new-page-container ul li',
    { x: -30, opacity: 0 },
    {
        x: 0,
        opacity: 1,
        stagger: 0.2,
        duration: 1,
        ease: 'power3.out',
        scrollTrigger: {
            trigger: '.new-page-container ul',
            start: 'top 85%',
            toggleActions: 'play none none reverse',
        },
    }
);

// Hover Effects
document.querySelectorAll('.new-page-container a').forEach((link) => {
    link.addEventListener('mouseenter', () => {
        gsap.to(link, { scale: 1.05, duration: 0.3, ease: 'power1.out' });
    });
    link.addEventListener('mouseleave', () => {
        gsap.to(link, { scale: 1, duration: 0.3, ease: 'power1.in' });
    });
});
