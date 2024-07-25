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
</head>

<body>
    <header>
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function showImages(containerId, button) {
            // Hide all image containers
            var containers = document.getElementsByClassName('image-container');
            for (var i = 0; i < containers.length; i++) {
                containers[i].classList.remove('active');
            }

            // Show the selected image container
            document.getElementById(containerId).classList.add('active');

            // Remove active class from all buttons
            var buttons = document.getElementsByClassName('custom-button');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove('active');
            }

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
    </script>
</body>

</html>
