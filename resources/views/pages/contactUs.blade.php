@extends('layouts.frontend', ['title' => 'Contact Us'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/home-page.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/contact.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/home-page.min.js')}}"></script>
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

                                    <span>Contact Us</span>
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

                                                <div id="formResponse" class="mt-3"></div>

                                                <form id="contactForm">
                                                    <!-- Honeypot field (hidden from users) -->
                                                    <input type="text" name="website" style="display:none;" autocomplete="off">

                                                    <div class="form-group">
                                                        <label>Your Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="name" class="form-control" required maxlength="100">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Email <span class="text-danger">*</span></label>
                                                        <input type="email" name="email" class="form-control" required maxlength="150">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Subject</label>
                                                        <input type="text" name="subject" class="form-control" maxlength="150">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Your Message</label>
                                                        <textarea name="message" rows="5" class="form-control" maxlength="1000"></textarea>
                                                    </div>

                                                    <!-- reCAPTCHA Token Field -->
                                                    <input type="hidden" name="recaptcha_token" id="recaptchaToken">

                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-success">Send</button>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc844ErAAAAAKPCWZuT3D1kVwCYzekeagJRHcra"></script>
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('6Lc844ErAAAAAKPCWZuT3D1kVwCYzekeagJRHcra', {action: 'contact'}).then(function (token) {
            document.getElementById('recaptchaToken').value = token;
        });
    });

    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        let $form = $(this);
        let $btn = $form.find('button[type="submit"]');
        let $response = $('#formResponse');
        $btn.prop('disabled', true).text('Sending...');

        $.ajax({
            url: '{{ url("/contact-submit") }}',
            method: 'POST',
            data: $form.serialize(),
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            success: function(res) {
                $response.html(`<div class="alert alert-success">${res.message}</div>`);
                $form[0].reset();
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;
                    let errorMsg = Object.values(errors).map(e => `<li>${e[0]}</li>`).join('');
                    $response.html(`<div class="alert alert-danger"><ul>${errorMsg}</ul></div>`);
                } else {
                    $response.html(`<div class="alert alert-danger">Something went wrong.</div>`);
                }
            },
            complete: function() {
                $btn.prop('disabled', false).text('Send');
            }
        });
    });
</script>

</script>

@endsection