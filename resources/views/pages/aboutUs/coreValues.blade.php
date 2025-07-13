@extends('layouts.frontend', ['title' => 'Our Core Values'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/story-type-b.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/story-type-b.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="story-type-b-banner parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="bannerSection mainSliderElem clickableDiv active" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/tajmahal_banner_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/tajmahal_banner_tab_768x1024.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/tajmahal_banner_mobile_320x568.jpg">
                        <img class="bg img-responsive " src="/content/dam/tata/images/about-us/Desktop/tajmahal_banner_desktop_1920x1080.jpg" alt="Values and Purpose">
                    </picture>
                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <div class="whiteCaption">About Us</div>
                                    <h1 class="heroHeading"><span>Core Values</span>
                                        <span></span>
                                        <span></span>
                                    </h1>
                                </div>
                                <div class="bannerPara">
                                    <div class="bannerBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">
                                            Discipline, Integrity, Creativity, Excellence, Tenacity, Innovation, and Intelligence.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="iconOverlay">
                        <div class="map-illustration-wrapper">
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
                <section id="modalOverlay"></section>
                <section class="sliderElem hidden-xs hidden-sm"></section>
            </div>
            <div class="story-type-b-article parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection mainSliderElem customScroll noSlider parallaxWrapper clickableDiv" anchorval="1">
                    <div class="container">
                        <div class="row wrapper">
                            <div class="col-lg-1 paraDiv"></div>
                            <div class="col-lg-10 paraDiv">
                                <div class="richtext saltPara">
                                    <p><span class="mainPara">Business, as I have seen it, places one great demand on you: it needs you to self-impose a framework of ethics, values, fairness and objectivity on yourself at all times.” - Ratan N Tata, 2006</span></p>
                                    <h2>Core values:</h2>
                                    <p><span class="saltPara">FIP has always been a values-driven&nbsp;organisation. These values continue to direct the growth and business of FIP companies.</span></p>
                                    <p><span class="saltPara">The seven core FIP values underpinning the way we do business are:</span></p>
                                    <p><span class="saltPara"><b>Discipline</b></span></p>
                                    <p><span class="saltPara">We established a framework of efficiency, productivity, and responsibility, leading to the long-term success and sustainability of our business model.</span></p>
                                    <p><span class="saltPara"><b>Integrity</b></span></p>
                                    <p><span class="saltPara">Our foundation is solidly embedded in earning the trust of all our stakeholders by contributing to a more sustainable and ethical agro system.</span></p>
                                    <p><span class="saltPara"><b>Creativity</b></span></p>
                                    <p><span class="saltPara">We instilled an environment of innovation, adaptability, and sustainability in a dynamic and competitive global industry.</span></p>
                                    <p><span class="saltPara"><b>Excellence</b></span></p>
                                    <p><span class="saltPara">Through the commitment of our bright minds, we develop a standard of high performance, driving continuous improvement, enhancing operational efficiency, building a strong reputation, and ultimately achieving long-term success and sustainability.</span></p>
                                    <p><span class="saltPara"><b>Tenacity</b></span></p>
                                    <p><span class="saltPara">We built a mindset of resilience, innovation, and perseverance, enabling it to overcome challenges, achieve its goal, and contribute to a more sustainable agro system.</span></p>
                                    <p><span class="saltPara"><b>Innovation</b></span></p>
                                    <p><span class="saltPara">We foster an atmosphere of creativity, leading to our continuous growth and advancement in the agro industry.</span></p>
                                    <p><span class="saltPara"><b>Intelligence</b></span></p>
                                    <p><span class="saltPara">By embracing the power of transformation and technology, we have become more efficient, innovative, and resilient, thus ensuring our long-term success in a complex and ever-changing world.</span></p>
                                    <div class="showViewMore">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 paraDiv"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

</main>
@endsection