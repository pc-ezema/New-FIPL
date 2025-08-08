@extends('layouts.frontend', ['title' => 'Our Vision'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/investor-type-1.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/investor-type-1.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="banner parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="bannerSection mainSliderElem active" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="{{ url('assets/images/about/vision.png') }}">
                        <source media="(min-width: 767px)" srcset="{{ url('assets/images/about/vision.png') }}">
                        <source media="(min-width: 0)" srcset="{{ url('assets/images/about/vision.png') }}">
                        <img class="bg img-responsive " src="{{ url('assets/images/about/vision.png') }}" alt="Vision">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>About us</span>
                                    <h1 class="heroHeading">
                                        <span>Our Vision</span>
                                        <span></span>
                                        <span></span>
                                    </h1>
                                </div>
                                <div class="bannerPara">
                                    <div class="bannerBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">
                                            Build food industrial hubs accross Agrarian communities.
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
            <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection mainSliderElem customScroll noSlider" anchorval="1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-10 col-sm-offset-1 col-sm-offset-right-1 col-xs-12  paraDiv">
                                <div class="richtext">
                                    <p><span class="mainPara">Our vision is to create a comprehensive agricultural ecosystem that transforms farm products into diverse consumer goods through our network of strategic alliances. We bridge the gap between primary production and market-ready products by establishing value-addition hubs that unlock the full potential of Africa's agricultural resources.</span></p>
                                    <p><span class="saltPara">Our integrated approach encompasses:</span></p>
                                    <h2 style="margin: 0;">Complete Value Chain Development:</h2>
                                    <p><span class="saltPara">We connect every stage from farm to finished product, from raw produce sourcing to consumer food products, beverages, and spices; 
                                    from essential oils and cosmetics to herbal remedies, creating multiple value streams from agricultural resources.</span></p>
                                    <h2 style="margin: 0;">Infrastructure & Processing Excellence:</h2>
                                    <p><span class="saltPara">Our food industrial hubs and development facilities transform raw agricultural materials into premium products while minimizing waste. 
                                    These physical centers serve as convergence points where modern technology meets traditional knowledge.</span></p>
                                    <h2 style="margin: 0;">Agricultural Inputs & Support:</h2>
                                    <p><span class="saltPara">We provide high-quality seeds, fertilizers, and agronomic support that help farmers maximize yields and produce quality raw materials for our processing facilities.</span></p>
                                    <h2 style="margin: 0;">Sustainable Community Development:</h2>
                                    <p><span class="saltPara">We create appropriate housing and community infrastructure that supports agricultural workers and their families, ensuring farming communities thrive alongside agricultural enterprises.</span></p>
                                    <h2 style="margin: 0;">Media & Market Visibility:</h2>
                                    <p><span class="saltPara">We amplify our collective impact through strategic communication, connecting our products with consumers who value quality, sustainability, and African agricultural heritage.</span></p>
                                    <h2 style="margin: 0;">Innovation & Research:</h2>
                                    <p><span class="saltPara">We continuously develop new products, processes, and methods that expand the commercial applications of African agricultural resources—from food innovations to natural cosmetics and health solutions.</span></p>
                                    <h2 style="margin: 0;">Skills & Knowledge Transfer:</h2>
                                    <p><span class="saltPara">We empower farming communities with specialized skills that create employment opportunities across our diverse product categories, from food processing to cosmetic production and herbal formulation.</span></p>
                                    <p><span class="saltPara">Through this holistic approach, we are building resilient agricultural value chains that transform farm productivity into consumer products, creating sustainable prosperity that benefits producers, processors, retailers, and consumers across Africa.</span></p>

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