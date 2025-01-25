<div class="section dark-bg aximo-section-padding">
    <div class="container">
        <div class="aximo-section-title center light">
            <h2>
                Have a wide range of
                <span class="aximo-title-animation">
                    creative projects
                    <span class="aximo-title-icon">
                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                    </span>
            </h2>
        </div>
    </div>

    <!-- Swiper Slider -->
    <div class="swiper aximo-project-slider">
        <div class="swiper-wrapper">
            @foreach ($projects as $project)
                <div class="swiper-slide">
                    <div class="aximo-project-thumb">
                        <!-- Project Image -->
                        <img src="{{ Storage::url($project->image) ? Storage::url($project->image) : '/assets/images/v1/user1.png' }}"
                            alt="">
                        <div class="aximo-project-wrap">
                            <div class="aximo-project-data">
                                <!-- Project Title -->
                                <a href="{{ $project->slug }}">
                                    <h3>{{ $project->title ?? 'Untitled Project' }}</h3>
                                </a>
                                <!-- Project Description -->
                                <p>{{ $project->description ?? 'No description available for this project.' }}</p>
                            </div>
                            <a class="aximo-project-icon"
                                href="{{ route('singlePortfolio', ['slug' => $project->slug]) }}">
                                <svg width="34" height="28" viewBox="0 0 34 28" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.9795 2C19.9795 2 20.5 8 25.9795 11.2C28.4887 12.6653 31.9795 14 31.9795 14M31.9795 14H2M31.9795 14C31.9795 14 28.5339 15.415 25.9795 16.8C19.9795 20.0533 19.9795 26 19.9795 26"
                                        stroke="#FDFDE1" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
