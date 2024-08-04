@extends('layout')
@section('content')
    <section class="mt-5 mb-5 fade-in" id="about_us">
        <div class="container container-header">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <img src="{{ asset('images/first_section.png') }}" width='470px' class="img-fluid"
                        style="margin-top: -20px;">
                </div>
                <div class="col-md-6 mt-5">
                    <div class="mb-4">
                        <img src="{{ asset('images/Line.png') }}" width='143px' class="img-fluid"> <span
                            class="about_us">About
                            Us</span>
                    </div>
                    <div class="text-about_us mb-4">
                        Designing the Future <br>with <span class="main-color">Samurai Techno<span>
                    </div>
                    <div class="text-about_us-mini mt-3">
                        we are Agency that Providing Digital Services and convert any idea to reality starting from scratch
                        . professional in designing interfaces for Websites, Landing Pages, Mobile Apps, and Dashboards.
                        Skilled in creating creative designs and have abiltity to convert it to real prodcut.
                    </div>
                    <div class="mt-3">
                        <a href="#contact_us">
                            <button class="btn btn-primary btn-contact-red" style="width: 30%">
                                Get In Touch
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 fade-in slide-up" id="services" style="background-color:#202020;">
        <div class="container container-header">
            <div class="row d-flex justify-content-between pl-5 pr-5">
                <div class="col-md-5 mt-5">
                    <div class="mb-4">
                        <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid"> <span
                            class="about_us text-white">What We Are <span class="main-color">Offering</span></span>
                    </div>
                    <div class="text-about_us mb-4 main-color">
                        Services <span class="text-white">We Can Offer You ! </span>
                    </div>
                    <div class="text-about_us-mini mt-3 text-white">
                        we are Agency that Providing Digital Services and convert any idea to <br>reality starting from
                        scratch
                        . <br>professional in designing interfaces <br>for Websites, Landing Pages, Mobile <br>Apps,and
                        Dashboards.
                        Skilled in <br>creating creative designs and have <br>abiltity to convert it to real prodcut.
                    </div>
                    <div class="mt-3">
                        <a href="#contact_us">
                            <button class="btn btn-primary btn-contact-red">
                                Get In Touch
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 d-flex justify-content-end mt-5 pr-5">
                    <div class="image-gallery">
                        <div class="row no-gutters mt-5">
                            <div class="col-md-4">
                                <a href="{{ route('web.index') }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/macit_5.png') }}" class="img-fluid" alt="Image 1">
                                        <div class="overlay">
                                            <div class="text">
                                                <span class="arrow">&#8250;</span>
                                                <p>Web Develpoment</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('mobile.index') }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/macit_2.png') }}" class="img-fluid" alt="Image 4">
                                        <div class="overlay">
                                            <div class="text">
                                                <span class="arrow">&#8250;</span>
                                                <p>Mobile App</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('uiux.index') }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/macit_4.png') }}" class="img-fluid" alt="Image 2">
                                        <div class="overlay">
                                            <div class="text">
                                                <span class="arrow">&#8250;</span>
                                                <p>Ui/Ux</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('graphic.index') }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/macit_1.png') }}" class="img-fluid" alt="Image 5">
                                        <div class="overlay">
                                            <div class="text">
                                                <span class="arrow">&#8250;</span>
                                                <p>Graphic Design</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('devops.index') }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/macit_3.png') }}" class="img-fluid" alt="Image 3">
                                        <div class="overlay">
                                            <div class="text">
                                                <span class="arrow">&#8250;</span>
                                                <p>DevOps</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="{{ route('testing.index') }}">
                                    <div class="gallery-item">
                                        <img src="{{ asset('images/macit_3.png') }}" class="img-fluid" alt="Image 6">
                                        <div class="overlay">
                                            <div class="text">
                                                <span class="arrow">&#8250;</span>
                                                <p>Testing</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 " id="projects">
        <div class="container container-header">
            <div class="row d-flex justify-content-center text-center mb-4">
                <div class="col-md-12 mb-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid">
                    <span class="about_us">Our</span>
                    <span class="about_us text-dark">Portfolio</span>
                    <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid">
                </div>
                <div class="col-md-5 text-about_us mb-4 text-center">
                    <span class="main-color">Projects </span>We Have Completed
                </div>
                <div class="col-md-12 d-flex justify-content-center align-items-center mt-3 button-about">
                    <button class="btn custom-button mx-2 active" onclick="showImages('uiux', this)">UI/UX</button>
                    <button class="btn custom-button mx-2" onclick="showImages('web', this)">Website Development</button>
                    <button class="btn custom-button mx-2" onclick="showImages('mobile', this)">Mobile App</button>
                    <button class="btn custom-button mx-2" onclick="showImages('graphic', this)">Graphic Design</button>
                    <button class="btn custom-button mx-2" onclick="showImages('devops', this)">DevOps</button>
                </div>
            </div>
            <div id="uiux" class="image-container mb-4 active">
                <div class="row mb-4 d-flex justify-content-center">
                    @foreach ($ui_ux->take(3) as $project)
                        <div
                            class="col-md-3 col-6 mb-3 d-flex {{ $loop->first ? 'justify-content-end' : ($loop->last ? 'justify-content-start' : 'justify-content-center') }}">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($ui_ux->slice(3, 3) as $project)
                        <div
                            class="col-md-3 col-6 mb-3 d-flex {{ $loop->first ? 'justify-content-end' : ($loop->last ? 'justify-content-start' : 'justify-content-center') }}">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div id="web" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    @foreach ($web->take(3) as $project)
                        <div
                            class="col-md-3 col-6 mb-3 d-flex {{ $loop->first ? 'justify-content-end' : ($loop->last ? 'justify-content-start' : 'justify-content-center') }}">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($web->slice(3, 3) as $project)
                        <div
                            class="col-md-3 col-6 mb-3 d-flex {{ $loop->first ? 'justify-content-end' : ($loop->last ? 'justify-content-start' : 'justify-content-center') }}">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <div id="mobile" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    @foreach ($mobile->take(3) as $project)
                        <div
                            class="col-md-3 col-6 mb-3 d-flex {{ $loop->first ? 'justify-content-end' : ($loop->last ? 'justify-content-start' : 'justify-content-center') }}">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($mobile->slice(3, 3) as $project)
                        <div
                            class="col-md-3 col-6 mb-3 d-flex {{ $loop->first ? 'justify-content-end' : ($loop->last ? 'justify-content-start' : 'justify-content-center') }}">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>


            <div id="graphic" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    @foreach ($graphic->take(3) as $project)
                        <div class="col-md-3 col-6 mb-3 d-flex justify-content-center">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($graphic->slice(3, 3) as $project)
                        <div class="col-md-3 col-6 mb-3 d-flex justify-content-center">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>


            <div id="devops" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    @foreach ($devOps->take(3) as $project)
                        <div class="col-md-3 col-6 mb-3 d-flex justify-content-center">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row mb-4 d-flex justify-content-center">
                    @foreach ($devOps->slice(3, 3) as $project)
                        <div class="col-md-3 col-6 mb-3 d-flex justify-content-center">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach ($devOps->slice(6, 3) as $project)
                        <div class="col-md-3 col-6 mb-3 d-flex justify-content-center">
                            @if ($project->media->isNotEmpty())
                                <img src="{{ Storage::url($project->media->first()->file_path) }}" width="100%"
                                    class="img-fluid" alt="{{ $project->name }} Image">
                            @else
                                <p>No Image</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5" id="clients">
        <div class="container container-header">
            <div class="row d-flex justify-content-center text-center mb-4">
                <div class="col-md-12 mb-4 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid">
                    <span class="about_us">Our</span>
                    <span class="about_us text-dark">Clients</span>
                    <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid">
                </div>
                <div class="col-md-5 text-about_us mb-4 text-center">
                    Our<span class="main-color">Clients</span>
                </div>
                <div class="col-md-12 mt-4 image-container d-flex justify-content-between mb-4">
                    <div class="col-md-2"><img src="{{ asset('images/img_1.png') }}" class="img-fluid" alt="Image 1">
                    </div>
                    <div class="col-md-2"><img src="{{ asset('images/img_2.png') }}" class="img-fluid" alt="Image 2">
                    </div>
                    <div class="col-md-2"><img src="{{ asset('images/img_3.png') }}" class="img-fluid" alt="Image 3">
                    </div>
                    <div class="col-md-2"><img src="{{ asset('images/img_4.png') }}" class="img-fluid" alt="Image 4">
                    </div>
                    <div class="col-md-2"><img src="{{ asset('images/img_5.png') }}" class="img-fluid" alt="Image 5">
                    </div>
                    <div class="col-md-2"><img src="{{ asset('images/img_6.png') }}" class="img-fluid" alt="Image 6">
                    </div>
                </div>

                <div class="col-md-12 mt-4 image-container d-flex justify-content-between">
                    <div class="col-md-1"><img src="{{ asset('images/img_7.png') }}" class="img-fluid" alt="Image 7">
                    </div>
                    <div class="col-md-1"><img src="{{ asset('images/img_8.png') }}" class="img-fluid" alt="Image 8">
                    </div>
                    <div class="col-md-1"><img src="{{ asset('images/img_9.png') }}" class="img-fluid" alt="Image 9">
                    </div>
                    <div class="col-md-1"><img src="{{ asset('images/img_10.png') }}" class="img-fluid" alt="Image 10">
                    </div>
                    <div class="col-md-1"><img src="{{ asset('images/img_11.png') }}" class="img-fluid" alt="Image 11">
                    </div>
                    <div class="col-md-1"><img src="{{ asset('images/img_12.png') }}" class="img-fluid" alt="Image 12">
                    </div>
                    <div class="col-md-1"><img src="{{ asset('images/img_13.png') }}" class="img-fluid" alt="Image 13">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 " id="contact_us" style="background-color:#F1F1F1;">
        <div class="container container-header">
            <div class="row d-flex justify-content-between pl-5 pr-5">
                <div class="col-md-6 mt-5">
                    <div class="mb-4">
                        <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid"> <span
                            class="about_us main-color">Contact Us</span>
                    </div>
                    <div class="text-about_us mb-4 main-color">
                        Contact<span class="text-dark"> Us & We Can Work Together</span>
                    </div>
                    <div class="text-contact_us-mini mt-3">
                        At Samurai Techno, we believe in creating technology that makes a difference. Whether you have a
                        question, need support, or want to discuss a new project, our team is here to help.
                        Reach out to us and let’s shape the future together!
                    </div>
                    <form class="contact-form mt-5" action="{{ route('contact_us.store') }}" method="POST">
                        @csrf <input name="name" type="text" placeholder="Your Name" id="name"
                            class="form-control mb-3">
                        <input name="email" type="email" placeholder="Your Email" id="email"
                            class="form-control mb-3">
                        <textarea name="text" placeholder="Your Message" id="text" class="form-control mb-3"></textarea>
                        <div class="mt-3">
                                <button type="submit" class="btn btn-primary btn-contact-red">
                                    Get In Touch
                                </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end mt-5 pr-5 custom-img">
                    <img src="{{ asset('images/human.png') }}" width='100%' class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5 fade-in slide-up" id="asked">
        <div class="container container-header">
            <div class="row d-flex justify-content-center text-center mb-4">
                <div class="col-md-5 text-about_us mb-4 text-center">
                    Frequently Asked <span class="main-color">Questions</span>
                </div>
                <div class="col-md-12 d-flex flex-column align-items-center mt-3">
                    <div class="faq-item">
                        <div class="dropdown-header" onclick="toggleDropdown(this)">
                            <div class="mt-4">What services does Samurai Techno offer?</div>
                            <img src="{{ asset('images/Vector_2.png') }}" class="dropdown-icon closed">
                            <img src="{{ asset('images/Vector_1.png') }}" class="dropdown-icon open">
                        </div>
                        <div class="dropdown-content">
                            <p>Samurai Techno offers a range of services including UI/UX design, web development, mobile app
                                development, graphic design, and DevOps.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="dropdown-header" onclick="toggleDropdown(this)">
                            <div class="mt-4">How can I get in touch with Samurai Techno?</div>
                            <img src="{{ asset('images/Vector_2.png') }}" class="dropdown-icon closed">
                            <img src="{{ asset('images/Vector_1.png') }}" class="dropdown-icon open">
                        </div>
                        <div class="dropdown-content">
                            <p>You can contact us via email at [Your Email], phone at [Your Phone Number], or through our
                                website's contact form.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="dropdown-header" onclick="toggleDropdown(this)">
                            <div class="mt-4">Can I request a custom feature for my project?</div>
                            <img src="{{ asset('images/Vector_2.png') }}" class="dropdown-icon closed">
                            <img src="{{ asset('images/Vector_1.png') }}" class="dropdown-icon open">
                        </div>
                        <div class="dropdown-content">
                            <p>Yes, we can accommodate custom feature requests based on your project requirements. Please
                                discuss your needs with us, and we will provide a solution that fits your project.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="dropdown-header" onclick="toggleDropdown(this)">
                            <div class="mt-4">Do you offer support after project completion?</div>
                            <img src="{{ asset('images/Vector_2.png') }}" class="dropdown-icon closed">
                            <img src="{{ asset('images/Vector_1.png') }}" class="dropdown-icon open">
                        </div>
                        <div class="dropdown-content">
                            <p>Yes, we offer support and maintenance packages after project completion. Please contact us
                                for more information about our support services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
