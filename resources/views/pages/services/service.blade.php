@extends('layout.layout1')

@php
     $header='false';
     $footer = 'false';
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

    <div class="aximo-breadcrumb">
        <div class="container">
            <h1 class="post__title">Our Services</h1>
            <nav class="breadcrumbs">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li aria-current="page"> Our Services</li>
                </ul>
            </nav>

        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="section aximo-section-padding3">
        <div class="container">
            <div class="aximo-section-title center">
                <h2>
                    We provide effective
                    <span class="aximo-title-animation">
                        design solutions
                        <span class="aximo-title-icon">
                            <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                        </span>
                    </span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-design-tools"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>UI/UX Design</h3>
                            <p>Focusing on user interface (UI) and user experience (UX) design enhance the usability and accessibility of digital products & app.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.1s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-branding"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Graphic Design</h3>
                            <p>Creating visual elements such as logos, branding materials, page layout techniques, brochures, & other marketing collateral.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.2s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-web"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Web Design</h3>
                            <p>Designing and developing websites to ensure they are visually look and appealing, user-friendly, and functional your website.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.3s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-design-thinking"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Motion Graphics</h3>
                            <p>Creating animate graphics, videos for various purposes, including marketing and entertainment. To help sell a product or service.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.4s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-layers"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Packaging Design</h3>
                            <p>Creating packaging solutions for products that not only protect them but also attract customers on store shelves.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.5s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-rating-stars-1"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Logo and Branding</h3>
                            <p>Creating or refreshing a company's logo and developing a cohesive visual identity, business card, letterhead, & style guides.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.6s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-chef"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Illustration</h3>
                            <p>Producing custom illustrations for editorial content, books, websites, marketing materials, magazines and more.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.7s">
                        <div class="aximo-iconbox-icon">
                            <i class="icon-target-1"></i>
                        </div>
                        <div class="aximo-iconbox-data">
                            <h3>Product Design</h3>
                            <p>Developing the look and feel of physical products, considering ergonomics, aesthetics, and functionality.</p>
                            <a class="aximo-icon" href="{{ ('singleService') }}"><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End section -->

    <div class="aximo-auto-slider-section">
        <div class="swiper aximo-auto-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="aximo-auto-slider-item">
                        <h3>Let's create new experiences</h3>
                        <img src="{{ asset('assets/images/v1/star3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End section -->

    <div class="section">
        <div class="container">
            <div class="aximo-faq-wrap">
                <div class="row">
                    <div class="col-lg-7 d-flex align-items-center">
                        <div class="aximo-default-content">
                            <h2>
                                <span class="aximo-title-animation">
                                    Our high-quality
                                    <span class="aximo-title-icon">
                                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                                    </span>
                                </span>
                                working processes
                            </h2>
                            <p>We focus at every stage on effective communication and collaboration between the client and ensuring that the final design meets the client's objectives and expectations.</p>
                            <p>It is important to note that these are simplified steps, and the actual work process may vary depending on the complexity of the project.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="aximo-accordion-wrap wow fadeInUpX" data-wow-delay="0.1s" id="aximo-accordion">
                            <div class="aximo-accordion-item open">
                                <div class="aximo-accordion-header">
                                    <h3>01/ Project idea</h3>
                                </div>
                                <div class="aximo-accordion-body">
                                    <p>The process starts with a detailed discussion with the client to understand their idea & goals.</p>
                                </div>
                            </div>
                            <div class="aximo-accordion-item">
                                <div class="aximo-accordion-header">
                                    <h3>02/ Brainstorming</h3>
                                </div>
                                <div class="aximo-accordion-body">
                                    <p>Brainstorming is a group creativity technique in which members attempt to find a conclusion.</p>
                                </div>
                            </div>
                            <div class="aximo-accordion-item">
                                <div class="aximo-accordion-header">
                                    <h3>03/ Launch</h3>
                                </div>
                                <div class="aximo-accordion-body">
                                    <p>The completed design assets or final product are delivered with necessary documentation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End section -->

    <div class="section aximo-section-padding">
        <div class="container">
            <div class="aximo-section-title center">
                <h2>
                    These FAQs help
                    <span class="aximo-title-animation">
                        clients learn about us
                        <span class="aximo-title-icon">
                            <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                        </span>
                    </span>
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="aximo-accordion-normal-wrap responsive-margin">
                        <div class="aximo-accordion-normal-item">
                            <div class="aximo-accordion-normal-icon">
                                <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                            </div>
                            <div class="aximo-accordion-normal-data">
                                <h3>What services does agency offer?</h3>
                                <p>Clients often seek to understand the range of design services an agency provides, such as graphic design, web design, branding.</p>
                            </div>
                        </div>
                        <div class="aximo-accordion-normal-item">
                            <div class="aximo-accordion-normal-icon">
                                <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                            </div>
                            <div class="aximo-accordion-normal-data">
                                <h3>What is your design process like?</h3>
                                <p>Explaining the design agency's process from initial concept to final delivery helps clients understand what to expect.</p>
                            </div>
                        </div>
                        <div class="aximo-accordion-normal-item">
                            <div class="aximo-accordion-normal-icon">
                                <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                            </div>
                            <div class="aximo-accordion-normal-data">
                                <h3>How much does design work cost?</h3>
                                <p>The cost of our design services varies depending on the scope of the project. We provide customized quotes after discussing requirements.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aximo-accordion-normal-wrap">
                        <div class="aximo-accordion-normal-item">
                            <div class="aximo-accordion-normal-icon">
                                <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                            </div>
                            <div class="aximo-accordion-normal-data">
                                <h3>What's your design process like?</h3>
                                <p>Our design process typically involves discovery, concept development, design, revisions based on feedback, and finalization.</p>
                            </div>
                        </div>
                        <div class="aximo-accordion-normal-item">
                            <div class="aximo-accordion-normal-icon">
                                <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                            </div>
                            <div class="aximo-accordion-normal-data">
                                <h3>How do you handle user feedback?</h3>
                                <p>We value client feedback and work closely with you to make sure user happy with the final design. We offer a specific number of revisions.</p>
                            </div>
                        </div>
                        <div class="aximo-accordion-normal-item">
                            <div class="aximo-accordion-normal-icon">
                                <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                            </div>
                            <div class="aximo-accordion-normal-data">
                                <h3>Can we see samples of your work?</h3>
                                <p>Yes, we're proud to showcase a portfolio of our previous projects. You can find examples of our work on our website or view our portfolio.</p>
                            </div>
                        </div>
                    </div>
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
