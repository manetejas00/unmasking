@extends('layout.layout1')

@php
        $title='Team Details';
        $subTitle = 'Team Details';
@endphp

@section('content')

<div class="section aximo-section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="aximo-team-details-thumb wow fadeInUpX" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/images/team/team1.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-7 d-flex align-items-center">
                <div class="aximo-default-content m-left-gap">
                    <h2>
                        <span class="aximo-title-animation">
                            Let's introduce
                            <span class="aximo-title-icon">
                                <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                            </span>
                        </span>
                        Mr. Andrew Mark
                    </h2>
                    <p>Andrew Mark is the CEO of our design agency. He plays a key role in overseeing the agency's operations, growth and strategic direction.</p>
                    <p>As the leader of the organization, he also sets the company's vision, mission, and values. He spent 15 years providing strategic direction and ensuring the organization's goals and objectives were met.</p>
                    <div class="aximo-social-icon aximo-btn-wrap">
                        <ul>
                            <li>
                                <a href="">
                                    <i class="icon-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="icon-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="icon-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="icon-linkedin"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End section -->

<div class="section aximo-section-padding3 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="aximo-team-setails">
                    <h3>Qualifications:</h3>
                    <ul>
                        <li><span>Educational Background:</span> A degree in a relevant field, such as graphic design & UX.</li>
                        <li><span>Industry Experience:</span> Extensive experience in the design industry 15 years & can be crucial.</li>
                        <li><span>Business Acumen:</span> A solid understanding of business principles, marketing, and finance.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="aximo-team-setails">
                    <h3>Attributes:</h3>
                    <ul>
                        <li><span>Visionary:</span> A successful CEO in a design agency should have a clear vision.</li>
                        <li><span>Strong Communication Skills: </span> A effective communication is essential for interaction.</li>
                        <li><span>Business Acumen:</span> A strong understanding of business principles, finance, and marketing.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="aximo-team-setails">
                    <h3>Professional Skills:</h3>
                    <div class="aximo-skillbar-wrapper">
                        <div class="aximo-skillbar" data-percent="95">
                            <p class="aximo-skillbar-lable">
                                <span class="aximo-skill-bar-title">Problem-Solving Skills:</span>
                                <span class="skill-bar-percent"></span>
                            </p>
                            <div class="aximo-skillbar-box">
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="aximo-skillbar" data-percent="83">
                            <p class="aximo-skillbar-lable">
                                <span class="aximo-skill-bar-title">Networking Skills:</span>
                                <span class="skill-bar-percent"></span>
                            </p>
                            <div class="aximo-skillbar-box">
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                        <div class="aximo-skillbar" data-percent="90">
                            <p class="aximo-skillbar-lable">
                                <span class="aximo-skill-bar-title">Leadership Skills:</span>
                                <span class="skill-bar-percent"></span>
                            </p>
                            <div class="aximo-skillbar-box">
                                <div class="skillbar-bar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
