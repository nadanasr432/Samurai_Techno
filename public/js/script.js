 
        function showImages(containerId, button) {
            var containers = document.querySelectorAll('.image-container');
            containers.forEach(container => {
                container.classList.remove('active');
                container.style.opacity = 0;
            });

            var selectedContainer = document.getElementById(containerId);
            if (selectedContainer) {
                selectedContainer.classList.add('active');
                sr.reveal(`#${containerId}`, {
                    opacity: 0,
                    distance: '20px',
                    duration: 200,
                    delay: 300,
                    easing: 'ease-in-out',
                    afterReveal: function(el) {
                        el.style.opacity = 1;
                    }
                });
            }

            var buttons = document.querySelectorAll('.custom-button');
            buttons.forEach(btn => btn.classList.remove('active'));

            button.classList.add('active');
        }

        document.addEventListener("DOMContentLoaded", function() {
            showImages('uiux', document.querySelector('.custom-button.active'));
        });

        function toggleDropdown(element) {
            const faqItem = element.parentElement;
            const content = faqItem.querySelector('.dropdown-content');
            const header = faqItem.querySelector('.dropdown-header');
            content.classList.toggle('open');
            header.classList.toggle('open');
            document.querySelectorAll('.faq-item').forEach((item) => {
                if (item !== faqItem) {
                    item.querySelector('.dropdown-content').classList.remove('open');
                    item.querySelector('.dropdown-header').classList.remove('open');
                }
            });
        }

        // document.addEventListener('DOMContentLoaded', function() {
        //     const section = document.getElementById('about_us');
        //     const textContainer = document.querySelector('.text-container');

        //     function checkVisibility() {
        //         const rect = section.getBoundingClientRect();
        //         if (rect.top < window.innerHeight && rect.bottom >= 0) {
        //             section.classList.add('animate');
        //             textContainer.classList.add('animate');
        //         }
        //     }
        //     window.addEventListener('scroll', checkVisibility);
        //     checkVisibility();
        // });

        document.querySelectorAll('.gallery-item').forEach(container => {
            container.addEventListener('click', () => {
                window.location.href = 'https://example.com';
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            function handleIntersection(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        observer.unobserve(entry.target);
                    }
                });
            }

            const observer = new IntersectionObserver(handleIntersection, {
                threshold: 0.1
            });

            const elements = document.querySelectorAll('.animate');
            elements.forEach(element => {
                observer.observe(element);
            });
        });
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });

        const sr = ScrollReveal({
            reset: true,
            mobile: true,
            duration: 2000,
            easing: 'ease-out',
        });

        sr.reveal('#about_us', {
            opacity: 0,
            transform: 'translateY(50px)',
            delay: 200,
            duration: 2000,
            easing: 'ease-out'
        });

        sr.reveal('#services', {
            opacity: 0,
            transform: 'translateY(50px)',
            delay: 300,
            duration: 2000,
            easing: 'ease-out'
        });

        sr.reveal('#projects', {
            opacity: 0,
            delay: 200,
            duration: 1000,
            easing: 'ease-in-out',
            afterReveal: function(el) {
                el.style.opacity = 1;
            }
        });

        sr.reveal('.image-container', {
            opacity: 0,
            origin: 'bottom',
            distance: '20px',
            delay: 300,
            duration: 600,
            easing: 'ease-in-out',
            afterReveal: function(el) {
                el.style.opacity = 1;
            }
        });

        sr.reveal('.btn.custom-button', {
            opacity: 0,
            delay: 400,
            duration: 600,
            easing: 'ease-in-out',
            afterReveal: function(el) {
                el.style.opacity = 1;
            }
        });

        sr.reveal('.text-about_us', {
            opacity: 0,
            transform: 'translateY(20px)',
            delay: 500,
            duration: 2000,
            easing: 'ease-out'
        });

        sr.reveal('.gallery-item', {
            opacity: 0,
            transform: 'translateY(20px)',
            delay: 600,
            duration: 2000,
            easing: 'ease-out',
            interval: 200
        });

        sr.reveal('#contact_us', {
            origin: 'bottom',
            distance: '0px',
            delay: 200,
            duration: 2000,
            opacity: 0
        });

        sr.reveal('.text-about_us, .text-contact_us-mini, .contact-form', {
            origin: 'left',
            distance: '30px',
            delay: 300,
            duration: 2000,
            opacity: 0
        });

        sr.reveal('.custom-img img', {
            origin: 'right',
            distance: '30px',
            delay: 400,
            duration: 2000,
            opacity: 0
        });

        sr.reveal('.custom-img', {
            origin: 'bottom',
            distance: '0px',
            delay: 500,
            duration: 2000,
            scale: 0.9,
            opacity: 0
        });

        sr.reveal('.text_small', {
            origin: 'bottom',
            distance: '20px',
            delay: 0,
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.text_large', {
            origin: 'bottom',
            distance: '20px',
            delay: 1000,
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.text_avarage', {
            origin: 'bottom',
            distance: '20px',
            delay: 2000,
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.btn-custom-red', {
            origin: 'bottom',
            distance: '20px',
            delay: 3000,
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.btn-custom-white', {
            origin: 'bottom',
            distance: '20px',
            delay: 3000,
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });
        ScrollReveal().reveal('.nav-link', {
            origin: 'left',
            distance: '50px',
            duration: 1000,
            delay: 200,
            opacity: 0,
            easing: 'ease-in-out',
            interval: 200
        });
