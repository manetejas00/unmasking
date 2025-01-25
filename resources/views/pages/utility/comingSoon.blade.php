@extends('layout.layout1')

@php
    $header='false';
    $footer='false';    
@endphp

@section('content')

<div class="aximo-logo-section">
    <div class="container">
        <a href="{{ route('index') }}">
            <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="">
        </a>
    </div>
</div>
<!-- end -->

<div class="section aximo-section-padding">
    <div class="container">
        <div class="aximo-coming-title">
            <h2>
                Exciting things are
                <span class="aximo-title-animation">
                    coming soon!
                    <span class="aximo-title-icon">
                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                    </span>
                </span>
            </h2>
            <p>Get notified when we launch something new for you! Enter your email address here and stay tuned with us.</p>
        </div>
        <div class="aximo-countdown-wrap">
            <div class="aximo-countdown-item">
                <div class="countdown-days">
                    <div class="number"></div>
                </div>
                <p>Days</p>
            </div>
            <div class="aximo-countdown-item">
                <div class="countdown-hours">
                    <div class="number"></div>
                </div>
                <p>Hours</p>
            </div>
            <div class="aximo-countdown-item">
                <div class="countdown-minutes">
                    <div class="number"></div>
                </div>
                <p>Minutes</p>
            </div>
            <div class="aximo-countdown-item">
                <div class="countdown-seconds">
                    <div class="number"></div>
                </div>
                <p>Seconds</p>
            </div>
        </div>
        <form action="#">
            <div class="aximo-coming-newsletter wow fadeInUpX" data-wow-delay="0.1s">
                <input type="email" placeholder="Enter your email">
                <button type="submit" id="aximo-notified-btn">Get Notified</button>
                <p>We do not share your information with any third party & no spam*</p>
            </div>
        </form>
    </div>
</div>
<!-- Footer  -->

<footer class="aximo-footer-section dark-bg">
    <div class="container">
        <div class="aximo-footer-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="aximo-footer-logo">
                        <a href="">
                            <img src="{{ asset('assets/images/logo/logo-white.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-copywright">
                        <p> &copy; Copyright 2024, All Rights Reserved by Pixcels Themes</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</footer>

@endsection 
