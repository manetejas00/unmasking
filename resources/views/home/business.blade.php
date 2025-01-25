<div class="section aximo-section-padding">
    <div id="aximo-counter"></div>
    <div class="container">
        <div class="aximo-section-title">
            <div class="row">
                <div class="col-lg-7">
                    <h2>
                        {{$business->main_title}}
                    </h2>
                </div>
                <div class="col-lg-4 offset-lg-1 d-flex align-items-center">
                    <p> {{$business->main_description}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="aximo-video-wrap wow fadeInUpX" data-wow-delay="0s">
                    <img src="{{ $business->video_bg_image ? Storage::url($business->video_bg_image) : asset('assets/images/v1/video-bg.png') }}" alt="Video Background">
                    <a class="aximo-video-popup play-btn1 video-init" href="{{ $business->youtube_link }}">
                        <img src="{{ asset('assets/images/v1/play-btn.svg') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="aximo-counter-wrap">
                    <div class="aximo-counter-data">
                        <h2 class="aximo-counter-number">
                            <span class="aximo-counter">{{ $business->years_of_experience }}</span>+
                        </h2>
                        <p>Years of experience</p>
                    </div>
                    <div class="aximo-counter-data">
                        <h2 class="aximo-counter-number">
                            <span class="aximo-counter">{{ $business->successful_projects }}</span>k
                        </h2>
                        <p>Successful projects</p>
                    </div>
                    <div class="aximo-counter-data">
                        <h2 class="aximo-counter-number">
                            <span class="aximo-counter">{{ $business->client_satisfaction_rate }}</span>%
                        </h2>
                        <p>Client satisfaction rate</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
