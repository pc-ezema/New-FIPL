@extends('layouts.frontend', ['title' => 'Welcome to FIPL'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/home-page.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/home-page.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="banner aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade heroSection heroBannerSection mainSliderElem parallaxWrapper">
                    <div class="carousel carouselDiv slide heroCarousel" data-interval="3000" data-ride="carousel">
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner innerCarousel">
                            <div class="carItem heroItem active" data-step="1">
                                <picture>
                                    <source media="(min-width: 1200px)"
                                        srcset="{{url('assets/images/home/fipl-home-one.png')}}" />
                                    <source media="(min-width: 601px)"
                                        srcset="{{url('assets/images/home/fipl-home-one.png')}}" />
                                    <source media="(max-width: 600px)"
                                        srcset="{{url('assets/images/home/fipl-home-one.png')}}" />
                                    <img class="Bg img-responsive "
                                        src="{{url('assets/images/home/fipl-home-one.png')}}"
                                        srcset alt="" />
                                </picture>

                                <div class="imageOverlayHp"></div>
                                <div class="heroForegrounds container fxblock">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <h1 class="heroHeading">ONE BRAND CREATING INFLUENCE ACROSS NIGERIA</h1>
                                            </div>
                                            <div class="bannerPara">
                                                <div class="bannerBorder pull-left"></div>
                                                <div class="paddingLeft3Rem bannerReadingTxt">
                                                    <a class="simButton buttonMore dataAnalytics btn buttonMr"
                                                        href="{{ route('aboutUs') }}">
                                                        <span>View More</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow arrowAnimation" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="2">
                                <picture>
                                    <source media="(min-width: 1200px)"
                                        srcset="{{url('assets/images/home/fipl-home-two.png')}}" />
                                    <source media="(min-width: 601px)"
                                        srcset="{{url('assets/images/home/fipl-home-two.png')}}" />
                                    <source media="(max-width: 600px)"
                                        srcset="{{url('assets/images/home/fipl-home-two.png')}}" />
                                    <img class="Bg img-responsive "
                                        src="{{url('assets/images/home/fipl-home-two.png')}}"
                                        srcset alt="" />
                                </picture>

                                <div class="imageOverlayHp"></div>
                                <div class="heroForegrounds container fxblock">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <h1 class="heroHeading">ONE BRAND CREATING INFLUENCE ACROSS NIGERIA</h1>
                                            </div>
                                            <div class="bannerPara">
                                                <div class="bannerBorder pull-left"></div>
                                                <div class="paddingLeft3Rem bannerReadingTxt">
                                                    <a class="simButton buttonMore dataAnalytics btn buttonMr"
                                                        href="{{ route('aboutUs') }}">
                                                        <span>View More</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow arrowAnimation" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="3">
                                <picture>
                                    <source media="(min-width: 1200px)"
                                        srcset="{{url('assets/images/home/fipl-home-three.png')}}" />
                                    <source media="(min-width: 601px)"
                                        srcset="{{url('assets/images/home/fipl-home-three.png')}}" />
                                    <source media="(max-width: 600px)"
                                        srcset="{{url('assets/images/home/fipl-home-three.png')}}" />
                                    <img class="Bg img-responsive "
                                        src="{{url('assets/images/home/fipl-home-three.png')}}"
                                        srcset alt="An image of a solar power plant" />
                                </picture>

                                <div class="imageOverlayHp"></div>
                                <div class="heroForegrounds container fxblock">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <h1 class="heroHeading">ONE BRAND CREATING INFLUENCE ACROSS NIGERIA</h1>
                                            </div>
                                            <div class="bannerPara">
                                                <div class="bannerBorder pull-left"></div>
                                                <div class="paddingLeft3Rem bannerReadingTxt">
                                                    <a class="simButton buttonMore dataAnalytics btn buttonMr"
                                                        href="{{ route('aboutUs') }}">
                                                        <span>View More</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow arrowAnimation" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Indicators container">
                                <div class="numPagination">
                                    <span class="slideNumber"> </span> &nbsp; /&nbsp;
                                    <span class="totalSlide"> </span>
                                </div>
                                <ol
                                    class="carousel-indicators carouselIndicators paddingLeft1p6rem homeBannerSlide">
                                    <li data-slide-to="0" class="active"></li>
                                    <li data-slide-to="1"></li>
                                    <li data-slide-to="2"></li>
                                </ol>
                            </div>
                            <!-- Carousel controls -->
                            <div class="heroControls container">
                                <div class="heroControlsArrow carousel-indicators navDivRedirect paddingLeft1p6rem">
                                    <a class="carousel-control pull-left leftIndicator" href="javascript:void(0)"
                                        data-slide="prev">
                                        <img src="{{url('assets/images/prev_icon_banner.svg')}}"
                                            alt="Previous Arrow" />
                                        <span>Prev</span>
                                    </a>
                                    <a class="carousel-control pull-right rightIndicator" href="javascript:void(0)"
                                        data-slide="next">
                                        <span>Next</span>
                                        <img src="{{url('assets/images/next_icon_banner.svg')}}" alt="Next Arrow" />
                                    </a>
                                    <a class="pull-left centerIndicator" href="javascript:void(0)">
                                    </a>
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
                <section>
                    <div class="modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"
                        id="modalD">
                    </div>
                </section>
                <!--for modal-->
                <section id="modalOverlay"></section>
                <section class="sliderElem hidden-xs hidden-sm">
                </section>
            </div>
            <div class="fipl-this-week aem-GridColumn aem-GridColumn--default--12">
                <section
                    class="headerFade tThisWeek ymlSalt fullscreenN mainSliderElem grayNav noSlider parallaxWrapper">
                    <div class="contntD">
                        <div class="container noPadding fiplWeek">
                            <div class="newsroom  thisweek">
                                <div class="row noMargin headingP">
                                    <h2 class="headingDiv">7 Keys Elements</h2>
                                    <div class="content1">
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 module">
                                            <div id="storyCarousel" class="storyCarousel carouselDiv"
                                                data-ride="carousel">
                                                <div class="innerCarousel sHockey">
                                                    <ol class="carouselIndicators storyIndicators">
                                                        <li data-target="#storyCarousel" data-slide-to="0"
                                                            class="active"></li>
                                                    </ol>

                                                    <div class="carItem active">
                                                        <div class="row nTitle noMargin">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                                <picture>
                                                                    <source media="(min-width: 991px)"
                                                                        srcset="{{url('assets/images/home/food_security.png')}}" />
                                                                    <source media="(min-width: 575px)"
                                                                        srcset="{{url('assets/images/home/food_security.png')}}" />
                                                                    <source media="(min-width: 0)"
                                                                        srcset="{{url('assets/images/home/food_security.png')}}" />
                                                                    <img class="img-responsive bg"
                                                                        src="{{url('assets/images/home/food_security.png')}}"
                                                                        alt="Food Security" title="Food Security" />
                                                                </picture>
                                                            </div>
                                                            <div
                                                                class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding">
                                                                <div class="imageContent">
                                                                    <div class="blueCaption">Food Security</div>
                                                                    <h3 class="nHeading">
                                                                        We ensure a stable and sufficient food supply to meet the nutritional needs of the population.​
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
                                            <div class="titleContent">
                                                <div class="whiteCaption">Export Promotion</div>
                                                <h3 class="nHeadingW">
                                                    <span>Enhancing the competitiveness of agricultural products in international markets.​</span>
                                                </h3>
                                                <div class="storyContent">
                                                    <div class="ymlFeedArticleW"></div>
                                                    <div class="sheetName"></div>
                                                    <div class="excelPath"></div>
                                                    <div class="feedArticleBorder borderAnimCards"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="content2 ">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
                                            <div class="titleContent">
                                                <div class="whiteCaption">Sustainable Agricultural Value Chain Model</div>
                                                <h3 class="nHeadingW">
                                                    <span>We implement environmental friendly practices that maintain the viability of agricultural resources.​​</span>
                                                </h3>
                                                <div class="storyContent">
                                                    <div class="ymlFeedArticleW"></div>
                                                    <div class="sheetName"></div>
                                                    <div class="excelPath"></div>
                                                    <div class="feedArticleBorder borderAnimCards"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
                                            <div class="titleContent">
                                                <div class="whiteCaption">Integration of All Stakeholders</div>
                                                <h3 class="nHeadingW">
                                                    <span>Our platform connects farmers, processors, retailers, and consumers to create value for everyone involved.​</span>
                                                </h3>
                                                <div class="storyContent">
                                                    <div class="ymlFeedArticleW"></div>
                                                    <div class="sheetName"></div>
                                                    <div class="excelPath"></div>
                                                    <div class="feedArticleBorder borderAnimCards"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
                                            <div class="titleContent">
                                                <div class="whiteCaption">Human Capital Development</div>
                                                <h3 class="nHeadingW">
                                                    <span>We invest in training and education to empower individuals involved in agriculture.​​</span>
                                                </h3>
                                                <div class="storyContent">
                                                    <div class="ymlFeedArticleW"></div>
                                                    <div class="sheetName"></div>
                                                    <div class="excelPath"></div>
                                                    <div class="feedArticleBorder borderAnimCards"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="content3 ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
                                            <div class="titleContent">
                                                <div class="whiteCaption">Institutional Investment Inflow</div>
                                                <h3 class="nHeadingW">
                                                    <span>Our structured approach attracts significant funding into agriculture, benefiting both investors and farmers.​</span>
                                                </h3>
                                                <div class="storyContent">
                                                    <div class="ymlFeedArticleW"></div>
                                                    <div class="sheetName"></div>
                                                    <div class="excelPath"></div>
                                                    <div class="feedArticleBorder borderAnimCards"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
                                            <div class="titleContent">
                                                <div class="whiteCaption">Infrastructural Development</div>
                                                <h3 class="nHeadingW">
                                                    <span>We build essential facilities that help farmers store, process, and transport their crops efficiently.​</span>
                                                </h3>
                                                <div class="storyContent">
                                                    <div class="ymlFeedArticleW"></div>
                                                    <div class="sheetName"></div>
                                                    <div class="excelPath"></div>
                                                    <div class="feedArticleBorder borderAnimCards"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--anchor tags removed from Insragram card and Story Card - 4 -->
            </div>
            <div class="never-rest-video-banner parbase aem-GridColumn aem-GridColumn--default--12"><!-- video related to NeverRest -->
                <section class="bannerSection neverRestBannerVideoIcon mainSliderElem clickableDiv parallaxWrapper" anchorval="2">
                    <picture>
                        <source media="(min-width: 991px)" srcset="">
                        <source media="(min-width: 767px)" srcset="">
                        <source media="(min-width: 0)" srcset="">
                        <img class="bg img-responsive" src="" alt="">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="iconOverlay">
                        <div class="map-illustration-wrapper">
                            <div class="marker-2">
                                <a class="saltModal openModel" href="/" data-toggle="modal" data-target=".modal" data-index="1">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="neverRestCaption">
                        <em>Our Timelines</em>
                        <div class="description">
                            Founded over 150 years ago,
                            <a href="#" target="_self">
                                <img src="#" alt="Visit page" class="arrow">
                            </a>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="modal neverRestModal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" id="modalD">
                    </div>
                </section>
                <section id="modalOverlay"></section>
                <section class="sliderElem hidden-xs hidden-sm"></section>
            </div>
            <div class="aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade ymlSalt longerBg mainSliderElem grayNav noSlider parallaxWrapper" anchorval="3" style="min-height: 91rem;">
                    <div class="contntD">
                        <div class="container fiplWeek">
                            <div class="newsroom newsroomN">
                                <div class="row headingP">
                                    <h2 class="headingDiv">Business Area</h2>
                                    <div class="contentBelow">
                                        <div class="col-xs-12">
                                            <div class="row">
                                                <div class="flexx blockFlex">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 topMargin3 topMarginsm topMarginxs module imageCrop come-in">
                                                        <a href="{{route('businessArea.food')}}" rel="noopener">
                                                            <div class="fullCardClick twitterFeed">
                                                                <div class="titleContent" style="padding: 2rem;">
                                                                    <div class="whiteCaption">Food</div>
                                                                    <h3 class="nHeadingW" style="max-width: none;">
                                                                        <span>Food Industrial Park food division is dedicated to revolutionizing the food supply chain through innovative industrial parks that combine modern processing technologies with rigorous quality control.​</span>
                                                                        <img src="{{url('assets/images/arrow_icon.svg')}}" alt="Arrow">
                                                                    </h3>
                                                                </div>   
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 topMargin3 topMarginsm topMarginxs module imageCrop come-in">
                                                        <a href="{{route('businessArea.agriculture')}}" rel="noopener">
                                                            <div class="fullCardClick twitterFeed">
                                                                <div class="titleContent" style="padding: 2rem;">
                                                                    <div class="whiteCaption">Agriculture</div>
                                                                    <h3 class="nHeadingW" style="max-width: none;">
                                                                        <span>At FIP, we are revolutionizing Nigeria's agricultural landscape through innovative technology and sustainable practices. Our integrated approach connects farmers with essential resources, markets, and expertise to maximize productivity and profitability.​</span>
                                                                        <img src="{{url('assets/images/arrow_icon.svg')}}" alt="Arrow">
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="flexx">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 width100 topMarginxs topMargin767 topMargin module come-in">
                                                        <a href="{{route('businessArea.media')}}" rel="noopener">
                                                            <div class="fullCardClick twitterFeed" style="padding: 2rem;">
                                                                <div class="whiteCaption">Media</div>
                                                                <h3 class="nHeadingW" style="max-width: none;">
                                                                    <span>Our Media division serves as the creative heartbeat that amplifies Food Industrial Park transformative initiatives. We leverage an array of digital and traditional media channels to share compelling stories that highlight innovation, sustainability, and community transformation.​</span>
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}" alt="Arrow">
                                                                </h3>
                                                                <div class="carouselDiv jobsCarouselHome" data-ride="carousel">
                                                                    <div class="innerCarousel sTwitter">
                                                                    </div>
                                                                    <ol style="display: none;" class="carouselIndicators nIndicators">
                                                                        <li data-slide-to="0" class="active"></li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 width100 topMarginxs topMargin767 topMargin module come-in">
                                                        <a href="{{route('businessArea.realEstate')}}" rel="noopener">
                                                            <div class="fullCardClick twitterFeed">
                                                                <div class="titleContent" style="padding: 2rem;">
                                                                    <div class="whiteCaption">Real Estate</div>
                                                                    <h3 class="nHeadingW" style="max-width: none;">
                                                                        <span>FIP transforms rural living conditions by creating accessible, sustainable, and practical housing solutions for farming communities. We bridge the rural housing deficit through strategic development projects that blend affordability with quality living environments suitable for agricultural lifestyles.​</span>
                                                                        <img src="{{url('assets/images/arrow_icon.svg')}}" alt="Arrow">
                                                                    </h3>
                                                                </div>
                                                            </div>
                                                        </a>
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
            </div>
            <div class="our-brands aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade brandsSection mainSliderElem parallaxWrapper">
                    <div class="carousel carouselDiv slide brandCarousel" data-interval="3000" data-ride="carousel">
                        <div class="carousel-inner innerCarousel test brandCarouselItems">
                            <div class="carItem heroItem active" data-step="1">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/nardus-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/nardus-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/nardus-large.png')}}"
                                        alt="Nardus" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://nardus.ng"
                                                            target="_blank" rel="noopener">
                                                            Nardus
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://nardus.ng"
                                                                target="_blank" rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'nardus']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="2">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/sano-foods-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/sano-foods-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/sano-foods-large.png')}}"
                                        alt="Sano Foods" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://sanofoods.ng"
                                                            target="_blank" rel="noopener">
                                                            Sano Foods
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://sanofoods.ng"
                                                                target="_blank" rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'sano']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="3">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/agricapital-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/agricapital-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/agricapital-large.png')}}"
                                        alt="Agricapital" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://agricapital.ng" target="_blank"
                                                            rel="noopener">
                                                            Agricapital
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://agricapital.ng" target="_blank"
                                                                rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'agricapital']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="4">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/4green-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/4green-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/4green-large.png')}}"
                                        alt="4 Green Communication" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://4greencomms.com" target="_blank"
                                                            rel="noopener">
                                                            4 Green Communication
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://4greencomms.com" target="_blank"
                                                                rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => '4green']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="5">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/bonum-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/bonum-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/bonum-large.png')}}"
                                        alt="Bonum Consilium Africa Limited" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://bcal.ng" target="_blank"
                                                            rel="noopener">
                                                            Bonum Consilium Africa Limited
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://bcal.ng" target="_blank"
                                                                rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'bcal']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="6">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/rufec-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/rufec-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/rufec-large.png')}}g"
                                        alt="Rufec" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://rufec.ng"
                                                            target="_blank" rel="noopener">
                                                            Rufec
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://rufec.ng"
                                                                target="_blank" rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'rufec']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="7">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/agropark-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/agropark-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/agropark-large.png')}}"
                                        alt="Agropark" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://agropark.ng"
                                                            target="_blank" rel="noopener">
                                                            Agropark
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://agropark.ng"
                                                                target="_blank" rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'agropark']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="8">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/agri-tech-hub-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/agri-tech-hub-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/agri-tech-hub-large.png')}}"
                                        alt="Agri-tech Hub" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="https://agrihubtech.ng" target="_blank"
                                                            rel="noopener">
                                                            Agri-tech Hub
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="https://agrihubtech.ng" target="_blank"
                                                                rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'agrihubtech']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carItem heroItem" data-step="9">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/fagh-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/fagh-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/fagh-large.png')}}"
                                        alt="FAGH Herbal Remedies" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="#"
                                                            target="_blank" rel="noopener">
                                                            FAGH Herbal Remedies
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="#"
                                                                target="_blank" rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'fagh']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="carItem heroItem" data-step="10">
                                <picture>
                                    <img class="bg img-responsive"
                                        data-srcdesktop="{{url('assets/images/home/afbs-large.png')}}"
                                        data-srctablet="{{url('assets/images/home/afbs-large.png')}}"
                                        data-srcmobile="{{url('assets/images/home/afbs-large.png')}}"
                                        alt="Agriculture and Food Business School" />
                                </picture>
                                <div class="heroForegrounds container fadeInBanner">
                                    <div class="heroHeadline">
                                        <div class="sectionContent">
                                            <div class="bannerHeading">
                                                <span>Strategic Alliance</span>
                                                <div class="brandInfo">
                                                    <h1 class="heroHeading">
                                                        <a href="#"
                                                            target="_blank" rel="noopener">
                                                            Agriculture and Food Business School
                                                        </a>
                                                        <span class="extrnLink">
                                                            <a href="#"
                                                                target="_blank" rel="noopener">
                                                                <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                    alt="Arrow" />
                                                            </a>
                                                        </span>
                                                    </h1>
                                                    <a class="simButton buttonMore btn buttonMr"
                                                        href="{{ route('strategicAlliance', ['companyName' => 'afbs']) }}">
                                                        <span>View All</span>
                                                        <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                            alt="Arrow" class="readMArrow" />
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->

                            <div class="Indicators brandsThumbnail active">
                                <div class="container">
                                    <ol class="carouselIndicators BrandSectionIndicator squares">

                                        <li data-slide-to="0" class="active forBrands hide">
                                            <span class="hoverBrandTxt">Nardus</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/nardus.png')}}"
                                                alt="Nardus" />
                                        </li>

                                        <li data-slide-to="1" class="forBrands hide">
                                            <span class="hoverBrandTxt">Sano</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/sano-foods.png')}}"
                                                alt="Sano" />
                                        </li>

                                        <li data-slide-to="2" class="forBrands hide">
                                            <span class="hoverBrandTxt">Agricapital</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/agricapital.png')}}"
                                                alt="Agricapital" />
                                        </li>

                                        <li data-slide-to="3" class="forBrands hide">
                                            <span class="hoverBrandTxt">4 Green</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/4green.png')}}"
                                                alt="4 Green Communication" />
                                        </li>

                                        <li data-slide-to="4" class="forBrands hide">
                                            <span class="hoverBrandTxt">BCAL</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/bonum.png')}}"
                                                alt="Bonum Consilium Africa Limited" />
                                        </li>

                                        <li data-slide-to="5" class="forBrands hide">
                                            <span class="hoverBrandTxt">Rufec</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/rufec.png')}}"
                                                alt="Rufec" />
                                        </li>

                                        <li data-slide-to="6" class="forBrands hide">
                                            <span class="hoverBrandTxt">Agropark</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/agropark.png')}}"
                                                alt="Agropark" />
                                        </li>

                                        <li data-slide-to="7" class="forBrands hide">
                                            <span class="hoverBrandTxt">Agri-tech Hub</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/agri-tech-hub.png')}}"
                                                alt="Agri-tech Hub" />
                                        </li>

                                        <li data-slide-to="8" class="forBrands hide">
                                            <span class="hoverBrandTxt">FAGH</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/fagh.png')}}"
                                                alt="FAGH Herbal Remedies" />
                                        </li>

                                        <!-- <li data-slide-to="9" class="forBrands hide">
                                            <span class="hoverBrandTxt">AFBS</span>
                                            <div class="overlayBrandNav"></div>
                                            <img class=" img-responsive upMark"
                                                src="{{url('assets/images/hover%20arrow.svg')}}"
                                                alt="Arrow" />
                                            <img class=" img-responsive "
                                                src="{{url('assets/images/home/afbs.png')}}"
                                                alt="Agriculture and Food Business School" />
                                        </li> -->
                                    </ol>
                                </div>
                            </div>

                            <div class="caroButtons hidden-xs hidden-sm ourBrandIndicators">
                                <!-- <input type="button" id="first" onclick="firstPage()" value="first" /> -->
                                <div class="left pull-left thumbnailControls">
                                    <div id="next" onclick="previousPage()">
                                        <img class="hoverImg" src="{{url('assets/images/prev.svg')}}" alt="Arrow" />
                                        <img class="normalImg" src="{{url('assets/images/prevHover.svg')}}"
                                            alt="Arrow" />
                                    </div>
                                    <!--<input type="button" id="next" onclick="nextPage()" value="next" />-->
                                </div>
                                <div class="right pull-right thumbnailControls">
                                    <div id="previous" onclick="nextPage()">
                                        <img class="hoverImg" src="{{url('assets/images/next.svg')}}" alt="Arrow" />
                                        <img class="normalImg" src="{{url('assets/images/nextHover.svg')}}"
                                            alt="Arrow" />
                                    </div>
                                    <!--<input type="button" id="previous" onclick="previousPage()" value="previous" />-->
                                </div>
                                <!-- <input type="button" id="last" onclick="lastPage()" value="last" /> -->
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </section>
                <!--for modal-->
                <section>
                    <div class="modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"
                        id="modalD">
                    </div>
                </section>
                <!--for modal-->
                <section id="modalOverlay"></section>
            </div>
            <div class="parallax aem-GridColumn aem-GridColumn--default--12">
                <section class="hidden-xs hidden-sm">
                    <div class="parallaxControls">
                        <div class="pointerDiv active">
                            <span class="point" data-slide="0"></span><span
                                class="linePointer artificialHover"></span>
                            <div class="pointerText artificialHover">Home</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="1"></span><span
                                class="linePointer artificialHover"></span>
                            <div class="pointerText artificialHover">Key Elements</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="2"></span><span
                                class="linePointer artificialHover"></span>
                            <div class="pointerText artificialHover">Timelines</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="3"></span><span
                                class="linePointer artificialHover"></span>
                            <div class="pointerText artificialHover">Business Area</div>
                        </div>
                        <div class="pointerDiv">
                            <span class="point" data-slide="4"></span><span
                                class="linePointer artificialHover"></span>
                            <div class="pointerText artificialHover">Strategic Alliance</div>
                        </div>
                    </div>
                </section>

                <section class="sliderElem">
                </section>
            </div>
        </div>
    </div>
</main>
@endsection