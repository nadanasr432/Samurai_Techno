<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Samurai Techno')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

</head>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>
    <!-- Fixed Scroll to Top Button -->
    <a href="#home" class="scroll-to-top">
        <img src="{{ asset('images/top_btn.png') }}" alt="Scroll to Top" width="300px" class="img-fluid">
    </a>

    <footer>
        @include('partials.footer')
    </footer>
    <!-- AOS JavaScript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Show images based on the selected category with animation
        function showImages(containerId, button) {
            // Hide all image containers
            var containers = document.querySelectorAll('.image-container');
            containers.forEach(container => {
                container.classList.remove('active');
                // Optionally reset animation here
                container.style.opacity = 0; // Reset opacity
            });

            // Show the selected image container
            var selectedContainer = document.getElementById(containerId);
            if (selectedContainer) {
                selectedContainer.classList.add('active');
                // Use ScrollReveal to trigger the reveal animation
                sr.reveal(`#${containerId}`, {
                    opacity: 0,
                    distance: '20px',
                    duration: 200,
                    delay: 300,
                    easing: 'ease-in-out',
                    afterReveal: function(el) {
                        el.style.opacity = 1; // Ensure opacity is set after reveal
                    }
                });
            }

            // Remove active class from all buttons
            var buttons = document.querySelectorAll('.custom-button');
            buttons.forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');
        }

        // Show UI/UX images by default
        document.addEventListener("DOMContentLoaded", function() {
            showImages('uiux', document.querySelector('.custom-button.active'));
        });

        function toggleDropdown(element) {
            // Find the .faq-item that contains the clicked header
            const faqItem = element.parentElement;
            const content = faqItem.querySelector('.dropdown-content');
            const header = faqItem.querySelector('.dropdown-header');

            // Toggle the 'open' class on the dropdown-content and dropdown-header
            content.classList.toggle('open');
            header.classList.toggle('open');

            // Optional: Close other open dropdowns
            document.querySelectorAll('.faq-item').forEach((item) => {
                if (item !== faqItem) {
                    item.querySelector('.dropdown-content').classList.remove('open');
                    item.querySelector('.dropdown-header').classList.remove('open');
                }
            });
        }

        // Intersection Observer for the 'about_us' section and its text container
        document.addEventListener('DOMContentLoaded', function() {
            const section = document.getElementById('about_us');
            const textContainer = document.querySelector('.text-container');

            function checkVisibility() {
                const rect = section.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    section.classList.add('animate');
                    textContainer.classList.add('animate');
                }
            }

            window.addEventListener('scroll', checkVisibility);
            checkVisibility(); // Check on page load
        });

        // Click handler for gallery items
        document.querySelectorAll('.gallery-item').forEach(container => {
            container.addEventListener('click', () => {
                // Replace with the URL or action you want to perform
                window.location.href = 'https://example.com';
            });
        });

        // Intersection Observer for custom animations
        document.addEventListener("DOMContentLoaded", function() {
            function handleIntersection(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        observer.unobserve(entry.target); // Stop observing after animation
                    }
                });
            }

            const observer = new IntersectionObserver(handleIntersection, {
                threshold: 0.1 // Adjust the threshold as needed
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

        // Initialize ScrollReveal
        const sr = ScrollReveal({
            reset: true,
            mobile: true,
            duration: 2000, // Animation duration in milliseconds
            easing: 'ease-out',
        });

        // Configure animations for different sections
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
            delay: 200, // Delay before the animation starts
            duration: 1000, // Duration of the animation
            easing: 'ease-in-out',
            afterReveal: function(el) {
                el.style.opacity = 1; // Ensure opacity is set after reveal
            }
        });

        sr.reveal('.image-container', {
            opacity: 0,
            origin: 'bottom', // Origin for the slide effect
            distance: '20px', // Distance to slide up from
            delay: 300, // Delay before the animation starts
            duration: 600, // Duration of the animation
            easing: 'ease-in-out',
            afterReveal: function(el) {
                el.style.opacity = 1; // Ensure opacity is set after reveal
            }
        });

        sr.reveal('.btn.custom-button', {
            opacity: 0,
            delay: 400, // Delay before the animation starts
            duration: 600, // Duration of the animation
            easing: 'ease-in-out',
            afterReveal: function(el) {
                el.style.opacity = 1; // Ensure opacity is set after reveal
            }
        });


        // Apply custom animations for specific elements within sections
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

        // Specific animations for the contact_us section
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

        // Apply reveal animation to the section and elements
        sr.reveal('.text_small', {
            origin: 'bottom',
            distance: '20px',
            delay: 0, // No delay, starts immediately
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.text_large', {
            origin: 'bottom',
            distance: '20px',
            delay: 1000, // 1 second delay
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.text_avarage', {
            origin: 'bottom',
            distance: '20px',
            delay: 2000, // 2 seconds delay
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.btn-custom-red', {
            origin: 'bottom',
            distance: '20px',
            delay: 3000, // 3 seconds delay
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });

        sr.reveal('.btn-custom-white', {
            origin: 'bottom',
            distance: '20px',
            delay: 3000, // 3 seconds delay, same as above
            opacity: 0,
            duration: 1000,
            easing: 'ease-in-out'
        });
        ScrollReveal().reveal('.nav-link', {
            origin: 'left', // Direction from which the element will appear
            distance: '50px', // Distance the element will move
            duration: 1000, // Duration of the animation
            delay: 200, // Delay before the animation starts
            opacity: 0, // Initial opacity
            easing: 'ease-in-out', // Easing function for the animation
            interval: 200 // Interval between animations if applied to multiple elements
        });
    </script>
</body>

</html>
