@extends('layout.layout1')

@php
        $title='FAQs';
        $subTitle = 'FAQs';
@endphp

@section('content')

<div class="section aximo-section-padding3">
    <div class="container">
        <div class="aximo-section-title center">
            <h2>
                <span class="aximo-title-animation">
                    These FAQs help
                    <span class="aximo-title-icon">
                        <img src="{{ asset('assets/images/v1/star2.png') }}" alt="">
                    </span>
                </span>
                clients learn about us
            </h2>
        </div>
        <div class="aximo-accordion-wrap wow fadeInUpX" data-wow-delay="0.1s" id="aximo-accordion">
            <div class="aximo-accordion-item open">
                <div class="aximo-accordion-header">
                    <h3>What services does your design agency offer?</h3>
                </div>
                <div class="aximo-accordion-body">
                    <p>Clients often seek to understand the range of design services an agency provides, such as graphic design, web design, branding, and more. We offer a wide range of design services, including graphic design, web design, branding, UI/UX design, and more.</p>
                </div>
            </div>
            <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                    <h3>What industries or types of clients do you typically work with?</h3>
                </div>
                <div class="aximo-accordion-body">
                    <p>This question helps potential clients determine if the agency has experience in their specific industry or with similar projects. Our agency stands out due to our creative expertise, attention to detail, and commitment to delivering designs that not only look great.</p>
                </div>
            </div>
            <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                    <h3>Can you provide examples of your previous work/portfolio?</h3>
                </div>
                <div class="aximo-accordion-body">
                    <p>Yes, we're proud to showcase a portfolio of our previous projects. You can find examples of our work on our website or request a tailored portfolio relevant to your needs. Clients often want to see examples of the agency's previous projects to assess the quality and style.</p>
                </div>
            </div>
            <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                    <h3>What is your design process like?</h3>
                </div>
                <div class="aximo-accordion-body">
                    <p>Explaining the design agency's process from initial concept to final delivery helps clients understand what to expect.</p>
                </div>
            </div>
            <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                    <h3>How do you handle revisions and feedback during a project?</h3>
                </div>
                <div class="aximo-accordion-body">
                    <p>Clients are interested in knowing how the agency manages feedback and makes revisions to ensure the final design meets their expectations. We value client feedback and work closely with you to make sure you're happy with the final design.</p>
                </div>
            </div>
            <div class="aximo-accordion-item">
                <div class="aximo-accordion-header">
                    <h3>Do you offer ongoing support after project completion?</h3>
                </div>
                <div class="aximo-accordion-body">
                    <p>Yes, we offer ongoing support, maintenance, and updates as needed, ensuring that your design assets and projects remain up to date and functional. Some clients may have urgent projects, so it's important to communicate if the agency can accommodate rush orders.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End section -->

@endsection
