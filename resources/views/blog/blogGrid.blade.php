@extends('layout.layout1')

@php
    $title='Blog Grid';
    $subTitle = 'Blog Grid';
@endphp

@section('content')

<div class="section aximo-section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="single-post-item wow fadeInUpX" data-wow-delay="0.1s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/images/blog/blog6.png') }}" alt="">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-category">
                                        <a href="">Marketing</a>
                                    </div>
                                    <div class="post-date">
                                        June 18, 2024
                                    </div>
                                </div>
                                <a href="{{ route('singleBlog') }}">
                                    <h3 class="entry-title">
                                        ive high-income skills to build your business
                                    </h3>
                                </a>
                                <a class="post-read-more" href="{{ route('singleBlog') }}">read more <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-post-item wow fadeInUpX" data-wow-delay="0.2s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/images/blog/blog7.png') }}" alt="">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-category">
                                        <a href="">Business</a>
                                    </div>
                                    <div class="post-date">
                                        June 16, 2024
                                    </div>
                                </div>
                                <a href="{{ route('singleBlog') }}">
                                    <h3 class="entry-title">
                                        I run a $10,000/month business use AI tools
                                    </h3>
                                </a>
                                <a class="post-read-more" href="{{ route('singleBlog') }}">read more <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-post-item wow fadeInUpX" data-wow-delay="0.3s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/images/blog/blog8.png') }}" alt="">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-category">
                                        <a href="">Technology</a>
                                    </div>
                                    <div class="post-date">
                                        June 14, 2024
                                    </div>
                                </div>
                                <a href="{{ route('singleBlog') }}">
                                    <h3 class="entry-title">
                                        Different types loan and how to deal with
                                    </h3>
                                </a>
                                <a class="post-read-more" href="{{ route('singleBlog') }}">read more <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-post-item wow fadeInUpX" data-wow-delay="0.4s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/images/blog/blog9.png') }}" alt="">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-category">
                                        <a href="">Solutions</a>
                                    </div>
                                    <div class="post-date">
                                        June 12, 2024
                                    </div>
                                </div>
                                <a href="{{ route('singleBlog') }}">
                                    <h3 class="entry-title">
                                        Business analytics is a practice essential
                                    </h3>
                                </a>
                                <a class="post-read-more" href="{{ route('singleBlog') }}">read more <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-post-item wow fadeInUpX" data-wow-delay="0.5s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/images/blog/blog10.png') }}" alt="">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-category">
                                        <a href="">Brand</a>
                                    </div>
                                    <div class="post-date">
                                        June 18, 2024
                                    </div>
                                </div>
                                <a href="{{ route('singleBlog') }}">
                                    <h3 class="entry-title">
                                        A person business with fun and success
                                    </h3>
                                </a>
                                <a class="post-read-more" href="{{ route('singleBlog') }}">read more <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-post-item wow fadeInUpX" data-wow-delay="0.6s">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/images/blog/blog11.png') }}" alt="">
                            </div>
                            <div class="post-content">
                                <div class="post-meta">
                                    <div class="post-category">
                                        <a href="">Business</a>
                                    </div>
                                    <div class="post-date">
                                        June 22, 2024
                                    </div>
                                </div>
                                <a href="{{ route('singleBlog') }}">
                                    <h3 class="entry-title">
                                        Three guys have me for a seat in business
                                    </h3>
                                </a>
                                <a class="post-read-more" href="{{ route('singleBlog') }}">read more <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- navigation -->
                <div class="aximo-navigation">
                    <nav class="navigation pagination" aria-label="Posts">
                        <div class="nav-links">
                            <span aria-current="page" class="page-numbers current">1</span>
                            <a class="page-numbers" href="">2</a>
                            <a class="next page-numbers" href="">
                                <img src="{{ asset('assets/images/icon/arrow-right8.svg') }}" alt="">
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-sidebar">
                    <div class="widget">
                        <div class="wp-block-search__inside-wrapper">
                            <input type="search" placeholder="Type keyword here" class="wp-block-search__input">
                            <button id="wp-block-search__button" type="submit">
                                <img src="{{ asset('assets/images/icon/search.svg') }}" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="wp-block-heading">Categories:</h3>
                        <ul>
                            <li><a href="">Business</a></li>
                            <li><a href="">Development</a></li>
                            <li><a href="">Technology</a></li>
                            <li><a href="">Creative Director</a></li>
                            <li><a href="">Uncategorized</a></li>
                        </ul>
                    </div>
                    <div class="widget aximo_recent_posts_Widget">
                        <h3 class="wp-block-heading">Recent Posts:</h3>
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="">
                                    <img src="{{ asset('assets/images/blog/blog1.png') }}" alt="">
                                </a>
                            </div>
                            <div class="post-text">
                                <div class="post-date">
                                    June 18, 2024
                                </div>
                                <a class="post-title" href="">7 businesses for easy money</a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="">
                                    <img src="{{ asset('assets/images/blog/blog2.png') }}" alt="">
                                </a>
                            </div>
                            <div class="post-text">
                                <div class="post-date">
                                    June 18, 2024
                                </div>
                                <a class="post-title" href="">My 3 tips for business ideas</a>
                            </div>
                        </div>
                        <div class="post-item">
                            <div class="post-thumb">
                                <a href="">
                                    <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="">
                                </a>
                            </div>
                            <div class="post-text">
                                <div class="post-date">
                                    June 18, 2024
                                </div>
                                <a class="post-title" href="">12 Halloween costume ideas</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="wp-block-heading">Tags:</h3>
                        <div class="wp-block-tag-cloud">
                            <a href="">Marketing</a>
                            <a href="">Business</a>
                            <a href="">Solutions</a>
                            <a href="">Studio</a>
                            <a href="">Brand</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End section -->

@endsection
