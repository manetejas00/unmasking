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
        <div class="aximo-account-title">
            <h2>
                <span class="aximo-title-animation">
                    Reset Password
                    <span class="aximo-title-icon">
                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                    </span>
                </span>
            </h2>
        </div>
        <div class="aximo-account-wrap wow fadeInUpX" data-wow-delay="0.1s">
            <form action="#">
                <div class="aximo-account-field">
                    <label>Enter email address</label>
                    <input type="email" placeholder="example@gmail.com">
                </div>
                <div class="aximo-account-field">
                    <label>Enter Password</label>
                    <input type="password" placeholder="Enter Password">
                </div>
                <button id="aximo-account-btn" type="submit">Create account</button>
                <div class="aximo-account-bottom m-0">
                    <p>If you didn’t request a password recovery link, please ignore this.</p>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection