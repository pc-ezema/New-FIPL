@extends('layouts.frontend', ['title' => 'Business Overview'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/common-empty-page.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/information-type-1.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/information-type-1.min.js')}}"></script>
<script src="{{url('assets/javascript/common-empty-page.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="banner-video parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="bannerSection mainSliderElem clickableDiv" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{url('assets/images/business/banner.png')}}">
                        <source media="(min-width: 767px)" srcset="{{url('assets/images/business/banner.png')}}">
                        <source media="(min-width: 0)" srcset="{{url('assets/images/business/banner.png')}}">
                        <img class="bg img-responsive " src="{{url('assets/images/business/banner.png')}}" alt="Business FIPL">
                    </picture>

                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>Business</span>
                                    <h1 class="heroHeading">
                                        <span>FIPL</span>
                                        <span>Business Overview</span>
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
            <div id="food" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="{{url('assets/images/business/food.png')}}">
                                    <source media="(min-width: 575px)" srcset="{{url('assets/images/business/food.png')}}">
                                    <source media="(min-width: 0)" srcset="{{url('assets/images/business/food.png')}}">
                                    <img class="img-responsive foldImg" src="{{url('assets/images/business/food.png')}}" alt="Food">
                                </picture>
                                <span class="captionImg">FOOD</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">Food</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Food Industrial Park food division is dedicated to revolutionizing the food supply chain through innovative industrial parks that combine modern processing technologies with rigorous quality control.</span><br>
                                        <span class="infoFeedArticle">Our facilities are designed to support value addition and optimize production, ensuring that locally sourced produce is transformed into high-quality products ready for both domestic consumption and export markets.</span><br>
                                        <span class="infoFeedArticle">We collaborate with farmers, processors, and distributors to streamline operations, reduce post-harvest losses, and enhance food safety. By integrating state-of-the-art equipment and sustainable practices, we foster an environment where innovation meets tradition, driving economic growth and improving food security.</span><br>
                                        <span class="infoFeedArticle">Our commitment to excellence is reflected in every aspect of our operations, from research and development to community engagement and capacity building. With a focus on efficiency and sustainability, we empower agribusinesses to thrive in a competitive market, ultimately contributing to a robust and resilient food ecosystem.</span><br>
                                        <span class="infoFeedArticle">Our integrated approach not only supports technological advancements but also builds local capacity by providing training, resources, and financial opportunities that encourage innovation throughout the food value chain, ensuring benefits for communities.</span><br>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="agriculture" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="{{url('assets/images/business/agriculture.png')}}">
                                    <source media="(min-width: 575px)" srcset="{{url('assets/images/business/agriculture.png')}}">
                                    <source media="(min-width: 0)" srcset="{{url('assets/images/business/agriculture.png')}}">
                                    <img class="img-responsive foldImg" src="{{url('assets/images/business/agriculture.png')}}">
                                </picture>
                                <span class="captionImg">AGRICULTURE</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">Agriculture</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">At FIPL, we're revolutionizing Nigeria's agricultural landscape through innovative technology and sustainable practices. Our integrated approach connects farmers with essential resources, markets, and expertise to maximize productivity and profitability.</span><br>
                                        <span class="infoFeedArticle">Through our digital platform, we provide smallholder farmers access to quality inputs, mechanization services, and real-time agricultural advisory. Our data-driven solutions offer tailored recommendations for crop selection, planting schedules, and pest management, optimizing yields while minimizing environmental impact.</span><br>
                                        <span class="infoFeedArticle">We've established direct market linkages that eliminate middlemen, ensuring farmers receive fair compensation for their produce. Our value chain integration extends from farm to table, reducing post-harvest losses and improving food security across communities.</span><br>
                                        <span class="infoFeedArticle">FIPL's commitment to agriculture goes beyond immediate yields; we're building resilient farming systems that adapt to climate challenges while supporting rural economic development. By combining traditional farming wisdom with modern agricultural science, we're creating sustainable pathways to food sufficiency and economic empowerment for Nigeria's farming communities.</span><br>
                                        <span class="infoFeedArticle">Together, we're growing more than crops; we're cultivating prosperity.</span><br> 
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="media" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="{{url('assets/images/business/media.png')}}">
                                    <source media="(min-width: 575px)" srcset="{{url('assets/images/business/media.png')}}">
                                    <source media="(min-width: 0)" srcset="{{url('assets/images/business/media.png')}}">
                                    <img class="img-responsive foldImg" src="{{url('assets/images/business/media.png')}}" alt="Media">
                                </picture>
                                <span class="captionImg">MEDIA</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">Media</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Our Media division serves as the creative heartbeat that amplifies Food Industrial Park transformative initiatives. We leverage an array of digital and traditional media channels to share compelling stories that highlight innovation, sustainability, and community transformation.</span><br>
                                        <span class="infoFeedArticle">Our team creates engaging content that showcases the successes of our food, agriculture, and real estate initiatives, ensuring that our stakeholders and partners remain informed and inspired.</span><br>
                                        <span class="infoFeedArticle">Through strategic media partnerships and cutting-edge communication technologies, we disseminate key insights, industry trends, and best practices that drive collaborative growth. Our efforts are designed to foster transparency, build trust, and stimulate dialogue within the communities we serve.</span><br>
                                        <span class="infoFeedArticle">By blending creative storytelling with data-driven strategies, we elevate our brand presence and contribute to a broader understanding of our mission. We are committed to using media as a force for positive change, connecting people, ideas, and opportunities to drive sustainable development and enhance the overall quality of life.</span><br>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="real-estate" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="{{url('assets/images/business/real-estate.png')}}">
                                    <source media="(min-width: 575px)" srcset="{{url('assets/images/business/real-estate.png')}}">
                                    <source media="(min-width: 0)" srcset="{{url('assets/images/business/real-estate.png')}}">
                                    <img class="img-responsive foldImg" src="{{url('assets/images/business/real-estate.png')}}">
                                </picture>
                                <span class="captionImg">REAL ESTATE</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">Real Estate</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">FIPL transforms rural living conditions by creating accessible, sustainable, and practical housing solutions for farming communities. We bridge the rural housing deficit through strategic development projects that blend affordability with quality living environments suitable for agricultural lifestyles.</span><br>
                                        <span class="infoFeedArticle">Our housing portfolio encompasses family farmsteads, community settlements, and agricultural worker accommodations designed to meet diverse farming needs. Each dwelling incorporates practical features, energy-efficient systems, and locally-sourced materials that reduce environmental impact while enhancing comfort for farming families.</span><br>
                                        <span class="infoFeedArticle">We've pioneered flexible ownership models that make quality housing accessible to farmers at various income levels. Our transparent processes simplify the complex journey of rural property acquisition, from financing options tailored to seasonal farm incomes to streamlined legal documentation.</span><br>
                                        <span class="infoFeedArticle">FIPL's farmers’ housing vision extends beyond basic shelter—we're building thriving agricultural communities with essential amenities and infrastructure that support modern farming lifestyles. Our developments prioritize access to water, reliable power, storage facilities, and community spaces that strengthen rural social bonds.</span><br>
                                        <span class="infoFeedArticle">By using local construction materials and engaging local craftspeople, our housing projects stimulate economic growth in farming communities while preserving regional architectural traditions and cultural identity.</span><br>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection