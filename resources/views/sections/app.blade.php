@extends('layout')
@section('content')
    <section class="mt-5 mb-5" id="about_us">
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
                        Designing the Future <br>with <span class="main-color">Consultify Arabia<span>
                    </div>
                    <div class="text-about_us-mini mt-3">
                        we are Agency that Providing Digital Services and convert any idea to reality starting from scratch
                        . professional in designing interfaces for Websites, Landing Pages, Mobile Apps, and Dashboards.
                        Skilled in creating creative designs and have abiltity to convert it to real prodcut.
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary btn-contact-red" style="width: 30%">
                            Get In Touch
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5" id="services" style="background-color:#202020;height:600px">
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
                        <button class="btn btn-primary btn-contact-red" style="width: 30%">
                            Get In Touch
                        </button>
                    </div>
                </div>
                <div class="col-md-7 d-flex justify-content-end mt-5 pr-5">
                    <img src="{{ asset('images/sec_section.png') }}" width='700px' class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 mb-5" id="projects">
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
                <div class="col-md-12 d-flex justify-content-center align-items-center mt-3">
                    <button class="btn custom-button mx-2 active" onclick="showImages('uiux', this)">UI/UX</button>
                    <button class="btn custom-button mx-2" onclick="showImages('web', this)">Website Development</button>
                    <button class="btn custom-button mx-2" onclick="showImages('mobile', this)">Mobile App</button>
                    <button class="btn custom-button mx-2" onclick="showImages('graphic', this)">Graphic Design</button>
                    <button class="btn custom-button mx-2" onclick="showImages('devops', this)">DevOps</button>
                </div>
            </div>

            <div id="uiux" class="image-container mb-4 active">
                <div class="row mb-4 d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_2.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_3.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_4.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_5.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
            </div>

            <div id="web" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_2.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_3.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_4.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_5.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
            </div>

            <div id="mobile" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_2.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_3.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_4.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_5.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
            </div>

            <div id="graphic" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_2.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_3.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_4.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_5.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
            </div>

            <div id="devops" class="image-container mb-4">
                <div class="row mb-4 d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_2.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_3.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{ asset('images/macit_4.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-center"><img src="{{ asset('images/macit_5.png') }}"
                            width="320px" class="img-fluid"></div>
                    <div class="col-md-3 d-flex justify-content-start"><img src="{{ asset('images/macit_1.png') }}"
                            width="320px" class="img-fluid"></div>
                </div>
            </div>
            <div class="row d-flex justify-content-center text-center">
                <div class="col-md-12 mb-4 mt-5 d-flex justify-content-center align-items-center">
                    <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid">
                    <span class="about_us">Our</span>
                    <span class="about_us text-dark">Clinets</span>
                    <img src="{{ asset('images/Line_gray.png') }}" width='143px' class="img-fluid">
                </div>
                <div class="col-md-5 text-about_us mb-5 text-center">
                    Our<span class="main-color">Clinets </span>
                </div>
            </div>
            <div class="row d-flex justify-content-between">
                <div class="col-md-2"><img src="{{ asset('images/img_12.png') }}" class="img-fluid"></div>
                <div class="col-md-2"><img src="{{ asset('images/img_11.png') }}" class="img-fluid"></div>
                <div class="col-md-2"><img src="{{ asset('images/img_10.png') }}" class="img-fluid"></div>
                <div class="col-md-2"><img src="{{ asset('images/img_9.png') }}" class="img-fluid"></div>
                <div class="col-md-2"><img src="{{ asset('images/img_8.png') }}" class="img-fluid"></div>
                <div class="col-md-2"><img src="{{ asset('images/img_7.png') }}" class="img-fluid"></div>
            </div>
            <div class="row d-flex justify-content-between mt-5">
                <div class="col-md-1"><img src="{{ asset('images/img_6.png') }}" class="img-fluid"></div>
                <div class="col-md-1"><img src="{{ asset('images/img_5.png') }}" class="img-fluid"></div>
                <div class="col-md-1"><img src="{{ asset('images/img_4.png') }}" class="img-fluid"></div>
                <div class="col-md-1"><img src="{{ asset('images/img_3.png') }}" class="img-fluid"></div>
                <div class="col-md-1"><img src="{{ asset('images/img_2.png') }}" class="img-fluid"></div>
                <div class="col-md-1"><img src="{{ asset('images/img_1.png') }}" class="img-fluid"></div>
                <div class="col-md-1"><img src="{{ asset('images/img_13.png') }}" class="img-fluid"></div>
            </div>
        </div>
    </section>
   
    <section class="mt-5" id="contact_us" style="background-color:#F1F1F1;height:790px">
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
                        Lorem ipsum dolor sit amet consectetur. Adipiscing nisl id at arcu enim id gravida pulvinar.
                        Tristique consectetur mi curabitur congue enim dignissim
                    </div>
                    <form class="contact-form mt-5" action="#">
                        <input name="name" type="text" placeholder="Your Name" id="name">
                        <input name="email" type="email" placeholder="Your Email" id="email">
                        <textarea name="message" placeholder="Your Message" id="message">
                        </textarea>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary btn-contact-red">
                                Get In Touch
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 d-flex justify-content-end mt-5 pr-5">
                    <img src="{{ asset('images/human.png') }}" width='680px' class="img-fluid">
                </div>
            </div>
        </div>
    </section>
     <section class="mt-5 mb-5" id="asked">
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
                            <div class="mt-4">What is your typical project timeline?</div>
                            <img src="{{ asset('images/Vector_2.png') }}" class="dropdown-icon closed">
                            <img src="{{ asset('images/Vector_1.png') }}" class="dropdown-icon open">
                        </div>
                        <div class="dropdown-content">
                            <p>Project timelines vary based on the scope and complexity of the work. Generally, UI/UX and
                                graphic design projects take 2-4 weeks, web and mobile development projects take 6-12 weeks,
                                and DevOps engagements are ongoing as needed.</p>
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
