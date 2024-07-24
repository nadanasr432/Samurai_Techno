<section class="header"
    style=" background-image: url('{{ asset('images/header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; height:710px;">
    <div class="container container-header">
        <!-- resources/views/partials/header.blade.php -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <div class="d-flex justify-content-start">
                    <img src="{{ asset('images/logo.jpg') }}" width='100px' height='70px' class="flouid">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav" style="gap: 30px;">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Testimonials</a>
                    </li>
                </ul>
            </div>
            <button class="btn btn-primary btn-contact-red">
                Contact Us
            </button>
        </nav>
        <div class="row mt-4">
            <div class="col-md-12 mt-5">
                <div class="text_small">Welcome To<span class="custom-color"> Consultify Arabia</span></div>
                <div class="text_large mt-4">Turn your idea into reality With <br> Consultify Arabia</div>
                <div class="text_avarage mt-4">we provide custom services to convert your idea into reality with <br>
                    Consultify Arabia , start from ui
                    services to puplish it..</div>
                <div class="col-md-12 mt-5 d-flex justify-content-start gap-25 pl-0">
                    <button class="btn btn-primary btn-custom-red">
                        <span class="mt-5 mb-5"> Get In Touch </span>
                    </button>
                    <button class="btn btn-primary btn-custom-white">
                        View Portfolio
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
