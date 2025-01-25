@extends('layout.layout1')

@section('content')

    <div class="section">
        <div class="container">
            <div class="aximo-errors-wrap">
                <div class="aximo-errors-thumb">
                    <img src="{{ asset('assets/images/about/404.png') }}" alt="">
                </div>
                <div class="aximo-errors-title">
                    <h2>
                        We can’t find the page
                        <span class="aximo-title-animation">
                            you are looking for
                            <span class="aximo-title-icon">
                                <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                            </span>
                        </span>
                    </h2>
                </div>
                <a class="aximo-errors-btn wow fadeInUpX" data-wow-delay="0.1s" href="index.html">Return to homepage <span><img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt=""></span></a>

            </div>

        </div>
    </div>
    <!-- End section -->

@endsection