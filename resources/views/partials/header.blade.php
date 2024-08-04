<section class="header" id="home"
    style="background-image: url('{{ asset('images/header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; height:710px;">
    <div class="container container-header">
        <nav class="navbar navbar-expand-lg navbar-light navbar-transparent d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <div class="d-flex justify-content-start">
                    @if ($contact->media->isNotEmpty())
                        <img src="{{ Storage::url($contact->media->first()->file_path) }}" width='80px' height='70px'
                            class="img-fluid" class="img-fluid">
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
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about_us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact_us">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#asked">Questions</a>
                    </li>
                </ul>
            </div>
            <a href="#contact_us" class="btn btn-primary btn-contact-red">
                Contact Us
            </a>
        </nav>
        <div class="row mt-4">
            <div class="col-md-12 mt-5">
                <div class="text_small animate fadeInUp">Welcome To<span class="custom-color"> Samurai Techno</span>
                </div>
                <div class="text_large mt-4 animate fadeInUp delay-1s">Turn your idea into reality With <br> Samurai
                    Techno
                </div>
                <div class="text_avarage mt-4 animate fadeInUp delay-2s">we provide custom services to convert your idea
                    into reality <br>with
                    Samurai Techno, start from ui services to publish it..</div>
                <div class="col-md-12 mt-5 d-flex justify-content-start gap-25 pl-0 animate fadeInUp delay-3s">
                    <a href="#contact_us">
                        <button class="btn btn-primary btn-custom-red">
                            <span class="mt-5 mb-5"> Get In Touch </span>
                        </button>
                    </a>
                    <a href="#projects">
                        <button class="btn btn-primary btn-custom-white">
                            View Portfolio
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
