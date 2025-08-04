@extends('layouts.frontend', ['title' => 'Media'])

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
                                        <span>Media</span>
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
                                    <p><span class="mainPara">Our Media division serves as the creative heartbeat that amplifies Food Industrial Park transformative initiatives. We leverage an array of digital and traditional media channels to share compelling stories that highlight innovation, sustainability, and community transformation.</span></p>
                                    <p><span class="saltPara">Our team creates engaging content that showcases the successes of our food, agriculture, and real estate initiatives, ensuring that our stakeholders and partners remain informed and inspired.</span></p>
                                    <p><span class="saltPara">Through strategic media partnerships and cutting-edge communication technologies, we disseminate key insights, industry trends, and best practices that drive collaborative growth. Our efforts are designed to foster transparency, build trust, and stimulate dialogue within the communities we serve.</span></p>
                                    <p><span class="saltPara">By blending creative storytelling with data-driven strategies, we elevate our brand presence and contribute to a broader understanding of our mission. We are committed to using media as a force for positive change, connecting people, ideas, and opportunities to drive sustainable development and enhance the overall quality of life.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection mainSliderElem customScroll noSlider" anchorval="1">
                    <div class="container">
                        <div class="brand-carousel">
                            <div class="carousel-track">
                                <a href="https://nardus.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/nardus.png') }}" alt="Nardus">
                                    <span>Nardus</span>
                                </a>
                                <a href="https://sanofoods.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/sano-foods.png') }}" alt="Sano">
                                    <span>Sano</span>
                                </a>
                                <a href="https://agricapital.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/agricapital.png') }}" alt="Agricapital">
                                    <span>Agricapital</span>
                                </a>
                                <a href="https://4greencomms.com" class="brand-item">
                                    <img src="{{ url('assets/images/home/4green.png') }}" alt="4 Green">
                                    <span>4 Green</span>
                                </a>
                                <a href="https://bcal.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/bonum.png') }}" alt="BCAL">
                                    <span>BCAL</span>
                                </a>
                                <a href="https://rufec.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/rufec.png') }}" alt="Rufec">
                                    <span>Rufec</span>
                                </a>
                                <a href="https://agropark.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/agropark.png') }}" alt="Agropark">
                                    <span>Agropark</span>
                                </a>
                                <a href="https://agrihubtech.ng" class="brand-item">
                                    <img src="{{ url('assets/images/home/agri-tech-hub.png') }}" alt="Agri-tech Hub">
                                    <span>Agri-tech Hub</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection