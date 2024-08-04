<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Samurai Techno')</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        .project-item {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            transition: box-shadow 0.3s ease;
        }

        .project-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .project-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .project-item .project-title {
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
        }

        .project-item .project-link {
            display: block;
            padding: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .project-item .project-link:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body>
    @php
        $contact = App\Models\Contact::first();
    @endphp
    <header>
        <div class="container container-header">
            <nav class="navbar navbar-expand-lg navbar-light navbar-transparent d-flex justify-content-between">
                <a class="navbar-brand" href="#">
                    <div class="d-flex justify-content-start">
                        @if ($contact->media->isNotEmpty())
                            <img src="{{ Storage::url($contact->media->first()->file_path) }}" width='80px'
                                height='70px' class="img-fluid" class="img-fluid">
                        @endif
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav" style="gap: 30px;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#home"
                                style="color: #CF1D1D !important">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#about_us"
                                style="color: #CF1D1D !important">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#services"
                                style="color: #CF1D1D !important">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#projects"
                                style="color: #CF1D1D !important">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#contact_us"
                                style="color: #CF1D1D !important">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('landing') }}#asked"
                                style="color:#CF1D1D !important ">Questions</a>
                        </li>
                    </ul>
                </div>
                <a href="#contact_us" class="btn btn-primary btn-contact-red">
                    Contact Us
                </a>
            </nav>
        </div>

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
