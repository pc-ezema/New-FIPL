@extends('layouts.frontend', ['title' => 'About Us'])

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
            <div class="about-fipl-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="1">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{ url('assets/images/about/who-we-are.png') }}">
                        <source media="(min-width: 767px)" srcset="{{ url('assets/images/about/who-we-are.png') }}">
                        <source media="(min-width: 0)" srcset="{{url('assets/images/about/who-we-are.png')}}"> 
                        <img class="bg img-responsive" src="{{url('assets/images/about/who-we-are.png')}}" alt="Who we are">
                    </picture>
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
            <div class="about-fipl-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="2">
                    <picture>
                        <picture>
                            <source media="(min-width: 991px)" srcset="{{url('assets/images/about/what-we-do.png')}}">
                            <source media="(min-width: 767px)" srcset="{{url('assets/images/about/what-we-do.png')}}">
                            <source media="(min-width: 0)" srcset="{{url('assets/images/about/what-we-do.png')}}">
                        </picture>
                        <img class="bg img-responsive" src="{{url('assets/images/about/what-we-do.png')}}" alt="What we do">
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
            <div class="about-fipl-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="3">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{ url('assets/images/about/vision.png') }}">
                        <source media="(min-width: 767px)" srcset="{{ url('assets/images/about/vision.png') }}">
                        <source media="(min-width: 0)" srcset="{{ url('assets/images/about/vision.png') }}"> 
                        <img class="bg img-responsive" src="{{ url('assets/images/about/vision.png') }}" alt="FIPL Vision">
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
                                        <span>Click to explore</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-fipl-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="4">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{ url('assets/images/about/mission.png') }}">
                        <source media="(min-width: 767px)" srcset="{{ url('assets/images/about/mission.png') }}">
                        <source media="(min-width: 0)" srcset="{{ url('assets/images/about/mission.png') }}"> 
                        <img class="bg img-responsive" src="{{ url('assets/images/about/mission.png') }}" alt="FIPL Mission">
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
                                        <span>Click to explore</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="about-fipl-carousel aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade aboutUsSection mainSliderElem parallaxWrapper clickableDiv" anchorval="3">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{ url('assets/images/about/core-value.png') }}">
                        <source media="(min-width: 767px)" srcset="{{ url('assets/images/about/core-value.png') }}">
                        <source media="(min-width: 0)" srcset="{{ url('assets/images/about/core-value.png') }}"> 
                        <img class="bg img-responsive" src="{{ url('assets/images/about/core-value.png') }}" alt="FIPL Core Values">
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
                                        <span>Click to explore</span>
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