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
                        <li class="nav-item">
                            <a href="{{ route('index') }}" class="nav-link-item">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('about') }}" class="nav-link-item">About Us</a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Pages <i
                                    class="fas fa-angle-down"></i></a>
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
                                    <a href="#" data-menu-get="h3" class="drop-trigger">blog <i
                                            class="fas fa-angle-down"></i></a>
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
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Service<i
                                            class="fas fa-angle-down"></i>
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
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Team<i
                                            class="fas fa-angle-down"></i>
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
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio<i
                                            class="fas fa-angle-down"></i>
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-6">
                                        <li class="sub-menu--item">
                                            <a href="{{ route('portfolio01') }}">
                                                <span class="menu-item-text">Portfolio One Column</span>
                                            </a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href="{{ route('portfolio02') }}">
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
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i
                                            class="fas fa-angle-down"></i>
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
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Account<i
                                            class="fas fa-angle-down"></i>
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
                            <a href="#" class="nav-link-item drop-trigger">Blog <i
                                    class="fas fa-angle-down"></i></a>
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
                <a class="aximo-default-btn pill aximo-header-btn" href="{{ route('contact') }}">
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
