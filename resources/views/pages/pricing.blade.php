@extends('layout.layout1')

@php
     $header='false';
     $footer='false';
     $breadcrumb='false';
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
      <h1 class="post__title">Pricing Plans</h1>
      <nav class="breadcrumbs">
        <ul>
          <li><a href="{{ route('index') }}">Home</a></li>
          <li aria-current="page"> Pricing Plans</li>
        </ul>
      </nav>

    </div>
  </div>
  <!-- End breadcrumb -->

  <div class="section aximo-section-padding3">
    <div class="container">
      <div class="aximo-pricing-title">
        <h2>
          Pick from one of our
          <span class="aximo-title-animation">
          ready packages
          <span class="aximo-title-icon">
            <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
          </span>
          </span>
        </h2>
      </div>
      <div class="pricing-btn">
        <label>Billed monthly</label>
        <div class="toggle-btn">
          <input class="form-check-input btn-toggle price-deck-trigger" type="checkbox" id="flexSwitchCheckDefault" data-pricing-trigger data-target="#table-price-value" checked>
        </div>
        <label>Billed annually</label>
      </div>
      <div class="row" id="table-price-value" data-pricing-dynamic data-value-active="monthly">
        <div class="col-xl-4 col-md-6">
          <div class="aximo-pricing-wrap2 wow fadeInUpX" data-wow-delay="0.1s">
            <div class="aximo-pricing-header2">
              <h5>Web Design Package</h5>
            </div>
            <div class="aximo-pricing-price2">
              <h2>$</h2>
              <h2 class="aximo-price dynamic-value" data-active="299" data-monthly="299" data-yearly="399"></h2>
            </div>
            <div class="aximo-pricing-description">
              <p>Web design packages offered a range of services and features to create websites</p>
            </div>
            <div class="aximo-pricing-body2">
              <ul>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Consultation & Discovery</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Responsive Design</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">E-commerce Integration</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Custom Web Design</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Testing and Quality Assurance</li>
              </ul>
            </div>
            <a class="aximo-pricing-btn2" href="">Select the package</a>
          </div>
        </div>
        <div class="col-xl-4 col-md-6">
          <div class="aximo-pricing-wrap2 wow fadeInUpX" data-wow-delay="0.2s">
            <div class="aximo-pricing-header2">
              <h5>UX/UI Package</h5>
            </div>
            <div class="aximo-pricing-price2">
              <h2>$</h2>
              <h2 class="aximo-price dynamic-value" data-active="499" data-monthly="499" data-yearly="599"></h2>
            </div>
            <div class="aximo-pricing-description">
              <p>UX/UI package offered a set of services aimed at designing user-friendly UI/UX</p>
            </div>
            <div class="aximo-pricing-body2">
              <ul>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Information Architecture</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Wireframing & Prototyping</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Usability Testing</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Visual Design & </li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">User Interface (UI) Design</li>
              </ul>
            </div>
            <a class="aximo-pricing-btn2 active" href="">Select the package</a>
          </div>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="aximo-pricing-wrap2 wow fadeInUpX" data-wow-delay="0.3s">
            <div class="aximo-pricing-header2">
              <h5>Branding Package</h5>
            </div>
            <div class="aximo-pricing-price2">
              <h2>$</h2>
              <h2 class="aximo-price dynamic-value" data-active="299" data-monthly="299" data-yearly="399"></h2>
            </div>
            <div class="aximo-pricing-description">
              <p>Branding package typically includes a comprehensive set of brand's identity</p>
            </div>
            <div class="aximo-pricing-body2">
              <ul>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Brand Guidelines</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Stationery & Website Design</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Social Media Assets</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Signage & Packaging Design</li>
                <li><img src="{{ asset('assets/images/icon/check.svg') }}" alt="">Brand Launch Support</li>
              </ul>
            </div>
            <a class="aximo-pricing-btn2" href="">Select the package</a>
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
      <div class="aximo-pricing-border">
        <div class="row">
          <div class="col-lg-6">
            <div class="aximo-default-content">
              <h2>
                <span class="aximo-title-animation">
                Read our FAQ
                <span class="aximo-title-icon">
                  <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                </span>
                </span>
                for clarification
              </h2>
              <p>We understand that you considering our services, that's why we’ve curated a collection of frequently asked questions.</p>
            </div>
            <a class="aximo-errors-btn contact-us wow fadeInUpX" data-wow-delay="0.1s"  href="{{ route('contact') }}">Contact us <span><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></span></a>
          </div>
          <div class="col-lg-6">
            <div class="aximo-accordion-normal-wrap m_top_responsive">
              <div class="aximo-accordion-normal-item">
                <div class="aximo-accordion-normal-icon">
                  <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                </div>
                <div class="aximo-accordion-normal-data">
                  <h3>Can I buy multiple plans?</h3>
                  <p>Yes, you can try us for free for 30 days. Our friendly team will work with you to get you up and running as soon as possible.</p>
                </div>
              </div>
              <div class="aximo-accordion-normal-item">
                <div class="aximo-accordion-normal-icon">
                  <img src="{{ asset('assets/images/icon/question.svg') }}" alt="">
                </div>
                <div class="aximo-accordion-normal-data">
                  <h3>What is the cancelation policy?</h3>
                  <p>The cancellation policy refers to the rules and guidelines established by a business regarding the cancellation of services, products.</p>
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
        </div>
      </div>


    </div>
  </div>
  <!-- ENd section -->

  <div class="section aximo-section-padding3">
    <div class="container">
      <div class="aximo-section-title center">
        <h2>
          Clients are always
          <span class="aximo-title-animation">
          satisfied with us
          <span class="aximo-title-icon">
            <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
          </span>
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.1s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Super customer service!</h3>
              <p>Excellent customer service and I was really impressed and happy with my purchase especially as it was a last minute order which got to me in time, and when it arrived I was very happy with the design and size and so was the recipient.</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="{{ asset('assets/images/v1/t_thumb1.png') }}" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>William Jack <span>Founder@XYZ</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.2s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Exceptional creativity and vision</h3>
              <p>Working Pixcels Themes was a game-changer for our brand. Their exceptional creativity & vision breathed new life into our visual. The logo they perfectly captures our essence & has become instantly recognizable. We couldn't be happier the results!</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="{{ asset('assets/images/v1/t_thumb2.png') }}" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>Smith Align <span>Businessman</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.3s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Innovative and professional</h3>
              <p>I can't say enough good things about them. Their team is not only incredibly talented but also highly professional. They listened to our ideas and brought to life in ways we couldn't have imagined. Their innovative approach and dedication to our project.</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="{{ asset('assets/images/v1/t_thumb3.png') }}" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>Milano Joe <span>Creative Director</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="aximo-testimonial-wrap wow fadeInUpX" data-wow-delay="0.4s">
            <div class="aximo-testimonial-rating">
              <ul>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
                <li><i class="icon-star"></i></li>
              </ul>
            </div>
            <div class="aximo-testimonial-data">
              <h3>Transformed our brand</h3>
              <p>Our partnership with Pixcels Themes transformed our brand from ordinary to extraordinary. Their branding expertise and design work elevated our marketing materials to a whole new level. Our customers have taken notice, and boost in brand recognition.</p>
            </div>
            <div class="aximo-testimonial-author">
              <div class="aximo-testimonial-author-thumb">
                <img src="{{ asset('assets/images/v1/t_thumb4.png') }}" alt="">
              </div>
              <div class="aximo-testimonial-author-data">
                <p>Danial Mark <span>Marketing Director</span></p>
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
