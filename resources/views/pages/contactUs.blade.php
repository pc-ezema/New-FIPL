@extends('layouts.frontend', ['title' => 'Contact Us'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/verticals.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/contact.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/verticals.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="we-tata aem-GridColumn aem-GridColumn--default--12">
                <section class="headerFade bannerSection mainSliderElem active" anchorval="0">

                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/about-us/Desktop/about_tata_leadimage_desktop_1920x1080.jpg">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/about-us/Tab/Landing-Page-Tab-1.jpg">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/about-us/Mobile/Landing-Page-Mobile.jpg">

                        <img class="bg img-responsive" src="/content/dam/tata/images/about-us/Desktop/about_tata_leadimage_desktop_1920x1080.jpg" alt="Jamsetji Tata">
                    </picture>

                    <div class="imageOverlayBnr"></div>

                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">

                                    <span>About Us</span>
                                    <h1 class="heroHeading">
                                        <span>We are Tata</span>
                                        <span></span>
                                        <span></span>
                                    </h1>

                                </div>
                                <div class="bannerPara">
                                    <div class="mainBorder pull-left"></div>
                                    <div class="bannerReadingTxt">
                                        <p class="bannerDiv">

                                            <span>India's only value based corporation —</span>

                                            <span>a visionary, a pioneer, a leader, since 1868.</span>

                                            <span>Scroll below to learn more about us. </span>

                                        </p>
                                    </div>
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
                <section class="sliderElem hidden-xs hidden-sm">
                </section>
            </div>
            <div class="parallax aem-GridColumn aem-GridColumn--default--12">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="biziness-content-one">
                                    <h2>Contact Us</h2>
                                    <p>Working with the FIP is more than just a career; it’s meaningful work that improves the lives of millions of people.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="parallax aem-GridColumn aem-GridColumn--default--12">
                <section style="padding:70px 0;" class="contact-bgs">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="contact-form">
                                    <br>
                                    <h1>How can we help you?</h1>
                                    <br><br>
                                    <div class="row">
                                        <div class="col-md-12">
                        
                                            <div class="wpcf7 js" id="wpcf7-f109-o1" lang="en-US" dir="ltr" data-wpcf7-id="109">
                                                <div class="screen-reader-response">
                                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                    <ul></ul>
                                                </div>
                                                <form action="/contact/#wpcf7-f109-o1" method="post" class="wpcf7-form resetting" aria-label="Contact form" novalidate="novalidate" data-status="resetting">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="109">
                                                        <input type="hidden" name="_wpcf7_version" value="6.0.2">
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US">
                                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f109-o1">
                                                        <input type="hidden" name="_wpcf7_container_post" value="0">
                                                        <input type="hidden" name="_wpcf7_posted_data_hash" value="">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <p><label> Your Name (required)</label><br>
                                                                <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" value="" type="text" name="your-name"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <p><label> Your Email (required) </label><br>
                                                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" value="" type="email" name="your-email">
                                                                    <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <p><label> Subject </label><br>
                                                                <span class="wpcf7-form-control-wrap" data-name="your-subject"><input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text form-control" aria-invalid="false" value="" type="text" name="your-subject"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <p><label> Your Message </label><br>
                                                                <span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" name="your-message"></textarea></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12 text-center">
                                                            <p><input class="wpcf7-form-control wpcf7-submit has-spinner jabilani" type="submit" value="Send"><span class="wpcf7-spinner"></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row" style="margin: 50px 0px">
                                        <div class="col-md-6">
                                            <div class="contact-details">
                                                <h1>General Inquiries</h1>
                                                <p>Call: 0903 681 5529</p> 
                                                <p>Email: info@fipl.ng</p>
                                                <br>
                                                <h2>
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="https://www.linkedin.com/company/food-industrial-park-limited" target="_blank">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                    <a href="#" target="_blank">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contact-details">
                                                <h1>Our Location:</h1>
                                                <p>Ijale (Ogun State)</p>
                                                <p>Ijoga (Ogun State)</p>
                                                <p>Tede (Oyo State)</p>
                                                <p>Ofodo (Kogi State)</p>
                                                <p>Lokoja (Kogi State)</p>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
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