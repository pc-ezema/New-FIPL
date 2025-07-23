@extends('layouts.frontend', ['title' => 'Careers'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/home-page.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/careers.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/home-page.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="we-fipl aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade bannerSection mainSliderElem active" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{url('assets/images/career/banner.png')}}">
                        <source media="(min-width: 767px)" srcset="{{url('assets/images/career/banner.png')}}">
                        <source media="(min-width: 0)" srcset="{{url('assets/images/career/banner.png')}}">

                        <img class="bg img-responsive" src="{{url('assets/images/career/banner.png')}}" alt="FIPL CAREER">
                    </picture>

                    <div class="imageOverlayBnr"></div>

                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">

                                    <span>About Us</span>
                                    <h1 class="heroHeading">
                                        <span>We are fipl</span>
                                        <span></span>
                                        <span></span>
                                    </h1>

                                </div>
                                <div class="bannerPara">
                                    <div class="mainBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">
                                            <span>India's only value based corporation —</span>
                                            <span>a visionary, a pioneer, a leader, since 1868.</span>
                                            <span>Scroll below to learn more about us. </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="container arrowContainerP">
                        <div class="arrowSection">
                            <div class="arrowContainer slideDownDiv">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="sliderElem hidden-xs hidden-sm">
                </section>
            </div>

            <section class="hero-section parallax aem-GridColumn aem-GridColumn--default--12">
                <div class="container">
                    <h1 class="hero-title">
                        At Food Industrial Park, we believe that our greatest asset is our people and we are guided by a strong set of values that reflect our commitment.
                    </h1>
                    <p class="hero-description">
                        As a company committed to revolutionizing Africa's agricultural value chain, we seek passionate, driven, and innovative and talented individuals to join our team and help us build a sustainable and prosperous future for the continent
                    </p>

                    <div class="button-group">
                        <a href="#" class="btn">Job Search</a>
                        <a href="#" class="btn">Talent Community</a>
                    </div>
                </div>
            </section>

            <div class="rd infoFoldSection parallax aem-GridColumn aem-GridColumn--default--12">
                <div class="container" style="display: flex;">
                    <div class="rd-left-card">
                        <h2>Why Work at FIP?</h2>
                        <p>At FIPL, we are not just creating careers; we are building futures. Working with us means becoming part of a forward-thinking organization that is shaping the future of agriculture and food security in Africa. Here’s why you should consider a career with FIP:</p>
                        <ul>
                            <li><b>Impactful Work:</b></li>
                            <li><b>Growth and Development:</b></li>
                            <li><b>Collaborative Environment:</b></li>
                            <li><b>Sustainability Focus:</b></li>
                        </ul>
                    </div>
                    <div class="rd-right-image">
                        <img src="{{url('assets/images/career/why-work-at-fip.png')}}" alt="Why Work at FIP">
                    </div>
                </div>
            </div>

            <div class="sustainability infoFoldSection parallax aem-GridColumn aem-GridColumn--default--12">
                <div class="container" style="display: flex;">
                    <div class="section-image">
                        <img src="{{url('assets/images/career/how-to-apply.png')}}" alt="How to Apply">
                    </div>
                    <div class="text-card">
                        <h2>How to Apply</h2>
                        <p>If you're ready to take on the challenge of transforming Africa’s agricultural and food production sectors, we want to hear from you! To apply for any of our open positions, please visit the FIP careers page on our website or reach out to our recruitment team at recruitment@fipl.ng</p>
                        <p>We welcome applications from all qualified individuals and are excited to help you take the next step in your career.</p>
                    </div>
                </div>
            </div>

            <div class="rd infoFoldSection parallax aem-GridColumn aem-GridColumn--default--12">
                <div class="container" style="display: flex;">
                    <div class="rd-left-card">
                        <h2>Join Us in Building the Future</h2>
                        <p>FIP is more than just a workplace, it's a place where you can make a real impact on the future of agriculture in Africa. Together, we can create solutions that contribute to food security, sustainability, and economic prosperity.</p>
                    </div>
                    <div class="rd-right-image">
                        <img src="{{url('assets/images/career/join-us.png')}}" alt="Join Us">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection