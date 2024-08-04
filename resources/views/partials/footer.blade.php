<footer class="footer bg-light text-center py-3"
    style="background-image: url('{{ asset('images/header.png') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 420px;">
    <div class="container">
        <div class="row mt-5 d-flex justify-content-between">
            <div class="col-md-4">
                <div class="d-flex justify-content-start">
                    @if ($contact->media->isNotEmpty())
                        <img src="{{ Storage::url($contact->media->first()->file_path) }}" width='110px' height='110px'
                            class="img-fluid">
                    @endif
                </div>
                <div class="mt-4 d-flex justify-content-start text-left text-footer-1">Convert your idea to reality with
                    Samurai Techno<br>Agency we provide custom services to help
                    you<br>in your dream contact with us now..</div>
                <ul class="list-unstyled d-flex justify-content-left pr-0 pl-0 mt-4">
                    <li class="custom-li"><a href="#"><img src="{{ asset('images/Facebook.png') }}" width='10px'
                                class="img-fluid mt-3 mb-3"></a></li>
                    <li class="custom-li"><a href="#"><img src="{{ asset('images/Instagram.png') }}"
                                width='10px' class="img-fluid mt-3 mb-3"></a></li>
                    <li class="custom-li"><a href="#"><img src="{{ asset('images/Twitter.png') }}" width='15px'
                                class="img-fluid mt-3 mb-3"></a></li>
                    <li class="custom-li"><a href="#"><img src="{{ asset('images/LinkedIn.png') }}" width='15px'
                                class="img-fluid mt-3 mb-3"></a></li>
                </ul>
            </div>
            <div class="col-md-2 d-none d-md-block">
                <div class="text-li-footer-main">Pages</div>
                <ul class="list-unstyled mt-4">
                    <li class="text-li-footer-sub"><a class="text-white" href="#home">Home</a></li>
                    <li class="text-li-footer-sub"><a class="text-white" href="#about_us">About Us</a></li>
                    <li class="text-li-footer-sub"><a class="text-white" href="#services">Services</a></li>
                    <li class="text-li-footer-sub"><a class="text-white" href="#projects">Projects</a></li>
                </ul>
            </div>
            <div class="col-md-2 d-none d-md-block">
                <div class="text-li-footer-main">Pages</div>
                <ul class="list-unstyled mt-4">
                    <li class="text-li-footer-sub"><a class="text-white" href="#contact_us">Contact Us</a></li>
                    <li class="text-li-footer-sub"><a class="text-white" href="#asked">Questions</a></li>
                </ul>
            </div>
            <div class="col-md-4 d-none d-md-block align-items-end">
                <div class="text-li-footer-main">Contact Information</div>
                <ul class="list-unstyled mt-4">
                    <li class="text-li-footer-sub"><a class="text-white" href="#"><img
                                src="{{ asset('images/sms.png') }}" width='24px' height='24px'
                                class="img-fluid mt-3 mb-3"> {{ $contact->email }}</a></li>
                    <li class="text-li-footer-sub"><a class="text-white" href="#"><img
                                src="{{ asset('images/call.png') }}" width='24px' height='24px'
                                class="img-fluid mt-3 mb-3"> {{ $contact->phone }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <p class="text-white">&copy; {{ date('Y') }} Samurai Techno. All rights reserved.</p>
</footer>
