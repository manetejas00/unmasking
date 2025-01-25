<div class="aximo-hero-section dark-bg">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-8">
                <div class="aximo-hero-content">
                    <h1>
                        <span class="aximo-title-animation">
                            @isset($hero->title)
                                {{ $hero->title }}
                            @else
                                Default Title
                            @endisset

                        </span>
                    </h1>
                    <p>
                        @isset($hero->description)
                            {{ $hero->description }}
                        @else
                            Default description text goes here.
                        @endisset
                    </p>
                    <div class="aximo-hero-user-wrap">
                        <div class="aximo-hero-user-thumb">
                            @foreach($hero->users ?? [] as $userImage)
                                <div class="aximo-hero-user-thumb-item">
                                    <img src="{{ Storage::url($userImage) ? Storage::url($userImage) : '/assets/images/v1/user1.png' }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="aximo-call-btn" href="{{ $hero->cta_url ?? '#' }}"> <!-- Provides fallback URL -->
                        {{ $hero->cta_text ?? 'Default CTA Text' }} <i class="icon-call"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="aximo-hero-thumb">
                    @isset($hero->image)
                        <img src="{{ Storage::url($hero->image) ? Storage::url($hero->image) : '/assets/images/v1/hero-thumb.png' }}" alt="">
                    @else
                        <!-- Optional fallback image or content -->
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
