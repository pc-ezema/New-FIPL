@extends('layouts.frontend', ['title' => 'Agriculture'])

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
                                        <span>Agriculture</span>
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
                                    <p><span class="mainPara">At FIP, we're revolutionizing Nigeria's agricultural landscape through innovative technology and sustainable practices. Our integrated approach connects farmers with essential resources, markets, and expertise to maximize productivity and profitability.</span></p>
                                    <p><span class="saltPara">Through our digital platform, we provide smallholder farmers access to quality inputs, mechanization services, and real-time agricultural advisory. Our data-driven solutions offer tailored recommendations for crop selection, planting schedules, and pest management, optimizing yields while minimizing environmental impact.</span></p>
                                    <p><span class="saltPara">We've established direct market linkages that eliminate middlemen, ensuring farmers receive fair compensation for their produce. Our value chain integration extends from farm to table, reducing post-harvest losses and improving food security across communities.</span></p>
                                    <p><span class="saltPara">FIP's commitment to agriculture goes beyond immediate yields; we're building resilient farming systems that adapt to climate challenges while supporting rural economic development. By combining traditional farming wisdom with modern agricultural science, we're creating sustainable pathways to food sufficiency and economic empowerment for Nigeria's farming communities.</span></p>
                                    <p><span class="saltPara">Together, we're growing more than crops; we're cultivating prosperity.</span></p>
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