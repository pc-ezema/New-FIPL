@extends('layouts.frontend', ['title' => 'Business Overview'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/verticals.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/verticals.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">

        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

            <div class="banner parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="bannerSection mainSliderElem active" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/business_overview2_banner_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/verticals/tab/business_overview2_banner_tab_768x1024.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/business_overview2_banner_mobile_320x568.jpg">
                        <img class="bg img-responsive " src="/content/dam/tata/images/verticals/desktop/business_overview2_banner_desktop_1920x1080.jpg" alt="Business">
                    </picture>

                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>Business</span>
                                    <h1 class="heroHeading">
                                        <span>Tata group</span>
                                        <span>Business Overview</span>
                                        <span></span>
                                    </h1>
                                </div>
                                <div class="bannerPara">
                                    <div class="bannerBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">
                                            Founded by Jamsetji Tata in 1868, the Tata group is a global enterprise, headquartered in India, comprising 30 companies across ten verticals
                                        </p>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                    <!-- for share and arrowDown -->
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
                    <!-- for share and arrowDown -->
                </section>
                <section>
                    <div class="modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" id="modalD">
                    </div>
                </section>

                <section class="sliderElem hidden-xs hidden-sm"></section>

            </div>
            <div class="verticals-article parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection mainSliderElem customScroll noSlider parallaxWrapper clickableDiv" anchorval="1">
                    <div class="container">
                        <div class="row wrapper">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 paraIconDiv">
                                <div class="forStoryPages">
                                    <div class="parallaxControlsStory showAll paraIconDiv animm positioning shareIconsPos inView notActive">
                                        <div class="pointerDiv active">
                                            <div class="Tooltip">
                                                <a class="shareBtnParent">
                                                    <img src="/content/dam/tata/images/common/share.svg" class="stIcons shareBtn normalImg lightModeShare" alt="Share">
                                                    <img src="/etc.clientlibs/tata/clientlibs/assets/resources/img/common/shareWhite.svg" class="stIcons shareBtn normalImg darkModeShare" alt="Share">
                                                    <img src="/content/dam/tata/images/common/shareOptions/color/share.svg" class="hideActive stIcons shareBtn" alt="Share">
                                                </a>
                                                <span class="tooltiptext hidden-sm hidden-xs">Share</span>
                                            </div>
                                            <div class="shareOptions">
                                                <div class="whatsApp">
                                                    <a class="whatsappImg">

                                                    </a>
                                                </div>
                                                <div class="fb shareEvent">
                                                    <a class="fbAnchor" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.tata.com/business/overview">

                                                    </a>
                                                </div>
                                                <div class="twitter shareEvent">
                                                    <a class="twitterAnchor" target="_blank" href="https://twitter.com/share?url=https://www.tata.com/business/overview&amp;text=The%20Tata%20group%20is%20a%20global%20enterprise%2C%20comprising%2030%20companies%20across%2010%20verticals.%20&amp;hashtags=ThisIsTata">

                                                    </a>
                                                </div>
                                                <div class="linkedin shareEvent">
                                                    <a class="linkedinAnchor" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.tata.com/business/overview">

                                                    </a>
                                                </div>

                                                <div class="mailto shareEvent">
                                                    <a class="mailtoAnchor" target="_top" href="mailto:?subject= Tata.com url&amp;body=%20https://www.tata.com/business/overview">

                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pointerDiv">
                                            <div class="Tooltip linkCopy">
                                                <a class="linkImages">
                                                    <img src="/content/dam/tata/images/common/link.svg" class="stIcons lightModeLinkIcon" alt="Copy link">
                                                    <img src="/etc.clientlibs/tata/clientlibs/assets/resources/img/common/linkWhiteDarkMode.svg" class="stIcons darkModeLinkIcon" alt="Copy link">
                                                    <img src="/content/dam/tata/images/common/linkColor.svg" class="stIcons" alt="Copy link">
                                                </a>
                                                <span class="tooltiptext hidden-sm hidden-xs">Copy URL</span>
                                                <span class="spnTextCopy">
                                                    <textarea class="urlCopied" rows="1" cols="30"></textarea>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pointerDiv">
                                            <div class="Tooltip">
                                                <a href="/content/dam/tata/pdf/tata_group_profile_FY24.pdf" class="downloadImages" download="">
                                                    <img src="/content/dam/tata/images/common/download.svg" class="stIcons lightModeDownloadIcon" alt="Download">
                                                    <img src="/etc.clientlibs/tata/clientlibs/assets/resources/img/common/downloadWhite.svg" class="stIcons darkModeDownloadIcon" alt="Download">
                                                    <img src="/content/dam/tata/images/common/downloadColor.svg" class="stIcons" alt="Download">
                                                </a>
                                                <span class="tooltiptext hidden-sm hidden-xs">PDF</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-lg-offset-1 col-lg-offset-right-1  col-md-9 col-md-offset-1 col-md-offset-right-1 col-sm-9 col-sm-offset-1 col-sm-offset-right-1 col-xs-12">
                                <div class="richtext">
                                    <p><span class="mainPara">Founded by Jamsetji Tata in 1868, the Tata group is a global enterprise, headquartered in India, comprising 30 companies across ten verticals.</span> </p>
                                    <p><span class="saltPara">The group operates in more than 100 countries across six continents, with a mission <i>'To improve the quality of life of the communities we serve globally, through long-term stakeholder value creation based on Leadership with Trust’.</i></span></p>
                                    <p><span class="saltPara">Tata Sons is the principal investment holding company and promoter of Tata companies. Sixty-six percent of the equity share capital of Tata Sons is held by philanthropic trusts, which support education, health, livelihood generation and art and culture.</span></p>
                                    <p><span class="saltPara">In 2023-24, the revenue of Tata companies, taken together, was more than $165 billion. These companies collectively employ over 1 million people.</span></p>
                                    <p><span class="saltPara">Each Tata company or enterprise operates independently under the guidance and supervision of its own board of directors. There are 26 publicly listed Tata enterprises with a combined market capitalisation of more than $365 billion as on March 31, 2024.</span></p>
                                    <p><span class="saltPara"><i>Scroll below to learn more about our ten business verticals.</i></span></p>
                                    <p>&nbsp;</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            <div class="verticals-companies parbase aem-GridColumn aem-GridColumn--default--12">


                <section class="ymlSalt customScroll mainSliderElem noSlider clickableDiv revenueCards" anchorval="2">
                    <div class="locateBrands" id="localSearchSection">
                        <div class="searchContainer container ">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-xs-12 searchVerticals">
                                    <input type="text" id="searchVerticals" class="inputSearch" placeholder="Search a Tata company">
                                    <div class="searchTooltip TooltipHeader">
                                        <span class=" searchImg searchicon"></span>
                                        <span class="tooltiptextHeader">Search</span>
                                    </div>
                                    <div class="recordTooltip TooltipHeader">
                                        <span class="recordImg recordicon"></span>
                                        <span class="tooltiptextHeader">Search by Voice</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container noPadding">
                        <div class="newsroom headingP">
                            <h2 class="headingDiv">Verticals</h2>
                            <div class="row noMargin">



                                <div class="content1 financials">


                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 module come-in">
                                        <div class="row nTitle noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/IT_card_desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/IT_card_tab_344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/IT_card_mobile_290x290.jpg">
                                                    <img class="img-responsive bg" src="/content/dam/tata/images/verticals/desktop/IT_card_desktop_362x362.jpg" alt="Information Technology">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Vertical</div>
                                                    <h3 class="nHeading ">Technology</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">Learn more about Tata group companies in the technology business.</div>
                                                        <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">


                                                            <div class="Tooltip">


                                                            </div>
                                                        </div>


                                                        <a href="/business/technology" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/technology" class="hoverCard"></a>
                                    </div>






                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 topMarginsm topMargin3 topMarginxs width50 module C come-in">
                                        <picture>
                                            <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/kalinganagar1_card_sq_desktop_362x362.jpg">
                                            <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/kalinganagar1_card_sq_tab_344x362.jpg">
                                            <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/kalinganagar1_card_sq_mobile_290x290.jpg">
                                            <img class="img-responsive backgImg " src="/content/dam/tata/images/verticals/desktop/kalinganagar1_card_sq_desktop_362x362.jpg" alt="Steel">
                                        </picture>
                                        <div class="imageOverlay50"></div>
                                        <div class="whiteContent">
                                            <div class="whiteCaption">Vertical</div>
                                            <h3 class="nHeadingW">Steel</h3>
                                            <div class="storyContent">
                                                <div class="ymlFeedArticleW">News, information and stories on the Steel vertical at the Tata group.</div>
                                                <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">


                                                    <div class="Tooltip">


                                                    </div>

                                                </div>


                                                <a href="/business/steel" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_white.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/steel" class="hoverCard"></a>
                                    </div>










                                </div>

                                <div class="clear"></div>

                                <div class="content2 financials">










                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 topMarginsm topMargin3 topMarginxs width50 module C come-in">
                                        <div class="titleContent">
                                            <div class="blueCaption">Vertical</div>
                                            <h3 class="nHeading">Automotive</h3>
                                            <div class="storyContent">
                                                <div class="ymlTextArticle">News, information and stories on the Automotive vertical at the Tata group.</div>
                                                <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">


                                                    <div class="Tooltip">


                                                    </div>

                                                </div>


                                                <a href="/business/auto" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/auto" class="hoverCard"></a>
                                    </div>






                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin3 topMarginxs topMarginsm module come-in">
                                        <div class="row nImg noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey ">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/retail_2023_card_hz_desktop_390x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/retail_2023_card_hz_tab_364x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/retail_2023_card_hz_mobile_290x235.jpg">
                                                    <img class="img-responsive bg vertImg" src="/content/dam/tata/images/verticals/desktop/retail_2023_card_hz_desktop_390x362.jpg">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Vertical</div>
                                                    <h3 class="nHeading">Consumer and Retail</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">Tata group companies operate several market-leading consumer and retail brands.</div>
                                                        <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">


                                                            <div class="Tooltip">


                                                            </div>

                                                        </div>


                                                        <a href="/business/consumer-retail" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/consumer-retail" class="hoverCard"></a>
                                    </div>


                                </div>








                            </div>
                            <div class="row noMargin viewMoreHide">






                                <div class="content1 topMargin financials">


                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin767 topMarginsm topMarginxs module already-visible come-in">
                                        <div class="row nTitle noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/banner_infra_sea_Square_Desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/banner_infra_sea_square_tab-344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/banner_infra_sea_square_mobile_290x290.jpg">
                                                    <img class="img-responsive bg" src="/content/dam/tata/images/verticals/desktop/banner_infra_sea_Square_Desktop_362x362.jpg" alt="Infrastructure">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Vertical</div>
                                                    <h3 class="nHeading ">Infrastructure</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">News, information and stories on the Infrastructure vertical at the Tata group.</div>
                                                        <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">


                                                            <div class="Tooltip">


                                                            </div>

                                                        </div>


                                                        <a href="/business/infrastructure" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/infrastructure" class="hoverCard"></a>
                                    </div>






                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 topMarginsm topMarginxs topMargin3 module C already-visible come-in">
                                        <picture>
                                            <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/banner_generic_bombayhouse_Square_Desktop_362x362.jpg">
                                            <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/banner_generic_bombayhouse_square_tab_344x362.jpg">
                                            <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/banner_generic_bombayhouse_square_mobile_290x290.jpg">
                                            <img class="img-responsive backgImg " src="/content/dam/tata/images/verticals/desktop/banner_generic_bombayhouse_Square_Desktop_362x362.jpg" alt="Financial Services">
                                        </picture>
                                        <div class="imageOverlay50"></div>
                                        <div class="whiteContent">
                                            <div class="whiteCaption">Vertical</div>
                                            <h3 class="nHeadingW">Financial Services</h3>
                                            <div class="storyContent">
                                                <div class="ymlFeedArticleW">News, information and stories about the Tata group in the financial services industry.</div>
                                                <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">


                                                    <div class="Tooltip">


                                                    </div>

                                                </div>


                                                <a href="/business/financial" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_white.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/financial" class="hoverCard"></a>
                                    </div>










                                </div>

                                <div class="clear"></div>

                                <div class="content2 financials">










                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 topMarginsm topMargin3 topMarginxs width50 module C already-visible come-in">
                                        <div class="titleContent">
                                            <div class="blueCaption">Vertical</div>
                                            <h3 class="nHeading">Aerospace and Defence</h3>
                                            <div class="storyContent">
                                                <div class="ymlTextArticle">News, information and stories on the Defence and Aerospace vertical.</div>
                                                <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">


                                                    <div class="Tooltip">


                                                    </div>

                                                </div>


                                                <a href="/business/aerospace-defence" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/aerospace-defence" class="hoverCard"></a>
                                    </div>






                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin3 topMarginxs topMarginsm module already-visible come-in">
                                        <div class="row nImg noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey ">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/banner_travel_tajexotica_square_desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/banner_travel_tajexotica_square_tab_344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/banner_travel_tajexotica_square_mobile_290x290.jpg">
                                                    <img class="img-responsive bg vertImg" src="/content/dam/tata/images/verticals/desktop/banner_travel_tajexotica_square_desktop_362x362.jpg" alt="Taj Exotica">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Vertical</div>
                                                    <h3 class="nHeading">Tourism and Travel</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">News, information and stories about the Tata group in the Tourism and Travel vertical.</div>
                                                        <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">


                                                            <div class="Tooltip">


                                                            </div>

                                                        </div>


                                                        <a href="/business/tourism-travel" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/tourism-travel" class="hoverCard"></a>
                                    </div>


                                </div>




                                <div class="content1 topMargin financials">


                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin767 topMarginsm topMarginxs module already-visible come-in">
                                        <div class="row nTitle noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/banner_telecom_datacenter_square_desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/banner_telecom_datacenter_square_tab_344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/banner_telecom_datacenter_square_mobile_290x290.jpg">
                                                    <img class="img-responsive bg" src="/content/dam/tata/images/verticals/desktop/banner_telecom_datacenter_square_desktop_362x362.jpg">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Vertical</div>
                                                    <h3 class="nHeading ">Telecom and Media</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">News, information and stories about the Tata group in the Telecom and Media industries.</div>
                                                        <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">


                                                            <div class="Tooltip">


                                                            </div>

                                                        </div>


                                                        <a href="/business/telecom-media" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/telecom-media" class="hoverCard"></a>
                                    </div>







                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 width100 topMarginsm topMarginxs topMargin3 module C already-visible come-in">
                                        <div class="titleContent">
                                            <div class="blueCaption">Vertical</div>
                                            <h3 class="nHeading ">Trading and Investments</h3>
                                            <div class="storyContent">
                                                <div class="ymlTextArticle">News, information and stories from the Tata group in the Trading and Investment vertical.</div>
                                                <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">


                                                    <div class="Tooltip">


                                                    </div>

                                                </div>


                                                <a href="/business/trading-investments" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/trading-investments" class="hoverCard"></a>
                                    </div>



                                </div>






                            </div>









                            <div class="flexD">
                                <a class="simButton buttonMore btn loadMoreBtn buttonMr">
                                    <span class="loadmore">Load More</span>
                                    <span class="loadless">Load Less</span>
                                </a>
                            </div>



                        </div>
                    </div>
                </section>
                <section id="modalOverlay"></section>
                <section>
                    <div class="modal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" id="modalD">
                    </div>
                </section>



            </div>


        </div>
    </div>

</main>
@endsection