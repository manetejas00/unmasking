@extends('layout.layout1')

@php
    $header='false';
    $footer='false';
    $title='Portfolio Two Column';
    $subTitle = 'Portfolio Two Column';
@endphp

@section('content')

    <header class="site-header aximo-header-section aximo-header1 dark-bg" id="sticky-menu">
        <div class="container">
            <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ $settings?->logo_image ? Storage::url($settings->logo_image) : asset('assets/images/logo/logo-white.svg') }}" alt="" class="light-version-logo">
                    </a>
                </div>
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Demo <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu" id="submenu-1">
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index') }}">
                                            <span class="menu-item-text">Design Agency</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index02') }}">
                                            <span class="menu-item-text">Startup Agency</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index03') }}">
                                            <span class="menu-item-text">SEO Agency</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index04') }}">
                                            <span class="menu-item-text">Business Consultation</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index05') }}">
                                            <span class="menu-item-text">Digital Marketing</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index06') }}">
                                            <span class="menu-item-text">Interior Design Agency</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('index07') }}">
                                            <span class="menu-item-text">Advertising agency</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('about') }}" class="nav-link-item">About Us</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu" id="submenu-2">
                                    <li class="sub-menu--item">
                                        <a href="{{ route('about') }}">
                                            <span class="menu-item-text">About Us</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('pricing') }}">
                                            <span class="menu-item-text">Pricing</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">blog <i class="fas fa-angle-down"></i></a>
                                        <ul class="sub-menu shape-none" id="submenu-3">
                                            <li class="sub-menu--item">
                                                <a href="{{ route('blog') }}">
                                                    <span class="menu-item-text">Our Blog</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('blogGrid') }}">
                                                    <span class="menu-item-text">Blog grid</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('singleBlog') }}">
                                                    <span class="menu-item-text">blog details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Service<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-4">
                                            <li class="sub-menu--item">
                                                <a href="{{ route('service') }}">
                                                    <span class="menu-item-text">service</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('singleService') }}">
                                                    <span class="menu-item-text">service details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Team<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-5">
                                            <li class="sub-menu--item">
                                                <a href="{{ route('team') }}">
                                                    <span class="menu-item-text">team</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('singleTeam') }}">
                                                    <span class="menu-item-text">team details</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-6">
                                            <li class="sub-menu--item">
                                                <a href="{{ route('portfolio02') }}">
                                                    <span class="menu-item-text">Portfolio One Column</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('portfolio01') }}">
                                                    <span class="menu-item-text">Portfolio Two Column</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('singlePortfolio') }}">
                                                    <span class="menu-item-text">Single Portfolio</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-7">
                                            <li class="sub-menu--item">
                                                <a href="{{ route('faq') }}">
                                                    <span class="menu-item-text">faq</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('errorPage') }}">
                                                    <span class="menu-item-text">Error 404</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('testimonial') }}">
                                                    <span class="menu-item-text">testimonial</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('comingSoon') }}">
                                                    <span class="menu-item-text">Coming Soon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sub-menu--item nav-item-has-children">
                                        <a href="#" data-menu-get="h3" class="drop-trigger">Account<i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="sub-menu shape-none" id="submenu-8">
                                            <li class="sub-menu--item">
                                                <a href="{{ route('signUp') }}">
                                                    <span class="menu-item-text">sign up</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('signIn') }}">
                                                    <span class="menu-item-text">sign in</span>
                                                </a>
                                            </li>
                                            <li class="sub-menu--item">
                                                <a href="{{ route('resetPassword') }}">
                                                    <span class="menu-item-text">reset password</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Blog <i class="fas fa-angle-down"></i></a>
                                <ul class="sub-menu" id="submenu-9">
                                    <li class="sub-menu--item">
                                        <a href="{{ route('blog') }}">
                                            <span class="menu-item-text">blog</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('blogGrid') }}">
                                            <span class="menu-item-text">Blog grid</span>
                                        </a>
                                    </li>
                                    <li class="sub-menu--item">
                                        <a href="{{ route('singleBlog') }}">
                                            <span class="menu-item-text">blog Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link-item">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                    <a class="aximo-default-btn pill aximo-header-btn"  href="{{ route('contact') }}">
                        Contact Us
                    </a>
                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger light">
                    <span></span>
                </div>
                <!--/.Mobile Menu Hamburger Ends-->
            </nav>
        </div>
    </header>
    <!--End landex-header-section -->

    <div class="aximo-project-one-column">
        <div class="container">
            <div class="aximo-section-title center">
                <h2>
                    Have a wide range of
                    <span class="aximo-title-animation">
                        creative projects
                        <span class="aximo-title-icon">
                            <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                        </span>
                    </span>
                </h2>
            </div>
            <div class="aximo-project-wrap3 wow fadeInUpX" data-wow-delay="0.1s">
                <div class="aximo-project-thumb3">
                    <img src="{{ asset('assets/images/portfolio/p_9.png') }}" alt="">
                    <a href="{{ route('singlePortfolio') }}" class="aximo-project-link">
                        <img src="{{ asset('assets/images/icon/link2.svg') }}" alt="">
                    </a>
                </div>
                <div class="aximo-project-data3">
                    <h3><a href="{{ route('singlePortfolio') }}">Product Design</a></h3>
                    <p>Developing the look and feel of physical products, considering ergonomics, aesthetics, & functionality.</p>
                </div>
            </div>
            <div class="aximo-project-wrap3 wow fadeInUpX" data-wow-delay="0.2s">
                <div class="aximo-project-thumb3">
                    <img src="{{ asset('assets/images/portfolio/p_10.png') }}" alt="">
                    <a href="{{ route('singlePortfolio') }}" class="aximo-project-link">
                        <img src="{{ asset('assets/images/icon/link2.svg') }}" alt="">
                    </a>
                </div>
                <div class="aximo-project-data3">
                    <h3> <a href="{{ route('singlePortfolio') }}">Market Expansion Blueprint</a></h3>
                    <p>Develop a comprehensive strategy to expand your market reach, identify new opportunities, and grow</p>
                </div>
            </div>
            <div class="aximo-project-wrap3 wow fadeInUpX" data-wow-delay="0.3s">
                <div class="aximo-project-thumb3">
                    <img src="{{ asset('assets/images/portfolio/p_11.png') }}" alt="">
                    <a href="{{ route('singlePortfolio') }}" class="aximo-project-link">
                        <img src="{{ asset('assets/images/icon/link2.svg') }}" alt="">
                    </a>
                </div>
                <div class="aximo-project-data3">
                    <h3><a href="{{ route('singlePortfolio') }}">Strategic Growth Accelerator</a></h3>
                    <p>Develop a growth-focused on strategy, including all the market expansion, and the product development.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End section -->

    <!-- Footer  -->
    <footer class="aximo-footer-section dark-bg">
        <div class="container">
            <div class="aximo-footer-top aximo-section-padding">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="aximo-default-content light position-relative">
                            <h2>
                                <span class="aximo-title-animation">
                                    Let's start a
                                    <span class="aximo-title-icon">
                                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                                    </span>
                                </span>
                                project together
                            </h2>
                            <p>We work closely with our clients to understand their objectives, target audience, and unique needs. We use our creative skills to translate these requirements and practical design solutions.</p>
                            <div class="aximo-info-wrap">
                                <div class="aximo-info">
                                    <ul>
                                        <li>Give us a call:</li>
                                        <li><a href="">(123) 456-7890</a></li>
                                    </ul>
                                </div>
                                <div class="aximo-info">
                                    <ul>
                                        <li>Send us an email:</li>
                                        <li><a href="mailto:pixcelsthemes@gmail.com">pixcelsthemes@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="aximo-social-icon social-large">
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
                            <div class="aximo-hero-shape aximo-footer-shape">
                                <img src="{{ asset('assets/images/v1/shape1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="aximo-form-wrap">
                            <h4>Send us a message</h4>
                            <form action="#">
                                <div class="aximo-form-field">
                                    <input type="text" placeholder="Your name">
                                </div>
                                <div class="aximo-form-field">
                                    <input type="email" placeholder="Your email address">
                                </div>
                                <div class="aximo-form-field">
                                    <input type="text" placeholder="+088-234-6849">
                                </div>
                                <div class="aximo-form-field">
                                    <textarea name="textarea" placeholder="Write your message here..."></textarea>
                                </div>
                                <button id="aximo-submit-btn" type="submit">Send message <span><img src="{{ asset('assets/images/icon/arrow-right3.svg') }}" alt=""></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
                        <div class="aximo-copywright one">
                            <p> &copy; Copyright 2024, All Rights Reserved by Pixcels Themes</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </footer>

@endsection
