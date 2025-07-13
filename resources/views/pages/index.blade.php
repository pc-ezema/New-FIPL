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
                                            srcset="{{url('assets/images/home_page_one.png')}}" />
                                        <source media="(min-width: 601px)"
                                            srcset="{{url('assets/images/home_page_one.png')}}" />
                                        <source media="(max-width: 600px)"
                                            srcset="{{url('assets/images/home_page_one.png')}}" />
                                        <img class="Bg img-responsive "
                                            src="{{url('assets/images/home_page_one.png')}}"
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
                                            srcset="{{url('assets/images/home_page_two.png')}}" />
                                        <source media="(min-width: 601px)"
                                            srcset="{{url('assets/images/home_page_two.png')}}" />
                                        <source media="(max-width: 600px)"
                                            srcset="{{url('assets/images/home_page_two.png')}}" />
                                        <img class="Bg img-responsive "
                                            src="{{url('assets/images/home_page_two.png')}}"
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
                                                            href="newsroom/business/tata-advanced-systems-serve-defend.html">
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
                                            srcset="{{url('assets/images/home_page_three.png')}}" />
                                        <source media="(min-width: 601px)"
                                            srcset="{{url('assets/images/home_page_three.png')}}" />
                                        <source media="(max-width: 600px)"
                                            srcset="{{url('assets/images/home_page_three.png')}}" />
                                        <img class="Bg img-responsive "
                                            src="{{url('assets/images/home_page_three.png')}}"
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
                                                            href="newsroom/business/tata-power-transformation.html">
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
                                            <img src="{{url('assets/images/pause_icon2.svg')}}" alt="Pause" />
                                            <img src="content/dam/tata/images/home-page/play-outline.svg" alt="Play" />
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
                <div class="tata-this-week aem-GridColumn aem-GridColumn--default--12">
                    <section
                        class="headerFade tThisWeek ymlSalt fullscreenN mainSliderElem grayNav noSlider parallaxWrapper">
                        <div class="contntD">
                            <div class="container noPadding tataWeek">
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
                                                                <div
                                                                    class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                                    <picture>
                                                                        <source media="(min-width: 991px)"
                                                                            srcset="{{url('assets/images/food_security.png')}}" />
                                                                        <source media="(min-width: 575px)"
                                                                            srcset="{{url('assets/images/food_security.png')}}" />
                                                                        <source media="(min-width: 0)"
                                                                            srcset="{{url('assets/images/food_security.png')}}" />
                                                                        <img class="img-responsive bg"
                                                                            src="{{url('assets/images/food_security.png')}}"
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
                                            <div
                                                class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 widthlands module facts changeBG topMargin767 topMarginxs topMarginsm ">
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
                                            <div
                                                class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 topMarginsm topMarginxs topMargin3 fB module">
                                                <picture>
                                                    <source media="(min-width:992px)" srcset="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}" />
                                                    <source media="(min-width:768px)" srcset="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}" />
                                                    <source media="(min-width:0px)" srcset="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}" />
                                                    <img class="img-responsive backgImg dynaImg" src="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}"
                                                        alt="Sustainable Agricultural Value Chain Model" />
                                                </picture>
                                                <div class="imageOverlayFb"></div>
                                                <div class="whiteContent">
                                                    <h3 class="nHeadingW">
                                                        <span>Sustainable Agricultural Value Chain Model</span>
                                                    </h3>
                                                    <div class="storyContent">
                                                        <div class="newsFeedA">
                                                            <span class="feeds">
                                                            </span>
                                                            <p class="tweet-date">We implement environmental friendly practices that maintain the viability of agricultural resources.​</p>
                                                        </div>
                                                        <div class="newsBorder borderAnimCards"></div>
                                                    </div>
                                                    <img src="{{url('assets/images/arrow_icon.svg')}}" alt="Arrow"
                                                        class="arrow" />
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin3 topMarginsm topMarginxs module">
                                                <div class="row nTitle noMargin instagramDiv">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 noPadding" style="background-color: #2baa65;"></div>
                                                    <div
                                                        class="col-lg-7 col-md-7 col-sm-7 col-xs-12 noPadding instaGram">
                                                        <picture>
                                                            <source media="(min-width:992px)" srcset="{{url('assets/images/human_capital_development.png')}}" />
                                                            <source media="(min-width:768px)" srcset="{{url('assets/images/human_capital_development.png')}}" />
                                                            <source media="(min-width:0px)" srcset="{{url('assets/images/human_capital_development.png')}}" />
                                                            <img src="{{url('assets/images/human_capital_development.png')}}" alt=""
                                                                class="img-responsive backgImg hide" />
                                                        </picture>
                                                        <img class="img-responsive backgImg dynaImg" src="{{url('assets/images/human_capital_development.png')}}"
                                                            alt="Human Capital Development" />
                                                    </div>
                                                    <div class="imageOverlayInsta"></div>
                                                </div>
                                                <div class="container instagram">
                                                    <div class="row">
                                                        <div class="whiteContent">
                                                            <div class="storyContent" style="margin: 0 10px !important;">
                                                                <h3 class="nHeadingW">
                                                                    <span>Human Capital Development</span>
                                                                </h3>
                                                                <div class="newsFeedA">
                                                                    <span class="feeds">
                                                                    </span>
                                                                    <p class="tweet-date">We invest in training and education to empower individuals involved in agriculture.</p>
                                                                </div>
                                                            </div>
                                                            <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                alt="Arrow" class="arrow" />
                                                        </div>
                                                        <a href="https://www.instagram.com/tatacompanies/"
                                                            class="hoverCard" target="_blank" rel="noopener"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="content3 ">
                                            <div
                                                class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin3 topMarginsm topMarginxs module">
                                                <div class="row nTitle noMargin instagramDiv">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 noPadding" style="background-color: #2baa65;"></div>
                                                    <div
                                                        class="col-lg-7 col-md-7 col-sm-7 col-xs-12 noPadding instaGram">
                                                        <picture>
                                                            <source media="(min-width:992px)" srcset="{{url('assets/images/human_capital_development.png')}}" />
                                                            <source media="(min-width:768px)" srcset="{{url('assets/images/human_capital_development.png')}}" />
                                                            <source media="(min-width:0px)" srcset="{{url('assets/images/human_capital_development.png')}}" />
                                                            <img src="{{url('assets/images/human_capital_development.png')}}" alt=""
                                                                class="img-responsive backgImg hide" />
                                                        </picture>
                                                        <img class="img-responsive backgImg dynaImg" src="{{url('assets/images/human_capital_development.png')}}"
                                                            alt="Human Capital Development" />
                                                    </div>
                                                    <div class="imageOverlayInsta"></div>
                                                </div>
                                                <div class="container instagram">
                                                    <div class="row">
                                                        <div class="whiteContent">
                                                            <div class="storyContent" style="margin: 0 10px !important;">
                                                                <h3 class="nHeadingW">
                                                                    <span>Human Capital Development</span>
                                                                </h3>
                                                                <div class="newsFeedA">
                                                                    <span class="feeds">
                                                                    </span>
                                                                    <p class="tweet-date">We invest in training and education to empower individuals involved in agriculture.</p>
                                                                </div>
                                                            </div>
                                                            <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                alt="Arrow" class="arrow" />
                                                        </div>
                                                        <a href="https://www.instagram.com/tatacompanies/"
                                                            class="hoverCard" target="_blank" rel="noopener"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 topMarginsm topMarginxs topMargin3 fB module">
                                                <picture>
                                                    <source media="(min-width:992px)" srcset="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}" />
                                                    <source media="(min-width:768px)" srcset="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}" />
                                                    <source media="(min-width:0px)" srcset="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}" />
                                                    <img class="img-responsive backgImg dynaImg" src="{{url('assets/images/sustainable_agricultural_value_chain_model.png')}}"
                                                        alt="Sustainable Agricultural Value Chain Model" />
                                                </picture>
                                                <div class="imageOverlayFb"></div>
                                                <div class="whiteContent">
                                                    <h3 class="nHeadingW">
                                                        <span>Sustainable Agricultural Value Chain Model</span>
                                                    </h3>
                                                    <div class="storyContent">
                                                        <div class="newsFeedA">
                                                            <span class="feeds">
                                                            </span>
                                                            <p class="tweet-date">We implement environmental friendly practices that maintain the viability of agricultural resources.​</p>
                                                        </div>
                                                        <div class="newsBorder borderAnimCards"></div>
                                                    </div>
                                                    <img src="{{url('assets/images/arrow_icon.svg')}}" alt="Arrow"
                                                        class="arrow" />
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
                <div class="never-rest-video-banner parbase aem-GridColumn aem-GridColumn--default--12">
                    <!-- video related to NeverRest -->

                    <section class="bannerSection neverRestBannerVideoIcon mainSliderElem clickableDiv parallaxWrapper">
                        <picture>
                            <source media="(min-width: 991px)"
                                srcset="content/dam/tata/images/heritage/desktop/heritage_timeline2025_banner_desktop_1920x1080.jpg" />


                            <source media="(min-width: 767px)"
                                srcset="content/dam/tata/images/heritage/tab/heritage_timeline2025_banner_tab_768x1024.jpg" />


                            <source media="(min-width: 0)"
                                srcset="content/dam/tata/images/heritage/mobile/heritage_timeline2025_banner_mobile_320x568.jpg" />


                            <img class="bg img-responsive"
                                src="content/dam/tata/images/heritage/desktop/heritage_timeline2025_banner_desktop_1920x1080.jpg"
                                alt="" />

                        </picture>

                        <div class="imageOverlayBnr"></div>
                        <div class="iconOverlay">
                            <div class="map-illustration-wrapper">
                                <div class="marker-2">
                                    <a class="saltModal openModel" href="index.html" data-toggle="modal"
                                        data-target=".modal" data-index="1">


                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="neverRestCaption">
                            <em>Our Timelines</em>
                            <div class="description">
                                Founded over 150 years ago, the history of Tata group embodies, in many ways, the
                                history of entrepreneurship, philanthropy and compassionate capitalism in India, and
                                increasingly, the world. Explore its vibrant history through a set of timelines that
                                briefly highlight major milestones in its growth.
                                <a href="about-us/tata-group-our-heritage/timelines.html" target="_self">
                                    <img src="{{url('assets/images/arrow_icon_yellow.svg')}}" alt="Visit page"
                                        class="arrow" />
                                </a>
                            </div>
                        </div>
                    </section>



                    <section>
                        <div class="modal neverRestModal" tabindex="-1" role="dialog" data-keyboard="false"
                            data-backdrop="static" id="modalD">
                        </div>
                    </section>
                    <section id="modalOverlay"></section>
                    <section class="sliderElem hidden-xs hidden-sm"></section>
                </div>
                <div class="works-at-tata aem-GridColumn aem-GridColumn--default--12">


                    <section class="headerFade ymlSalt longBg mainSliderElem grayNav noSlider parallaxWrapper">

                        <div class="contntD">

                            <div class="container tataWeek">
                                <div class="newsroom newsroomN">
                                    <div class="row headingP">
                                        <h2 class="headingDiv">Careers</h2>

                                        <div class="contentBelow">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 tabV module">
                                                <div
                                                    class="col-lg-12 col-md-12 col-sm-6 col-xs-12 noPadding picPadding">
                                                    <picture>
                                                        <source class="deskImg" media="(min-width: 991px)"
                                                            srcset="content/dam/tata/images/careers/desktop/fakejobs_card_hz_desktop_390x362.jpg" />
                                                        <source media="(min-width: 575px)"
                                                            srcset="content/dam/tata/images/careers/tab/fakejobs_card_hz_tab_364x362.jpg" />
                                                        <source media="(min-width: 0)"
                                                            srcset="content/dam/tata/images/careers/mobile/fakejobs_card_hz_mobile_290x235.jpg" />
                                                        <img class="img-responsive bg vertImg"
                                                            src="content/dam/tata/images/careers/desktop/fakejobs_card_hz_desktop_390x362.jpg"
                                                            alt="Beware of job scams" />
                                                    </picture>
                                                    <!-- <div class="imageOverlay20"></div> -->

                                                </div>
                                                <div class="noPadding col-lg-12 col-md-12 col-sm-6 col-xs-12 ">
                                                    <div class="belowContent">
                                                        <div class="blueCaption">Careers</div>
                                                        <h3 class="nHeading">
                                                            Beware of Job Scams
                                                        </h3>
                                                        <div class="storyContent">
                                                            <div class="ymlFeedArticle">We do not charge/accept any
                                                                amount or security deposit from job seekers. Read
                                                                disclaimer.</div>
                                                            <div class="feedArticleBorder borderAnimCards"></div>
                                                        </div>


                                                        <img src="{{url('assets/images/arrow_icon_yellow.svg')}}"
                                                            alt="Arrow" class="arrow" />

                                                    </div>
                                                </div>


                                                <a href="careers/job-disclaimer-notification.html"
                                                    class="hoverCard"></a>

                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="flexx blockFlex">
                                                        <div
                                                            class="col-lg-12 col-md-12 col-sm-12 col-xs-12 topMargin3 topMarginsm topMarginxs module imageCrop">
                                                            <div class="fullCardClick">

                                                                <picture>
                                                                    <source media="(min-width: 991px)"
                                                                        srcset="content/dam/tata/images/careers/desktop/cop_2xcard_desktop_752x362.jpg" />
                                                                    <source media="(min-width: 575px)"
                                                                        srcset="content/dam/tata/images/careers/tab/cop_2xcard_tab_708x360.jpg" />
                                                                    <source media="(min-width: 0)"
                                                                        srcset="content/dam/tata/images/careers/mobile/cop_2xcard_mobile_290x490.jpg" />
                                                                    <img class="img-responsive backgImg aparna"
                                                                        src="content/dam/tata/images/careers/desktop/cop_2xcard_desktop_752x362.jpg"
                                                                        alt="Jobs for Tata People" />
                                                                </picture>
                                                                <div class="imageOverlay50"></div>
                                                                <div class="vidContent">
                                                                    <div class="whiteCaption">For Employees</div>
                                                                    <div class="">


                                                                        <img class="playVideo" alt="" />


                                                                        <div class="videoDescription">
                                                                            <h3 class="iTitle">Tata Opportunities for
                                                                                Tata People</h3>
                                                                            <div class="videoArticle">Explore roles
                                                                                across the Tata group seamlessly using
                                                                                the group mobility platform
                                                                                <div
                                                                                    class="videoBorder borderAnimCards borderAnimCards">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                                    alt="Arrow" class="arrow arrowInc" />



                                                                <a href="careers/jobs/internal-jobs-tata-group-mobility.html"
                                                                    class="CardUrl"></a>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flexx">
                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-6 topMargin width100 topMarginxs topMargin767 module">
                                                            <div class="titleContent ">
                                                                <div class="blueCaption">in numbers</div>
                                                                <!-- <div class="carouselDiv careerCarousel" data-ride="carousel">
                                                <div class="innerCarousel">
                                                    <sly data-sly-list.cardDetails="altTextCardImg,image,figures,jcr:primaryType,desc">
													<sly data-sly-test=>
                                                        <div class="carItem">
                                                            <ul class="careers">
                                                                <li>
                                                                    <img src="" alt="">
                                                                </li>
                                                                <li class="startAnim"></li>
                                                                <li class="jobDescription"></li>
                                                            </ul>
                                                        </div>
														</sly>
                                                    </sly>
                                                </div>
                                                <ol class="carouselIndicators counterAnim">
												
                                                    <sly data-sly-list.cardDetails="altTextCardImg,image,figures,jcr:primaryType,desc">
                                                        <li data-slide-to="" class=""></li>
                                                    </sly>
													
                                                </ol>
                                            </div> -->
                                                                <ul class="careers">


                                                                    <li>
                                                                        <img src="content/dam/tata/images/home-page/careers_icon.svg"
                                                                            alt="Home to 800,000 Employees" />
                                                                    </li>
                                                                    <li class="startAnim ">1028000</li>
                                                                    <li class="jobDescription">Employees at the Tata
                                                                        group</li>


                                                                </ul>



                                                                <a href="careers.html" class="hoverCard"></a>



                                                                <img src="{{url('assets/images/arrow_icon_yellow.svg')}}"
                                                                    alt="Arrow" class="arrow" />

                                                            </div>
                                                        </div>

                                                        <div
                                                            class="col-lg-6 col-md-6 col-sm-6 col-xs-6 width100 topMarginxs topMargin767 topMargin module">
                                                            <div class="twitterFeed">
                                                                <div class="whiteCaption">Careers</div>
                                                                <h3 class="nHeadingJobs">Featured Jobs </h3>
                                                                <div class="carouselDiv jobsCarouselHome"
                                                                    data-ride="carousel">

                                                                    <div class="innerCarousel sTwitter">
                                                                        <div class="carItem active flexJobs">


                                                                            <div class="twitterContent">

                                                                                <a href="careers/jobs/jobdetails0f90.html?jobId=14221&amp;company=Indian%20Hotels&amp;jobTitle=Reservations%20Officer&amp;location=Panjim%2C%20India"
                                                                                    class="careersCardGATag"
                                                                                    target="_blank" rel="noopener">
                                                                                    <div class="newsFeedA">
                                                                                        <span class="fJobs">Reservation
                                                                                            Officer</span>
                                                                                        <p class="tweet-date">IHCL,
                                                                                            Panjim</p>
                                                                                    </div>
                                                                                </a>


                                                                                <div class="newsBorder borderAnimCards">
                                                                                </div>
                                                                            </div>



                                                                            <div class="twitterContent">

                                                                                <a href="careers/jobs/jobdetailse6e0.html?jobId=34331544&amp;company=Air%20India&amp;jobTitle=Medical%20Officer&amp;location=Gurugram%2C%20India"
                                                                                    class="careersCardGATag"
                                                                                    target="_blank" rel="noopener">
                                                                                    <div class="newsFeedA">
                                                                                        <span class="fJobs">Medical
                                                                                            Officer</span>
                                                                                        <p class="tweet-date">Air India,
                                                                                            Gurugram</p>
                                                                                    </div>
                                                                                </a>


                                                                                <div class="newsBorder borderAnimCards">
                                                                                </div>
                                                                            </div>










                                                                        </div>
                                                                        <div class="carItem flexJobs">

                                                                            <div class="twitterContent">

                                                                                <a href="careers/jobs/jobdetailsc71c.html?jobId=a673c4c3e9ebe1&amp;company=Tata%201mg&amp;jobTitle=Senior%2F%20Lead%20Product%20Analyst-%20Product%20%7C%20Gurgaon&amp;location=Gurgaon%2C%20India"
                                                                                    class="careersCardGATag"
                                                                                    target="_blank" rel="noopener">
                                                                                    <div class="newsFeedA">
                                                                                        <span class="fJobs">Senior
                                                                                            Product Analyst</span>
                                                                                        <p class="tweet-date">Tata 1mg,
                                                                                            Gurgaon</p>
                                                                                    </div>
                                                                                </a>


                                                                                <div class="newsBorder borderAnimCards">
                                                                                </div>
                                                                            </div>



                                                                            <div class="twitterContent">

                                                                                <a href="careers/jobs/jobdetailsb7c6.html?jobId=1157958801&amp;company=Jaguar%20Land%20Rover&amp;jobTitle=AI%20Data%20Science%20Manager&amp;location=Gaydon%2C%20United%20Kingdom"
                                                                                    class="careersCardGATag"
                                                                                    target="_blank" rel="noopener">
                                                                                    <div class="newsFeedA">
                                                                                        <span class="fJobs">AI Data
                                                                                            Science Manager</span>
                                                                                        <p class="tweet-date">JLR,
                                                                                            Gaydon</p>
                                                                                    </div>
                                                                                </a>


                                                                                <div class="newsBorder borderAnimCards">
                                                                                </div>
                                                                            </div>






                                                                        </div>
                                                                        <div class="carItem flexJobs">










                                                                            <div class="twitterContent">

                                                                                <a href="careers/jobs/jobdetails9075.html?jobId=871405401&amp;company=Tata%20Motors&amp;jobTitle=Senior%20Manager-%20Warehousing%20operations&amp;location=Sanand%2C%20India"
                                                                                    class="careersCardGATag"
                                                                                    target="_blank" rel="noopener">
                                                                                    <div class="newsFeedA">
                                                                                        <span class="fJobs">Senior
                                                                                            Manager, Warehousing</span>
                                                                                        <p class="tweet-date">Tata
                                                                                            Motors, Pune</p>
                                                                                    </div>
                                                                                </a>


                                                                                <div class="newsBorder borderAnimCards">
                                                                                </div>
                                                                            </div>



                                                                            <div class="twitterContent">

                                                                                <a href="careers/jobs/jobdetailsd4fb.html?jobId=668135&amp;company=Tata%20Technologies%20Europe&amp;jobTitle=Design%20Engineer-%20Closures&amp;location=Pune%2C%20India"
                                                                                    class="careersCardGATag"
                                                                                    target="_blank" rel="noopener">
                                                                                    <div class="newsFeedA">
                                                                                        <span class="fJobs">Design
                                                                                            Engineer, Closures</span>
                                                                                        <p class="tweet-date">Tata
                                                                                            Technologies, Pune</p>
                                                                                    </div>
                                                                                </a>


                                                                                <div class="newsBorder borderAnimCards">
                                                                                </div>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                    <ol class="carouselIndicators nIndicators">


                                                                        <li data-slide-to="0" class="active"></li>










                                                                        <li data-slide-to="1"></li>










                                                                        <li data-slide-to="2"></li>






                                                                    </ol>
                                                                </div>


                                                                <a href="careers/jobs/joblisting.html">
                                                                    <img src="{{url('assets/images/arrow_icon_white.svg')}}"
                                                                        alt="Arrow" class="arrow arrowJobs" />
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
                        </div>
                    </section>


                </div>
                <div class="our-brands aem-GridColumn aem-GridColumn--default--12">

                    <section class="headerFade brandsSection mainSliderElem parallaxWrapper">
                        <div class="carousel carouselDiv slide brandCarousel" data-interval="3000" data-ride="carousel">
                            <div class="carousel-inner innerCarousel test brandCarouselItems">
                                <div class="fadeGlobalSearch" style="display: none; position: absolute; z-index: 2">
                                </div>
                                <div class="modalGlobalSearch" style="display: none; position: absolute"></div>

                                <div class="carItem heroItem active" data-step="1">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tata_curvv_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tata_curvv_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tata_curvv_brands_banner_mobile_320x568.jpg"
                                            alt="Curvv.ev" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://ev.tatamotors.com/curvv/ev.html"
                                                                target="_blank" rel="noopener">
                                                                Curvv.ev
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://ev.tatamotors.com/curvv/ev.html"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tata_neu_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tata_neu_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tata_neu_brands_banner_mobile_320x568.jpg"
                                            alt="Tata Neu" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="business/tata-digital/tata-neu.html"
                                                                target="_blank" rel="noopener">
                                                                Tata Neu
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="business/tata-digital/tata-neu.html"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/trent_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/trent_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/trent_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Westside" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.westside.com/" target="_blank"
                                                                rel="noopener">
                                                                Westside
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.westside.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/air_india_jan2024_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/air_india_jan2024_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/air_india_jan2024_brands_banner_mobile_320x568.jpg"
                                            alt="Air India" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.airindia.com/" target="_blank"
                                                                rel="noopener">
                                                                Air India
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.airindia.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/taj_aug2022_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/taj_aug2022_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/taj_aug2022_brands_banner_mobile_320x568.jpg"
                                            alt="Taj Hotels" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tajhotels.com/" target="_blank"
                                                                rel="noopener">
                                                                Taj Hotels
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tajhotels.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/nexon_ev_jan2024_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/nexon_ev_jan2024_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/nexon_ev_jan2024_brands_banner_mobile_320x568.jpg"
                                            alt="Nexon.ev" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://ev.tatamotors.com/content/tml/ev/in/en/nexon/ev.html"
                                                                target="_blank" rel="noopener">
                                                                Nexon.ev
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://ev.tatamotors.com/content/tml/ev/in/en/nexon/ev.html"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tata_salt_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tata_salt_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tata_salt_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Tata Salt" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tataconsumer.com/brands/foods/tata-salt"
                                                                target="_blank" rel="noopener">
                                                                Tata Salt
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tataconsumer.com/brands/foods/tata-salt"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tata_cliq_luxe_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tata_cliq_luxe_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tata_cliq_luxe_brands_banner_mobile_320x568.jpg"
                                            alt="Tata CLiQ Luxury" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://luxury.tatacliq.com/" target="_blank"
                                                                rel="noopener">
                                                                Tata CLiQ Luxury
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://luxury.tatacliq.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tata_sampann_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tata_sampann_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tata_sampann_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Sampann" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tataconsumer.com/brands/foods/tata-sampann"
                                                                target="_blank" rel="noopener">
                                                                Sampann
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tataconsumer.com/brands/foods/tata-sampann"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="10">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tata_tea_gold_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tata_tea_gold_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tata_tea_gold_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Tata Tea" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tataconsumer.com/brands/tea/tata-tea"
                                                                target="_blank" rel="noopener">
                                                                Tata Tea
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tataconsumer.com/brands/tea/tata-tea"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="11">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/altroz_dark_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/altroz_dark_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/altroz_dark_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Tata Altroz" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://cars.tatamotors.com/cars/altroz"
                                                                target="_blank" rel="noopener">
                                                                Tata Altroz
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://cars.tatamotors.com/cars/altroz"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="12">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tataaia_brands_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tataaia_brands_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tataaia_brands_mobile_320x568.jpg"
                                            alt="Tata AIA Life" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tataaia.com/" target="_blank"
                                                                rel="noopener">
                                                                Tata AIA Life
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tataaia.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="13">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tanishq_july2023_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tanishq_july2023_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tanishq_july2023_brands_banner_mobile_320x568.jpg"
                                            alt="Tanishq" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tanishq.co.in/" target="_blank"
                                                                rel="noopener">
                                                                Tanishq
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tanishq.co.in/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="14">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/croma_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/croma_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/croma_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Croma - The Electronics Superstore" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://croma.com/" target="_blank" rel="noopener">
                                                                Croma
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://croma.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="15">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/brands/desktop/vistara_brand_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/brands/tab/vistara_brand_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/brands/mobile/vistara_brand_banner_mobile_368x520.jpg"
                                            alt="Vistara" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://airvistara.com/" target="_blank"
                                                                rel="noopener">
                                                                Vistara
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://airvistara.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="16">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/jaguar_f_type_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/jaguar_f_type_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/jaguar_f_type_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Jaguar F‑TYPE" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.jaguar.in/jaguar-range/f-type/index.html"
                                                                target="_blank" rel="noopener">
                                                                Jaguar F‑TYPE
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.jaguar.in/jaguar-range/f-type/index.html"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="17">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/voltas_beko_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/voltas_beko_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/voltas_beko_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="VoltasBeko" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.voltasbeko.com/" target="_blank"
                                                                rel="noopener">
                                                                VoltasBeko
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.voltasbeko.com/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="18">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/tetley_oct2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/tetley_oct2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/tetley_oct2021_brands_banner_mobile_320x568.jpg"
                                            alt="Tetley" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Brands</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.tetley.in/" target="_blank"
                                                                rel="noopener">
                                                                Tetley
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.tetley.in/" target="_blank"
                                                                    rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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

                                <div class="carItem heroItem" data-step="19">
                                    <picture>
                                        <img class="bg img-responsive"
                                            data-srcdesktop="/content/dam/tata/images/home-page/brands/desktop/rangerover_new_2021_brands_banner_desktop_1920x1080.jpg"
                                            data-srctablet="/content/dam/tata/images/home-page/brands/tab/rangerover_new_2021_brands_banner_tab_768x1024.jpg"
                                            data-srcmobile="/content/dam/tata/images/home-page/brands/mobile/rangerover_new_2021_brands_banner_mobile_320x568.jpg"
                                            alt="Range Rover" />
                                    </picture>
                                    <div class="heroForegrounds container fadeInBanner">
                                        <div class="heroHeadline">
                                            <div class="sectionContent">
                                                <div class="bannerHeading">
                                                    <span>Our Strategic Alliance</span>
                                                    <div class="brandInfo">
                                                        <h1 class="heroHeading">
                                                            <a href="https://www.landrover.in/vehicles/new-range-rover/index.html"
                                                                target="_blank" rel="noopener">
                                                                Range Rover
                                                            </a>
                                                            <span class="extrnLink">
                                                                <a href="https://www.landrover.in/vehicles/new-range-rover/index.html"
                                                                    target="_blank" rel="noopener">
                                                                    <img src="{{url('assets/images/arrow_icon.svg')}}"
                                                                        alt="Arrow" />
                                                                </a>
                                                            </span>
                                                        </h1>
                                                        <a class="simButton buttonMore btn buttonMr"
                                                            href="brands-showcase.html">
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
                                                    src=""
                                                    alt="Nardus" />
                                            </li>

                                            <li data-slide-to="1" class="forBrands hide">
                                                <span class="hoverBrandTxt">Sano</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Sano" />
                                            </li>

                                            <li data-slide-to="2" class="forBrands hide">
                                                <span class="hoverBrandTxt">Agricapital</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Agricapital" />
                                            </li>

                                            <li data-slide-to="3" class="forBrands hide">
                                                <span class="hoverBrandTxt">4 Green</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="4 Green Communication" />
                                            </li>

                                            <li data-slide-to="4" class="forBrands hide">
                                                <span class="hoverBrandTxt">BCAL</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Bonum Consilium Africa Limited" />
                                            </li>

                                            <li data-slide-to="5" class="forBrands hide">
                                                <span class="hoverBrandTxt">Rufec</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Rufec" />
                                            </li>

                                            <li data-slide-to="6" class="forBrands hide">
                                                <span class="hoverBrandTxt">Agropark</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Agropark" />
                                            </li>

                                            <li data-slide-to="7" class="forBrands hide">
                                                <span class="hoverBrandTxt">Agri-tech Hub</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Agri-tech Hub" />
                                            </li>

                                            <li data-slide-to="8" class="forBrands hide">
                                                <span class="hoverBrandTxt">FAGH</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="FAGH Herbal Remedies" />
                                            </li>

                                            <li data-slide-to="9" class="forBrands hide">
                                                <span class="hoverBrandTxt">AFBS</span>
                                                <div class="overlayBrandNav"></div>
                                                <img class=" img-responsive upMark"
                                                    src="{{url('assets/images/hover%20arrow.svg')}}"
                                                    alt="Arrow" />
                                                <img class=" img-responsive "
                                                    src=""
                                                    alt="Agriculture and Food Business School" />
                                            </li>
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
                                <div class="pointerText artificialHover">Lead Stories</div>
                            </div>
                            <div class="pointerDiv">
                                <span class="point" data-slide="1"></span><span
                                    class="linePointer artificialHover"></span>
                                <div class="pointerText artificialHover">Social Media</div>
                            </div>
                            <div class="pointerDiv">
                                <span class="point" data-slide="2"></span><span
                                    class="linePointer artificialHover"></span>
                                <div class="pointerText artificialHover">Heritage</div>
                            </div>
                            <div class="pointerDiv">
                                <span class="point" data-slide="3"></span><span
                                    class="linePointer artificialHover"></span>
                                <div class="pointerText artificialHover">Careers</div>
                            </div>
                            <div class="pointerDiv">
                                <span class="point" data-slide="4"></span><span
                                    class="linePointer artificialHover"></span>
                                <div class="pointerText artificialHover">Our Brands</div>
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