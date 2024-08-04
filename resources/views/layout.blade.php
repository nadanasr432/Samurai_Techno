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
    <a href="#home" class="scroll-to-top">
        <img src="{{ asset('images/top_btn.png') }}" alt="Scroll to Top" width="300px" class="img-fluid">
    </a>
   
    <!-- WhatsApp Icon -->
    <a href="https://wa.me/{{ $contact->phone }}" class="whatsapp-icon" target="_blank">
        <img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" width="50px" class="img-fluid">
    </a>


    <footer>
        @include('partials.footer')
    </footer>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
