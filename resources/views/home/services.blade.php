<div class="section aximo-section-padding4">
    <div class="container">
        <div class="aximo-section-title center">
            <h2>
                {{ $services->first()->main_title ?? 'We provide effective design solutions' }} <!-- Access main_title from the first service -->
                <span class="aximo-title-icon">
                    <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                </span>
            </h2>
        </div>
        <div class="aximo-service-wrap">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-6">
                        <div class="aximo-iconbox-wrap wow fadeInUpX" data-wow-delay="0.1s">
                            <div class="aximo-iconbox-icon">
                                <i class="{{ $service->icon }}"></i>
                            </div>
                            <div class="aximo-iconbox-data">
                                <h3>{{ $service->title }}</h3>
                                <p>{{ $service->description }}</p>
                                {{-- {{ url($service->slug) }} --}}
                                {{-- href="{{ route('service.show', ['slug' => $service->slug]) }} --}}
                                <a class="aximo-icon" href="">
                                    <img src="{{ asset('assets/images/icon/arrow-right.svg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
