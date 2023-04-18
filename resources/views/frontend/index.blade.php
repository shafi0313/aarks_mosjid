@extends('frontend.layouts.app')
@section('content')
{{-- <!-- Banner Section start here --> --}}
<section class="banner-section">
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-thumb">
                            <img src="{{ imagePath('banner', setting('banner_image')) }}" alt="Banner-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="banner-item">
                    <div class="banner-inner">
                        <div class="banner-content align-middle">
                            @setting('banner_text')
                            <a href="#" class="lab-btn mt-3">Donate Now <i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <!-- Banner Section end here --> --}}

{{-- <!-- About section start here --> --}}
<section class="about-section padding-tb shape-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-content">
                            <div class="header-title text-start m-0">
                                <h5>About Our History</h5>
                            </div>
                            @setting('about_text')
                            <a href="#" class="lab-btn mt-4">Ask About Islam <i class="icofont-heart-alt"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="lab-item">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <div class="img-grp">
                                <div class="about-circle-wrapper">
                                    <div class="about-circle-2"></div>
                                    <div class="about-circle"></div>
                                </div>
                                <div class="about-fg-img">
                                    <img src="{{ imagePath('about', setting('about_image')) }}" alt="about-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <!-- About section end here --> --}}

{{-- <!-- Feature Section Start Here --> --}}
<section class="feature-section bg-ash padding-tb">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($features as $feature)
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="lab-item feature-item text-xs-center">
                    <div class="lab-inner">
                        <div class="lab-thumb">
                            <img src="{{ imagePath('feature', $feature->icon) }}" alt="feature-image">
                        </div>
                        <div class="lab-content">
                            <h5>{{ $feature->title }}</h5>
                            {!! Str::limit($feature->description, 95, $end='...')  !!}
                            <a href="{{ $feature->link }}" class="text-btn">{{ $feature->link_title }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>
{{-- <!-- Feature Section End Here --> --}}

{{-- <!-- Service section start here --> --}}
<section class="service-section padding-tb padding-b shape-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-title">
                    <h5>Islamic Center Services</h5>
                    <h2>Ethical And Moral Beliefs That Guides
                        To The Straight Path!</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="row g-0 justify-content-center service-wrapper">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="lab-item service-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{ asset('frontend/images/service/01.jpg') }}" alt="Service-image">
                                </div>
                                <div class="lab-content pattern-2">
                                    <div class="lab-content-wrapper">
                                        <div class="content-top">
                                            <div class="service-top-thumb"><img src="{{ asset('frontend/images/service/01.png') }}"
                                                    alt="service-icon"></div>
                                            <div class="service-top-content">
                                                <span>Building Upgrades</span>
                                                <h5><a href="#"> Mosque Development</a></h5>
                                            </div>
                                        </div>
                                        <div class="content-bottom">
                                            <p>Lorem ipsum, dolor sit amet sectetur adipisicing elit. Vel dicta
                                                beatae del voluptas apelas de.</p>
                                            <a href="#" class="text-btn">Read More +</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="lab-item service-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{ asset('frontend/images/service/02.jpg') }}" alt="Service-image">
                                </div>
                                <div class="lab-content pattern-2">
                                    <div class="lab-content-wrapper">
                                        <div class="content-top">
                                            <div class="service-top-thumb"><img src="{{ asset('frontend/images/service/02.png') }}"
                                                    alt="service-icon"></div>
                                            <div class="service-top-content">
                                                <span>Help Poor</span>
                                                <h5><a href="#">Charity And Donation</a> </h5>
                                            </div>
                                        </div>
                                        <div class="content-bottom">
                                            <p>Lorem ipsum, dolor sit amet sectetur adipisicing elit. Vel dicta
                                                beatae del voluptas apelas de.</p>
                                            <a href="#" class="text-btn">Read More +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="lab-item service-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="{{ asset('frontend/images/service/03.jpg') }}" alt="Service-image">
                                </div>
                                <div class="lab-content pattern-2">
                                    <div class="lab-content-wrapper">
                                        <div class="content-top">
                                            <div class="service-top-thumb"><img src="{{ asset('frontend/images/service/03.png') }}"
                                                    alt="service-icon"></div>
                                            <div class="service-top-content">
                                                <span>Donate & Help</span>
                                                <h5><a href="#">Poor Woman Marriage</a> </h5>
                                            </div>
                                        </div>
                                        <div class="content-bottom">
                                            <p>Lorem ipsum, dolor sit amet sectetur adipisicing elit. Vel dicta
                                                beatae del voluptas apelas de.</p>
                                            <a href="#" class="text-btn">Read More +</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <!-- Service section end here --> --}}

{{-- <!-- Program section start Here --> --}}
{{-- <section class="program-section padding-tb bg-img"
    style="background: url({{ asset('frontend/images/program/bg.jpg') }}) rgba(5, 21, 57, 0.7); background-blend-mode: overlay;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-title">
                    <h5>Urgent Campaign</h5>
                    <h2 class="mb-4">Free And Complete Guide To All Muslims</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="progress-item-wrapper text-center">
                    <div class="progress-item mb-4">
                        <div class="progress-bar-wrapper progress" data-percent="50%">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"></div>
                        </div>
                        <div class="progress-bar-percent d-flex align-items-center justify-content-center">50
                            <sup>%</sup> </div>

                        <ul class="progress-item-status lab-ul d-flex justify-content-between">
                            <li>Raised<span> $24,000</span></li>
                            <li>Gold<span> $34,900</span></li>
                        </ul>
                    </div>
                    <a href="#" class="lab-btn">Donate Now <i class="icofont-heart-alt"></i></a>
                </div>

            </div>
        </div>
    </div>
</section> --}}
{{-- <!-- upcoming program --> --}}
{{-- <div class="upcoming-programs">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="donation-part bg-img">
                    <div class="donation-content">
                        <h5>Help The Poor</h5>
                        <h2>Donations For The
                            Nobel Causes</h2>
                        <p>Give the best quality of security systems and
                            facility of latest technlogy for the people get
                            awesome.</p>
                        <a href="#" class="lab-btn">See All Causes <i class="icofont-heart-alt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="programs-item-part">
                    <div class="program-desc d-flex justify-content-between">
                        <p>We offer security solutions and cost effective service for our client
                            are safe and secure in any situation.</p>
                        <ul class="lab-ul">
                            <li><a href="#" class="program-next"><i class="icofont-arrow-left"></i></a></li>
                            <li><a href="#" class="program-prev"><i class="icofont-arrow-right"></i></a></li>
                        </ul>
                    </div>
                    <div class="program-item-container">
                        <div class="program-item-wrapper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="program-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#">
                                                    <img src="{{ asset('frontend/images/program/02.jpg') }}" alt="program-image">
                                                </a>
                                                <div class="lab-thumb-content">
                                                    <div class="progress-item">
                                                        <ul
                                                            class="progress-item-status lab-ul d-flex justify-content-between mb-2">
                                                            <li>Raised<span> $24,000</span></li>
                                                            <li>Gold<span> $34,900</span></li>
                                                        </ul>
                                                        <div class="progress-bar-wrapper progress"
                                                            data-percent="50%">
                                                            <div
                                                                class="progress-bar progress-bar-striped progress-bar-animated">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="progress-bar-percent d-flex align-items-center justify-content-center">
                                                            50 <sup>%</sup> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lab-content">
                                                <span>food distribution</span>
                                                <h5><a href="#">American Muslim: Choosing Remain
                                                        Still This Ramadan</a> </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="program-item">
                                        <div class="lab-inner">
                                            <div class="lab-thumb">
                                                <a href="#">
                                                    <img src="{{ asset('frontend/images/program/03.jpg') }}" alt="program-image">
                                                </a>
                                                <div class="lab-thumb-content">
                                                    <div class="progress-item">
                                                        <ul
                                                            class="progress-item-status lab-ul d-flex justify-content-between mb-2">
                                                            <li>Raised<span> $24,000</span></li>
                                                            <li>Gold<span> $34,900</span></li>
                                                        </ul>
                                                        <div class="progress-bar-wrapper progress"
                                                            data-percent="70%">
                                                            <div
                                                                class="progress-bar progress-bar-striped progress-bar-animated">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="progress-bar-percent d-flex align-items-center justify-content-center">
                                                            70 <sup>%</sup> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="lab-content">
                                                <span>food distribution</span>
                                                <h5><a href="#">How to Teach The Kids Ramadan
                                                        Isn’t About Food</a> </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
{{-- <!-- Program section end Here --> --}}

{{-- <!-- Faith section start here --> --}}
<section class="faith-section padding-tb shape-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-title">
                    <h5>The Pillars of Islam</h5>
                    <h2>Ethical And Moral Beliefs That Guides
                        To The Straight Path!</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="faith-content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="shahadah" role="tabpanel"
                            aria-labelledby="sahadah-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend/images/faith/01.png') }}" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Shahadah <span>(Faith)</span> </h4>
                                        <p>The Shahadah, is an Islamic creed, one of the Five Pillars of Islam and
                                            part of the Adhan. It reads: "I bear witness that there is no deity but
                                            God, and I bear witness that Muhammad is the messenger of God."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="prayer" role="tabpanel" aria-labelledby="salah-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend/images/faith/02.png') }}" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Salaah <span>(Prayer)</span> </h4>
                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                            the afternoon, after sunset, and early at night. These prayers can be
                                            said anywhere, prayers that are said in company of others are better
                                            than those said alone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ramadan" role="tabpanel" aria-labelledby="sawm-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend/images/faith/03.png') }}" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Sawm <span>(Fasting)</span> </h4>
                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                            the afternoon, after sunset, and early at night. These prayers can be
                                            said anywhere, prayers that are said in company of others are better
                                            than those said alone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="jakat" role="tabpanel" aria-labelledby="zakat-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend/images/faith/04.png') }}" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Zakat <span>(Almsgiving)</span> </h4>
                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                            the afternoon, after sunset, and early at night. These prayers can be
                                            said anywhere, prayers that are said in company of others are better
                                            than those said alone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hajj" role="tabpanel" aria-labelledby="hajj-tab">
                            <div class="lab-item faith-item tri-shape-1 pattern-2">
                                <div class="lab-inner d-flex align-items-center">
                                    <div class="lab-thumb">
                                        <img src="{{ asset('frontend/images/faith/05.png') }}" alt="faith-image">
                                    </div>
                                    <div class="lab-content">
                                        <h4>Hajj <span>(Pilgrimage)</span> </h4>
                                        <p>Each Muslim should pray five times a day: in the morning, at noon, in
                                            the afternoon, after sunset, and early at night. These prayers can be
                                            said anywhere, prayers that are said in company of others are better
                                            than those said alone.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills mb-3 align-items-center justify-content-center" id="pills-tab"
                        role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="sahadah-tab" data-bs-toggle="pill" href="#shahadah"
                                role="tab" aria-controls="sahadah-tab" aria-selected="true">
                                <img src="{{ asset('frontend/images/faith/faith-icons/01.png') }}" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="salah-tab" data-bs-toggle="pill" href="#prayer" role="tab"
                                aria-controls="salah-tab" aria-selected="false">
                                <img src="{{ asset('frontend/images/faith/faith-icons/02.png') }}" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="sawm-tab" data-bs-toggle="pill" href="#ramadan" role="tab"
                                aria-controls="sawm-tab" aria-selected="false">
                                <img src="{{ asset('frontend/images/faith/faith-icons/03.png') }}" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="zakat-tab" data-bs-toggle="pill" href="#jakat" role="tab"
                                aria-controls="zakat-tab" aria-selected="false">
                                <img src="{{ asset('frontend/images/faith/faith-icons/04.png') }}" alt="faith-icon">
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="hajj-tab" data-bs-toggle="pill" href="#hajj" role="tab"
                                aria-controls="hajj-tab" aria-selected="false">
                                <img src="{{ asset('frontend/images/faith/faith-icons/05.png') }}" alt="faith-icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <!-- Faith section end here --> --}}

{{-- <!-- Qoute Section start Here --> --}}
<div class="qoute-section padding-tb">
    <div class="qoute-section-wrapper">
        <div class="qoute-overlay"></div>
        <div class="container">
            <div class="qoute-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="lab-item qoute-item">
                            <div class="lab-inner d-flex align-items-center">
                                <div class="lab-thumb">
                                    <span>Quote From
                                        Prophat</span>
                                    <i class="icofont-quote-left"></i>
                                </div>
                                <div class="lab-content">
                                    <blockquote class="blockquote">
                                        <p>Hazrat Mohammod (s) Said <span>"It is Better For Any Of You
                                                To Carry A Load Of Firewood On His Own Back Than To
                                                Beg From Someone Else"</span> </p>
                                        <footer class="blockquote-footer bg-transparent">Riyadh-Us-Saleheen, Chapter
                                            59, hadith 540
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <!-- Qoute Section end Here --> --}}

{{-- <!-- Events Section start here --> --}}
{{-- <section class="event-section padding-tb padding-b shape-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-title">
                    <h5>Upcoming Events</h5>
                    <h2>Ethical And Moral Beliefs That Guides
                        To The Straight Path!</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="event-content">
                    <div class="event-top tri-shape-2 pattern-2">
                        <div class="event-top-thumb">
                            <img src="{{ asset('frontend/images/event/01.jpg') }}" alt="Upcoming-event">
                        </div>
                        <div class="event-top-content">
                            <div class="event-top-content-wrapper">
                                <h3><a href="#">Helping Hands For Poor People
                                        Marriage Event</a> </h3>
                                <div class="date-count-wrapper">
                                    <ul class="lab-ul event-date">
                                        <li><i class="icofont-calendar"></i> <span>December 24,2021</span></li>
                                        <li><i class="icofont-location-pin"></i> <span>New York AK United
                                                States</span></li>
                                    </ul>
                                    <ul class="lab-ul event-count" data-date="July 05, 2021 21:14:01">
                                        <li>
                                            <span class="days">34</span>
                                            <div class="count-text">Days</div>
                                        </li>
                                        <li>
                                            <span class="hours">09</span>
                                            <div class="count-text">Hours</div>
                                        </li>
                                        <li>
                                            <span class="minutes">32</span>
                                            <div class="count-text">Muni</div>
                                        </li>
                                        <li>
                                            <span class="seconds">32</span>
                                            <div class="count-text">Seco</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-bottom">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="event-item lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ asset('frontend/images/event/02.jpg') }} alt="event-image">
                                        </div>
                                        <div class="lab-content">
                                            <h5><a href="#">If Islam Teaches Peace, Why Are
                                                    there Radical Muslims?</a> </h5>
                                            <ul class="lab-ul event-date">
                                                <li><i class="icofont-calendar"></i> <span>December 24,2021</span>
                                                </li>
                                                <li><i class="icofont-location-pin"></i> <span>New York AK United
                                                        States</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md col-12">
                                <div class="event-item lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ asset('frontend/images/event/03.jpg') }}" alt="event-image">
                                        </div>
                                        <div class="lab-content">
                                            <h5><a href="#">American Muslim: Choosing Remain
                                                    Still This Ramadan</a> </h5>
                                            <ul class="lab-ul event-date">
                                                <li><i class="icofont-calendar"></i> <span>December 24,2021</span>
                                                </li>
                                                <li><i class="icofont-location-pin"></i> <span>New York AK United
                                                        States</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="event-item lab-item">
                                    <div class="lab-inner">
                                        <div class="lab-thumb">
                                            <img src="{{ asset('frontend/images/event/04.jpg') }}" alt="event-image">
                                        </div>
                                        <div class="lab-content">
                                            <h5><a href="#"> How To Teach Kids Ramadan
                                                    Isn’t About Food</a></h5>
                                            <ul class="lab-ul event-date">
                                                <li><i class="icofont-calendar"></i> <span>December 24,2021</span>
                                                </li>
                                                <li><i class="icofont-location-pin"></i> <span>New York AK United
                                                        States</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
{{-- <!-- Events Section end here --> --}}
@endsection