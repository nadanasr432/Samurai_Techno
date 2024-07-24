@extends('layout')
@section('content')
    <section class="mt-5 mb-5" id="about_us">
        <div class="container container-header">
            <div class="row d-flex justify-content-between">
                <div class="col-md-6">
                    <img src="{{ asset('images/first_section.png') }}" width='470px' class="img-fluid"  style="margin-top: -20px;">
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
                        <img src="{{ asset('images/Line.png') }}" width='143px' class="img-fluid"> <span
                            class="about_us text-white">What We Are <span class="main-color">Offering</span></span>
                    </div>
                    <div class="text-about_us mb-4 main-color">
                        Services <span class="text-white">We Can Offer You ! </span> 
                    </div>
                    <div class="text-about_us-mini mt-3 text-white">
                        we are Agency that Providing Digital Services and convert any idea to <br>reality starting from scratch
                        . <br>professional in designing interfaces <br>for Websites, Landing Pages, Mobile <br>Apps,and Dashboards.
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
@endsection
