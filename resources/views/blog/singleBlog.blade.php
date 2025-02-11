@extends('layout.layout1')

@php
    $title='Blog Details';
    $subTitle = 'Blog Details';
@endphp

@section('content')

<div class="section post-details-page aximo-section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-thumbnail wow fadeInUpX" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/images/blog/blog3.png') }}" alt="">
                </div>
                <div class="single-post-content-wrap">
                    <div class="post-meta">
                        <div class="post-category">
                            <a href="">Business</a>
                        </div>
                        <div class="post-date">
                            June 18, 2024
                        </div>
                    </div>
                    <div class="entry-content">
                        <h3>Learn these five high-income skills to build your one-person business and get rich</h3>
                        <p>By definition, most high-value skill stacks can’t be taught in schools. If the masses could easily access them, they wouldn’t be high-value skills anymore. You would become replaceable. And value comes from scarcity. Here’s the skill stack to thrive as a one-person business.</p>

                        <span>#1: Learn to Tweet your way into a boardroom</span>
                        <p>As a first-generation immigrant, money and networks weren’t given to me. So instead of going through the front door, I tried a back door approach.</p>

                        <span>#2: Web Development and Design</span>
                        <p>Proficiency in web development and design allows you to create and maintain websites for clients. As more businesses and individuals seek an online presence.</p>

                        <blockquote>"Mastering high-income skills can empower you to build a one-person business and create the path to financial."</blockquote>

                        <span>#3: Copywriting and Content Creation</span>
                        <p>Strong copywriting and content creation skills are essential for creating persuasive, engaging, and valuable content for websites, blogs, marketing materials, and social media.</p>

                        <span>#4: Digital Product Creation</span>
                        <p>Creating digital products like e-books, online courses, webinars, or software can generate substantial income. This skill involves not only product creation but also marketing and selling these digital assets to your target audience.</p>

                        <span>#5: Sales and Persuasion</span>
                        <p>Mastering the art of sales and persuasion can help you sell products or services, whether they are your own or those of other businesses. Understanding consumer.</p>
                        <p>While these skills can help you build a one-person business and increase your income potential, it's changing market trends. Additionally, starting and growing a business often involves more than just one skill, so consider a holistic approach to building your business and wealth.</p>

                        <div class="post-tag-wrap">
                            <div class="post-tag">
                                <h3>Tags:</h3>
                                <div class="wp-block-tag-cloud">
                                    <a href="">Business</a>
                                    <a href="">Solutions</a>
                                </div>
                            </div>
                            <div class="post-like-comment">
                                <ul>
                                    <li><a href=""><img src="{{ asset('assets/images/icon/like.svg') }}" alt="">175</a></li>
                                    <li><a href=""><img src="{{ asset('assets/images/icon/comment.svg') }}" alt="">23</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-comment">
                            <h3>Comments:</h3>
                            <ul>
                                <li>
                                    <div class="post-comment-wrap">
                                        <div class="post-comment-thumb">
                                            <img src="{{ asset('assets/images/team/team5.png') }}" alt="">
                                        </div>
                                        <div class="post-comment-data">
                                            <a class="comment-reply" href="">Reply</a>
                                            <strong>Ricky Smith</strong>
                                            <span>June 21, 2023</span>
                                            <p>It is a long established fact that a reader will be distrac readable content of a page when looking at its layout. The point of using is that it has two.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="children">
                                    <div class="post-comment-wrap">
                                        <div class="post-comment-thumb">
                                            <img src="{{ asset('assets/images/team/team6.png') }}" alt="">
                                        </div>
                                        <div class="post-comment-data">
                                            <a class="comment-reply" href="">Reply</a>
                                            <strong>Joshua Jones</strong>
                                            <span>September 22, 2023</span>
                                            <p>It is a long established fact that a reader will be distra readable content of a page when looking its layout. The point of using.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-comment-wrap">
                                        <div class="post-comment-thumb">
                                            <img src="{{ asset('assets/images/team/team7.png') }}" alt="">
                                        </div>
                                        <div class="post-comment-data">
                                            <a class="comment-reply" href="">Reply</a>
                                            <strong>Mark Jones</strong>
                                            <span>June 21, 2023</span>
                                            <p>It is a long established fact that a reader will be distrac readable content of a page when looking at its layout. The point of using is that it has two.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-box wow fadeInUpX" data-wow-delay="0.1s">
                            <h3>Leave a comments:</h3>
                            <form action="#">
                                <div class="comment-box-form">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="comment-form">
                                                <input type="text" placeholder="Your Name*">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="comment-form">
                                                <input type="email" placeholder="Email Address*">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-form">
                                        <textarea name="textarea" placeholder="Write us your comment"></textarea>
                                    </div>
                                    <button id="comment-btn" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
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