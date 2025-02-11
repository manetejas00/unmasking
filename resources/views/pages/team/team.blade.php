@extends('layout.layout1')

@php
        $title='Our Team';
        $subTitle = 'Our Team';
@endphp

@section('content')

<div class="section aximo-section-padding3">
    <div class="container">
        <div class="aximo-section-title center">
            <h2>
                We have a team of
                <span class="aximo-title-animation">
                    creative people
                    <span class="aximo-title-icon">
                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                    </span>
                </span>
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team1.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Andrew Mark</h3>
                        </a>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.1s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team2.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Jack Taylor</h3>
                        </a>
                        <p>Senior Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.2s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team3.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Martine Joy</h3>
                        </a>
                        <p>Project Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.3s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team4.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Adam Straw</h3>
                        </a>
                        <p>Web Developer</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.4s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team5.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>William Jack</h3>
                        </a>
                        <p>Creative Director</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.5s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team6.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Alex Tom</h3>
                        </a>
                        <p>UI/UX Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.6s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team7.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Robin Lesser</h3>
                        </a>
                        <p>Chief Executive Officer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.7s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team8.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Sheikh David</h3>
                        </a>
                        <p>HR Director</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.8s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team9.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Mark Strew</h3>
                        </a>
                        <p>UI Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="0.9s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team10.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Fradik Hazbag</h3>
                        </a>
                        <p>Researcher</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="1s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team11.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Sam Kainiz</h3>
                        </a>
                        <p>Lead Developer</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="aximo-team-wrap wow fadeInUpX" data-wow-delay="1.1s">
                    <div class="aximo-team-thumb">
                        <img src="{{ asset('assets/images/team/team12.png') }}" alt="">
                        <div class="aximo-social-icon team-social">
                            <ul>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://facebook.com/" target="_blank">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="icon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="aximo-team-data">
                        <a href="{{ route('singleTeam') }}">
                            <h3>Mac Jackson</h3>
                        </a>
                        <p>Marketing Expert</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End section -->
 
@endsection