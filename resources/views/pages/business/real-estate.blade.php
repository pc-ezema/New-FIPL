@extends('layouts.frontend', ['title' => 'Real Estate'])

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
                                    <span>Business Area</span>
                                    <h1 class="heroHeading">
                                        <span>Real Estate</span>
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
            <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection mainSliderElem customScroll noSlider" anchorval="1">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-10 col-sm-offset-1 col-sm-offset-right-1 col-xs-12  paraDiv">
                                <div class="richtext">
                                    <p><span class="mainPara">FIP transforms rural living conditions by creating accessible, sustainable, and practical housing solutions for farming communities. We bridge the rural housing deficit through strategic development projects that blend affordability with quality living environments suitable for agricultural lifestyles.</span></p>
                                    <p><span class="saltPara">Our housing portfolio encompasses family farmsteads, community settlements, and agricultural worker accommodations designed to meet diverse farming needs. Each dwelling incorporates practical features, energy-efficient systems, and locally sourced materials that reduce environmental impact while enhancing comfort for farming families.</span></p>
                                    <p><span class="saltPara">We've pioneered flexible ownership models that make quality housing accessible to farmers at various income levels. Our transparent processes simplify the complex journey of rural property acquisition, from financing options tailored to seasonal farm incomes to streamlined legal documentation.</span></p>
                                    <p><span class="saltPara">FIP's farmers’ housing vision extends beyond basic shelter—we're building thriving agricultural communities with essential amenities and infrastructure that support modern farming lifestyles. Our developments prioritize access to water, reliable power, storage facilities, and community spaces that strengthen rural social bonds.</span></p>
                                    <p><span class="saltPara">By using local construction materials and engaging local craftspeople, our housing projects stimulate economic growth in farming communities while preserving regional architectural traditions and cultural identity.</span></p>
                                    <p><span class="saltPara">We're not just constructing farm buildings, we're creating homes where agricultural families can thrive, generations can grow, and farming legacies can flourish.</span></p>
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