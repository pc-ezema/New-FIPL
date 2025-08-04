@extends('layouts.frontend', ['title' => 'Our Mission'])

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
                        <source media="(min-width: 991px)" srcset="{{ url('assets/images/about/mission.png') }}">
                        <source media="(min-width: 767px)" srcset="{{ url('assets/images/about/mission.png') }}">
                        <source media="(min-width: 0)" srcset="{{ url('assets/images/about/mission.png') }}">
                        <img class="bg img-responsive " src="{{ url('assets/images/about/mission.png') }}" alt="Mission">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>About us</span>
                                    <h1 class="heroHeading">
                                        <span>Our Mission</span>
                                        <span></span>
                                        <span></span>
                                    </h1>
                                </div>
                                <div class="bannerPara">
                                    <div class="bannerBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">
                                            We create a seamless platform where farmers, processors, and other stakeholders meet to optimize resources in the Agri value chain.
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
                                    <p><span class="mainPara">FIP Limited, We create food industrial park across Agrarian communities.</span></p>
                                    <p><span class="saltPara">We recognize that agricultural success depends on effective collaboration across the entire value chain. 
                                    Our mission is to eliminate barriers between key stakeholders by providing an integrated platform that connects everyone involved in bringing food from farm to table.</span></p>
                                    <p><span class="saltPara">Our platform serves as a digital and physical ecosystem where:</span></p>
                                    <h2 style="margin: 0;">Farmers:</h2>
                                    <p><span class="saltPara">Farmers gain direct access to reliable markets, quality inputs, technical knowledge, and fair pricing information. They can showcase their produce, negotiate directly with buyers, and participate in larger contracts that would be inaccessible to individual smallholders.</span></p>
                                    <h2 style="margin: 0;">Processors:</h2>
                                    <p><span class="saltPara">Processors connect with consistent sources of quality raw materials, reducing procurement uncertainty and allowing for better production planning. They can communicate their specific requirements directly to farmers, ensuring crops meet processing standards.</span></p>
                                    <h2 style="margin: 0;">Input Suppliers:</h2>
                                    <p><span class="saltPara">Input Suppliers reach farmers with seeds, fertilizers, and equipment matched to local growing conditions and market demand, supported by proper usage guidance that maximizes effectiveness.</span></p>
                                    <h2 style="margin: 0;">Logistics Providers:</h2>
                                    <p><span class="saltPara">Logistics Providers coordinate the efficient movement of agricultural products, reducing transit times and preserving product quality while optimizing vehicle capacity and routes.</span></p>
                                    <h2 style="margin: 0;">Financial Institutions:</h2>
                                    <p><span class="saltPara">Financial Institutions offer tailored agricultural financing with reduced risk through better visibility into farming operations and market connections.</span></p>
                                    <h2 style="margin: 0;">Consumers:</h2>
                                    <p><span class="saltPara">Consumers access information about food origins and production methods, supporting informed choices while providing valuable feedback to producers.</span></p>

                                    <p><span class="saltPara">By bringing these stakeholders together on our platform, we minimize resource wastage, reduce transaction costs, and ensure that value is distributed more equitably throughout the agricultural chain. Our integrated approach transforms fragmented agricultural activities into a coordinated system that improves outcomes for everyone involved while strengthening food security and economic resilience in agrarian communities.</span></p>

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