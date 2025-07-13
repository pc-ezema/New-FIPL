@extends('layouts.frontend', ['title' => 'Welcome to FIPL'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/about-us.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/about-us.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="we-tata aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade bannerSection mainSliderElem active" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/about_tata_leadimage_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/Landing-Page-Tab-1.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/Landing-Page-Mobile.jpg">
                        <img class="bg img-responsive" src="/content/dam/tata/images/about-us/Desktop/about_tata_leadimage_desktop_1920x1080.jpg" alt="Jamsetji Tata">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">

                                    <span>About Us</span>
                                    <h1 class="heroHeading">
                                        <span>We are FIP</span>
                                        <span></span>
                                        <span></span>
                                    </h1>

                                </div>
                                <div class="bannerPara">
                                    <div class="mainBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">
                                            <span>Food Industrial Park is redefining Nigeria’s agricultural and industrial landscape.
                                            As a consortium of ten companies, FIP is building a robust agricultural ecosystem that connects farmers, processors, and markets to optimize resources in the agri-value chain.</span>                                            
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
            <div class="about-tata-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="1">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/brands/desktop/brands2021_bgvideo_banner_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/brands/tab/brands2021_bgvideo_banner_tab_786x1024.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/brands/mobile/brands2021_bgvideo_banner_mobile_320x568.jpg"> <img class="bg img-responsive noDisplay" src="/content/dam/tata/images/brands/desktop/brands2021_bgvideo_banner_desktop_1920x1080.jpg" alt="Business at Tata">
                    </picture>
                    <video autoplay="" playsinline="" loop="" muted="" class="AboutUsBannerVideo" desktopvideo="/content/dam/tata/videos/brands/desktop/brands2024_bgvideo_desktop_1920x1080.mp4" tabvideo="/content/dam/tata/videos/brands/tab/brands2024_bgvideo_tab_768x1024.mp4" mobilevideo="/content/dam/tata/videos/brands/mobile/brands2024_bgvideo_mobile_320x568.mp4">
                        <source src="/content/dam/tata/videos/brands/desktop/brands2024_bgvideo_desktop_1920x1080.mp4" type="video/mp4">
                    </video>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container">
                        <div class="heroHeadline">
                            <div class="sectionContent animm">
                                <div class="whiteCapital">WHO WE ARE</div>
                                <div class="aboutUsHeading">
                                    <h2 class="heroHeading">
                                        <span>Who We Are</span>
                                    </h2>
                                </div>
                                <div class="bannerPara">
                                    <div class="aboutUsBorder pull-left"></div>
                                    <div class="paddingLeft2Rem aboutUsReadingTxt">
                                        <p class="aboutUsDiv">
                                            Food Industrial Park is a strategic company with investment interests across various sectors, with a focus on promoting the Agri Value chain model across Africa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-tata-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="2">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/about_ownership_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/Ownership-Tab-1.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/Ownership-Mobile.jpg"> <img class="bg img-responsive" src="/content/dam/tata/images/about-us/Desktop/about_ownership_desktop_1920x1080.jpg" alt="Ownership Fold">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container">
                        <div class="heroHeadline">
                            <div class="sectionContent animm">
                                <div class="whiteCapital">WHAT WE DO</div>
                                <div class="aboutUsHeading">
                                    <h2 class="heroHeading">
                                        <span>What We Do</span>
                                    </h2>
                                </div>
                                <div class="bannerPara">
                                    <div class="aboutUsBorder pull-left"></div>
                                    <div class="paddingLeft2Rem aboutUsReadingTxt">
                                        <p class="aboutUsDiv">
                                            Create food industrial parks within agrarian communities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-tata-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="3">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/jrd_about_banner_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/Values-Tab.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/Values-Mobile.jpg"> <img class="bg img-responsive" src="/content/dam/tata/images/about-us/Desktop/jrd_about_banner_desktop_1920x1080.jpg" alt="Values fold">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container">
                        <div class="heroHeadline">
                            <div class="sectionContent animm">
                                <div class="whiteCapital">OUR VISION STATEMENT</div>
                                <div class="aboutUsHeading">
                                    <h2 class="heroHeading">
                                        <span>Our Vision Statement</span>
                                    </h2>
                                </div>
                                <div class="bannerPara">
                                    <div class="aboutUsBorder pull-left"></div>
                                    <div class="paddingLeft2Rem aboutUsReadingTxt">
                                        <p class="aboutUsDiv">
                                            Build food industrial hubs accross Agrarian communities.
                                        </p>
                                    </div>
                                </div>
                                <div class="downloadContents">
                                    <a class="figures btn btn-sm width10 desktop" href="{{ route('aboutUs.vision') }}" title="Our Vision Statement">
                                        <img src="{{url('assets/images/In-page.svg')}}" alt="Our Vision Statement" class="img-responsive centered"> 
                                        <span>Click on explore</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-tata-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="4">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/about_financials_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/financials-Tab.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/financials-Mobile.jpg"> <img class="bg img-responsive" src="/content/dam/tata/images/about-us/Desktop/about_financials_desktop_1920x1080.jpg" alt="Financials fold">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container">
                        <div class="heroHeadline">
                            <div class="sectionContent animm">
                                <div class="whiteCapital">OUR MISSION STATEMENT</div>
                                <div class="aboutUsHeading">
                                    <h2 class="heroHeading">
                                        <span>Our Mission Statement</span>
                                    </h2>
                                </div>
                                <div class="bannerPara">
                                    <div class="aboutUsBorder pull-left"></div>
                                    <div class="paddingLeft2Rem aboutUsReadingTxt">
                                        <p class="aboutUsDiv">
                                            We create a seamless platform where farmers, processors, and other stakeholders meet to optimize resources in the Agri value chain.
                                        </p>
                                    </div>
                                </div>
                                <div class="downloadContents">
                                    <a class="figures btn btn-sm width10 desktop" href="{{route('aboutUs.mission')}}">
                                        <img src="{{url('assets/images/In-page.svg')}}" alt="Our Vision Statement" class="img-responsive centered"> 
                                        <span>Click on explore</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-tata-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="3">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/jrd_about_banner_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/Values-Tab.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/Values-Mobile.jpg"> <img class="bg img-responsive" src="/content/dam/tata/images/about-us/Desktop/jrd_about_banner_desktop_1920x1080.jpg" alt="Values fold">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container">
                        <div class="heroHeadline">
                            <div class="sectionContent animm">
                                <div class="whiteCapital">CORE VALUES</div>
                                <div class="aboutUsHeading">
                                    <h2 class="heroHeading">
                                        <span>Core Values</span>
                                    </h2>
                                </div>
                                <div class="bannerPara">
                                    <div class="aboutUsBorder pull-left"></div>
                                    <div class="paddingLeft2Rem aboutUsReadingTxt">
                                        <p class="aboutUsDiv">
                                            Discipline, Integrity, Creativity, Excellence, Tenacity, Innovation, and Intelligence
                                        </p>
                                    </div>
                                </div>
                                <div class="downloadContents">
                                    <a class="figures btn btn-sm width10 desktop" href="{{route('aboutUs.coreValues')}}">
                                        <img src="{{url('assets/images/In-page.svg')}}" alt="Our Vision Statement" class="img-responsive centered"> 
                                        <span>Click on explore</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" id="modalD">
                    </div>
                </section>
                <section id="modalOverlay"></section>

            </div>
            <div class="parallax aem-GridColumn aem-GridColumn--default--12">
                <section>
                    <div class="parallaxControls showAll notActive">
                        <div class="pointerDiv active">
                            <span class="point" data-slide="0"></span><span class="linePointer"></span>
                            <div class="pointerText">Who We Are</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="1"></span><span class="linePointer"></span>
                            <div class="pointerText">What We Do</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="2"></span><span class="linePointer"></span>
                            <div class="pointerText">Our Vision</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="3"></span><span class="linePointer"></span>
                            <div class="pointerText">Our Mission</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="4"></span><span class="linePointer"></span>
                            <div class="pointerText">Core Values</div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection