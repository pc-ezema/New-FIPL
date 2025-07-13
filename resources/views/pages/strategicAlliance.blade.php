@extends('layouts.frontend', ['title' => 'Careers'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/verticals.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/careers.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/verticals.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="banner parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="bannerSection mainSliderElem" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/infastructure_banner_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/verticals/tab/infastructure_banner_tab_768x1024.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/infastructure_banner_mobile_320x568.jpg">
                        <img class="bg img-responsive " src="/content/dam/tata/images/verticals/desktop/infastructure_banner_desktop_1920x1080.jpg" alt="Infrastructure">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>Strategic Alliance</span>
                                    <h1 class="heroHeading">
                                        <span>Our Strategic Alliance</span>
                                        <span></span>
                                        <span></span>
                                    </h1>
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
                <section class="saltStContentSection mainSliderElem customScroll noSlider parallaxWrapper clickableDiv active" anchorval="1">
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
                                                    <a class="whatsappImg"> </a>
                                                </div>
                                                <div class="fb shareEvent">
                                                    <a class="fbAnchor" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.tata.com/business/infrastructure"> </a>
                                                </div>
                                                <div class="twitter shareEvent">
                                                    <a class="twitterAnchor" target="_blank" href="https://twitter.com/share?url=https://www.tata.com/business/infrastructure&amp;text=News%2C%20information%20and%20stories%20about%20Tata%20group%20companies%20in%20the%20infrastructure%20vertical"> </a>
                                                </div>
                                                <div class="linkedin shareEvent">
                                                    <a class="linkedinAnchor" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.tata.com/business/infrastructure"> </a>
                                                </div>
                                                <div class="mailto shareEvent">
                                                    <a class="mailtoAnchor" target="_top" href="mailto:?subject= Tata.com url&amp;body=%20https://www.tata.com/business/infrastructure"> </a>
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

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-lg-offset-1 col-lg-offset-right-1  col-md-9 col-md-offset-1 col-md-offset-right-1 col-sm-9 col-sm-offset-1 col-sm-offset-right-1 col-xs-12">
                                <div class="richtext">
                                    <p><span class="mainPara">The Tata group has been in the Infrastructure vertical since the early 1900s.</span></p>
                                    <p><span class="saltPara">The story of the group's involvement in the energy sector started with the commissioning of the Khopoli power station in 1910. Today, the group leads the energy sector in India and supplies energy to family homes as well as large cities and industries.</span></p>
                                    <p><span class="saltPara">The group's prowess in leading large housing, realty and integrated projects is well-known, and we boast of some of the finest engineering talent in India. In the housing sector, we help families access affordable housing, and at the same time engage with local, state and national governments to enable infrastructure projects which include space exploration to smart, sustainable, livable urban spaces.</span></p>
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
                                    <input type="text" id="searchVerticals" class="inputSearch" placeholder="Locate your Company">
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
                            <h2 class="headingDiv">Companies</h2>
                            <div class="row noMargin">
                                <div class="content1 financials">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 module come-in" company="554">
                                        <div class="row nTitle noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/generic_tatapower_card_desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/generic_tatapower_card_tab344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/generic_tatapower_card_mobile_290x290.jpg">
                                                    <img class="img-responsive bg" src="/content/dam/tata/images/verticals/desktop/generic_tatapower_card_desktop_362x362.jpg" alt="Tata Power">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C554">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Energy</div>
                                                    <h3 class="nHeading ">Tata Power</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">Tata Power is India's Largest Integrated Power Company.</div>
                                                        <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                                    </div>

                                                    <div class="market">
                                                        <div class="nse textGrey neg" style="display: block;"> NSE
                                                            <span>396.85</span> (
                                                            <span>-0.76%</span>)
                                                        </div>
                                                        <div class="vlGrey">|</div>
                                                        <div class="bse textGrey neg" style="display: block;"> BSE
                                                            <span>396.7</span> (
                                                            <span>-0.78%</span>)
                                                        </div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">
                                                            <div class="copyDiv">
                                                                <div class="copyIcon cursorPointer"></div>
                                                                <div class="copyIconWhite cursorPointer noDisplay">
                                                                </div>
                                                                <div class="copyLinkTooltip noDisplay">
                                                                    Copy URL</div>
                                                                <textarea class="hiddenTxt" readonly="readonly" style="display: none;">https://www.tatapower.com/</textarea>
                                                            </div>
                                                            <a href="https://www.twitter.com/TataPower" class="twitterLink cursorPointer" target="_blank" rel="noopener">
                                                                <div class="twitterIcon"></div>
                                                                <div class="twitterTooltip noDisplay">
                                                                    Twitter</div>
                                                            </a>
                                                            <div class="Tooltip"> </div>
                                                        </div> <a href="/business/tata-power" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/tata-power" class="hoverCard"></a>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 topMarginsm topMargin3 topMarginxs width50 module C come-in">
                                        <picture>
                                            <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/projects_card_desktop_362x362.jpg">
                                            <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/projects_card_tab_344x362.jpg">
                                            <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/projects_card_mobile_290x290.jpg">
                                            <img class="img-responsive backgImg " src="/content/dam/tata/images/verticals/desktop/projects_card_desktop_362x362.jpg" alt="Tata Projects">
                                        </picture>
                                        <div class="imageOverlay50"></div>
                                        <div class="whiteContent">
                                            <div class="whiteCaption">Engineering</div>
                                            <h3 class="nHeadingW">Tata Projects</h3>
                                            <div class="storyContent">
                                                <div class="ymlFeedArticleW">Tata Projects is one of India’s fastest growing Engineering, Procurement &amp; Constructio...</div>
                                                <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">
                                                    <div class="copyDiv">
                                                        <div class="copyIcon cursorPointer noDisplay"></div>
                                                        <div class="copyIconWhite cursorPointer"></div>
                                                        <div class="copyLinkTooltip noDisplay">
                                                            Copy URL</div>
                                                        <textarea class="hiddenTxt" readonly="readonly" style="display: none;">https://www.tataprojects.com/</textarea>
                                                    </div>

                                                    <div class="Tooltip"> </div>
                                                </div> <a href="/business/tata-projects" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_white.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/tata-projects" class="hoverCard"></a>
                                    </div>

                                </div>
                                <div class="clear"></div>
                                <div class="content2 financials">

                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 topMarginsm topMargin3 topMarginxs width50 module C come-in">
                                        <div class="titleContent">
                                            <div class="blueCaption">Residential</div>
                                            <h3 class="nHeading">Tata Housing</h3>
                                            <div class="storyContent">
                                                <div class="ymlTextArticle">Tata Housing is one of India's leading corporate residential property developers</div>
                                                <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                            </div>

                                            <div class="imageDiv">
                                                <div class="leftIcons">
                                                    <div class="copyDiv">
                                                        <div class="copyIcon cursorPointer"></div>
                                                        <div class="copyIconWhite cursorPointer noDisplay">
                                                        </div>
                                                        <div class="copyLinkTooltip noDisplay">
                                                            Copy Link</div>
                                                        <textarea class="hiddenTxt" readonly="readonly" style="display: none;">https://tatahousing.in</textarea>
                                                    </div>
                                                    <a href="https://twitter.com/tata_housing" class="twitterLink cursorPointer" target="_blank" rel="noopener">
                                                        <div class="twitterIcon"></div>
                                                        <div class="twitterTooltip noDisplay">
                                                            Twitter</div>
                                                    </a>
                                                    <div class="Tooltip"> </div>
                                                </div> <a href="/business/tata-housing" class="rightIcon">
                                                    <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                </a>

                                            </div>
                                        </div>
                                        <a href="/business/tata-housing" class="hoverCard"></a>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin3 topMarginxs topMarginsm module come-in">
                                        <div class="row nImg noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey ">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/generic_tce_card_desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/generic_tce_card_tab_344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/generic_tce_card_mobile_290x290.jpg">
                                                    <img class="img-responsive bg vertImg" src="/content/dam/tata/images/verticals/desktop/generic_tce_card_desktop_362x362.jpg" alt="Tata Consulting Engineers">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Engineering</div>
                                                    <h3 class="nHeading">Tata Consulting Engineers</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">TCE provides engineering design consultancy services in three core business segments - In...</div>
                                                        <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">
                                                            <div class="copyDiv">
                                                                <div class="copyIcon cursorPointer"></div>
                                                                <div class="copyIconWhite cursorPointer noDisplay">
                                                                </div>
                                                                <div class="copyLinkTooltip noDisplay">
                                                                    Copy Link</div>
                                                                <textarea class="hiddenTxt" readonly="readonly" style="display: none;">https://tce.co.in</textarea>
                                                            </div>
                                                            <a href="https://twitter.com/TCE_News" class="twitterLink cursorPointer" target="_blank" rel="noopener">
                                                                <div class="twitterIcon"></div>
                                                                <div class="twitterTooltip noDisplay">
                                                                    Twitter</div>
                                                            </a>
                                                            <div class="Tooltip"> </div>
                                                        </div> <a href="/business/tce" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/tce" class="hoverCard"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row noMargin viewMoreHide">
                                <div class="content1 topMargin financials">
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 topMargin767 topMarginsm topMarginxs module already-visible come-in">
                                        <div class="row nTitle noMargin">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 nHockey">
                                                <picture>
                                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/verticals/desktop/generic_tril_ramanujan_card_desktop_362x362.jpg">
                                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/verticals/tab/generic_tril_ramanujan_tab_344x362.jpg">
                                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/verticals/mobile/generic_tril_ramanujan_mobile_290x290.jpg">
                                                    <img class="img-responsive bg" src="/content/dam/tata/images/verticals/desktop/generic_tril_ramanujan_card_desktop_362x362.jpg" alt="Tata Realty and Infrastructure">
                                                </picture>
                                                <!-- <div class="imageOverlay20"></div> -->
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 noPadding C">
                                                <div class="imageContent">
                                                    <div class="blueCaption">Commercial Realty</div>
                                                    <h3 class="nHeading ">Tata Realty and Infrastructure</h3>
                                                    <div class="storyContent">
                                                        <div class="ymlFeedArticle">TRIL, a 100% subsidiary of Tata Sons serves as a real estate and infrastructure developmen...</div>
                                                        <div class="feedArticleBorder borderAnimCards already-visible comeInBorder"></div>
                                                    </div>

                                                    <div class="imageDiv">
                                                        <div class="leftIcons">
                                                            <div class="copyDiv">
                                                                <div class="copyIcon cursorPointer"></div>
                                                                <div class="copyIconWhite cursorPointer noDisplay">
                                                                </div>
                                                                <div class="copyLinkTooltip noDisplay">
                                                                    Copy Link</div>
                                                                <textarea class="hiddenTxt" readonly="readonly" style="display: none;">http://tril.co.in/</textarea>
                                                            </div>

                                                            <div class="Tooltip"> </div>
                                                        </div> <a href="/business/tril" class="rightIcon">
                                                            <img src="/content/dam/tata/images/common/arrow_icon_yellow.svg" alt="Arrow" class="arrow">
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/business/tril" class="hoverCard"></a>
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