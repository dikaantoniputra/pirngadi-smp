@extends('landing.layout.app')

@section('title')
Bukti Pembayaran
@endsection

@push('after-style')

@endpush

@section('content')

{{-- <div class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="contact-map mr-70">
                    <div id="map"></div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form">
                    <div class="contact-title mb-45">
                        <h2>Stay <span>Connected</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <form id="contact-form" action="assets/php/mail.php" method="post">
                        <input name="name" placeholder="Name*" type="text">
                        <input name="email" placeholder="Email*" type="email">
                        <input name="subject" placeholder="Subject*" type="text">
                        <textarea name="message" placeholder="Message"></textarea>
                        <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                    </form>
                    <p class="form-messege"></p>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="contact-info-area bg-img pt-180 pb-140 default-overlay" style="background-image:url(assets/img/banner/video.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <p>Uttara, Dhaka, Bangladesh <br>Opposite site Of Yellow.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <div class="contact-info-phn">
                        <div class="info-phn-title">
                            <span>Phone : </span>
                        </div>
                        <div class="info-phn-number">
                            <p>+091111111111</p>
                            <p>+091111111111</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="single-contact-info mb-30 text-center">
                    <div class="contact-info-icon">
                        <span><i class="fa fa-calendar-o"></i></span>
                    </div>
                    <a href="#">education@email.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('after-script')


@endpush