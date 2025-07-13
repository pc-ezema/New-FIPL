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
                <div class="text">
                    <div data-cmp-data-layer="{&quot;text-c1098612b1&quot;:{&quot;@type&quot;:&quot;cep/components/text&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-17T15:46:20Z&quot;,&quot;xdm:text&quot;:&quot;&lt;h2 style=\&quot;text-align: center;\&quot;&gt;At The Coca-Cola Company, we believe in the power of human potential.&lt;/h2&gt;\r\n&quot;}}" id="text-c1098612b1" class="cmp-text">
                        <h2 style="text-align: center;">At The Coca‑Cola Company, we believe in the power of human potential.</h2>
                    </div>
                </div>
            </div>
            <div class="parallax aem-GridColumn aem-GridColumn--default--12">
                <div class="text">
                    <div data-cmp-data-layer="{&quot;text-272a75c7bf&quot;:{&quot;@type&quot;:&quot;cep/components/text&quot;,&quot;repo:modifyDate&quot;:&quot;2023-03-16T12:16:17Z&quot;,&quot;xdm:text&quot;:&quot;&lt;p style=\&quot;text-align: center;\&quot;&gt;Our culture is built on the foundational belief that we never stop learning. That each of us has the ability to take control of our own individual futures – but that when we work together we can make a longer lasting impact on the communities we serve. Because we believe our human potential is limitless, we’re looking for the best talent to help us all thrive.&lt;/p&gt;\r\n&quot;}}" id="text-272a75c7bf" class="cmp-text">
                        <p style="text-align: center;">Our culture is built on the foundational belief that we never stop learning. That each of us has the ability to take control of our own individual futures – but that when we work together we can make a longer lasting impact on the communities we serve. Because we believe our human potential is limitless, we’re looking for the best talent to help us all thrive.</p>
                    </div>
                </div>
                <div class="container responsivegrid grid two-columns">
                    <div id="container-86c9779a56" class="cmp-container">
                        <div class="button button--align-right">
                            <a id="button-0c81beb261" class="cmp-button" data-cmp-clickable="" data-cmp-data-layer="{&quot;button-0c81beb261&quot;:{&quot;@type&quot;:&quot;cep/components/button&quot;,&quot;repo:modifyDate&quot;:&quot;2024-05-08T21:10:16Z&quot;,&quot;dc:title&quot;:&quot;Job Search&quot;,&quot;xdm:linkURL&quot;:&quot;https://careers.coca-colacompany.com/&quot;}}" href="https://careers.coca-colacompany.com/">
                                <span class="cmp-button__text">Job Search</span>
                            </a>
                        </div>
                        <div class="button button--align-left">
                            <a id="button-d0a5549e6a" class="cmp-button" data-cmp-clickable="" data-cmp-data-layer="{&quot;button-d0a5549e6a&quot;:{&quot;@type&quot;:&quot;cep/components/button&quot;,&quot;repo:modifyDate&quot;:&quot;2024-05-07T21:15:38Z&quot;,&quot;dc:title&quot;:&quot;Talent Community&quot;,&quot;xdm:linkURL&quot;:&quot;https://coke.wd1.myworkdayjobs.com/en-US/coca-cola-careers/introduceYourself?source=Client%20to%20define&quot;}}" href="https://coke.wd1.myworkdayjobs.com/en-US/coca-cola-careers/introduceYourself?source=Client%20to%20define">
                                <span class="cmp-button__text">Talent Community</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="teaser campaign-card content-on-bottom content-on-left content-card--with-secondary-button">
                    <div id="teaser-b0dbd1df1b" class="cmp-teaser">
                        <div class="cmp-teaser__content">
                            <h3 class="cmp-teaser__title">
                                Work with Us
                            </h3>
                            <div class="cmp-teaser__description">
                                <p>The Coca‑Cola Company is a global community of passionate dreamers, builders, doers and thinkers and we’re looking to inspire the next generation. Discover the innovation that drives us and the people behind it all.</p>
                            </div>
                            <div class="cmp-teaser__action-container">
                                <a class="cmp-teaser__action-link" id="teaser-b0dbd1df1b-cta-acb2405e8e" data-cmp-data-layer="{&quot;teaser-b0dbd1df1b-cta-acb2405e8e&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;Explore&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/work-with-us.html&quot;}}" data-cmp-clickable="" href="/careers/work-with-us">Explore</a>
                            </div>
                        </div>
                        <div class="cmp-teaser__image">
                            <div id="teaser-b0dbd1df1b-image" data-cmp-data-layer="{&quot;teaser-b0dbd1df1b-image&quot;:{&quot;@type&quot;:&quot;cep/components/adaptiveImage&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-16T21:07:34Z&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/work-with-us.html&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;ab04c2fb-8bdc-4060-9f73-79426879e636&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-16T21:06:46Z&quot;,&quot;@type&quot;:&quot;image/png&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png&quot;,&quot;repo:mobile:path&quot;:&quot;/content/dam/company/us/en/careers/Homepage-Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                <picture class="loaded visible">
                                    <source srcset="/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width100.png 100w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width200.png 200w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width380.png 380w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width500.png 500w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width767.png 767w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width1024.png 1024w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width1338.png 1338w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width1960.png 1960w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width2674.png 2674w,/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png/width3840.png 3840w" width="563" height="450">
                                    <img src="/content/dam/company/us/en/careers/terrell-red-stairs-corporate-5x4.png" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="A man in a suit standing on red stairs reading his phone">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teaser campaign-card content-on-bottom content-on-right content-card--with-secondary-button">
                    <div id="teaser-8cbd2ef74f" class="cmp-teaser">
                        <div class="cmp-teaser__content">
                            <h3 class="cmp-teaser__title">
                                Life at Coca‑Cola
                            </h3>
                            <div class="cmp-teaser__description">
                                <p>At Coca‑Cola, we’ve built a company and a culture that reflects the world we serve; exciting, inspiring, and diverse. Explore what it’s like to work and thrive with us.</p>
                            </div>
                            <div class="cmp-teaser__action-container">
                                <a class="cmp-teaser__action-link" id="teaser-8cbd2ef74f-cta-b17f87848b" data-cmp-data-layer="{&quot;teaser-8cbd2ef74f-cta-b17f87848b&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;See What its LIke&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/life-at-coca-cola.html&quot;}}" data-cmp-clickable="" href="/careers/life-at-coca-cola">See What its LIke</a>
                            </div>
                        </div>
                        <div class="cmp-teaser__image">
                            <div id="teaser-8cbd2ef74f-image" data-cmp-data-layer="{&quot;teaser-8cbd2ef74f-image&quot;:{&quot;@type&quot;:&quot;cep/components/adaptiveImage&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-24T18:52:37Z&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/life-at-coca-cola.html&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;2e6ce792-7090-4b3c-a694-1ed95d873b8c&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-16T21:06:46Z&quot;,&quot;@type&quot;:&quot;image/png&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png&quot;,&quot;repo:mobile:path&quot;:&quot;/content/dam/company/us/en/careers/Homepage-Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                <picture class="loaded visible">
                                    <source srcset="/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width100.png 100w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width200.png 200w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width380.png 380w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width500.png 500w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width767.png 767w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width1024.png 1024w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width1338.png 1338w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width1960.png 1960w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width2674.png 2674w,/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png/width3840.png 3840w" width="563" height="450">
                                    <img src="/content/dam/company/us/en/careers/group-standing-talking-corporate-5x4.png" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="Group of colleagues standing and talking">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teaser campaign-card content-on-bottom content-on-left content-card--with-secondary-button">
                    <div id="teaser-5ba53f6bc3" class="cmp-teaser">
                        <div class="cmp-teaser__content">
                            <h3 class="cmp-teaser__title">
                                Career Areas
                            </h3>
                            <div class="cmp-teaser__description">
                                <p>We aim to refresh the world every day. To do that, we need innovative thinkers across nearly every field you can imagine. Explore the world of Coca‑Cola and find a place that’s a fit for you.</p>
                            </div>
                            <div class="cmp-teaser__action-container">
                                <a class="cmp-teaser__action-link" id="teaser-5ba53f6bc3-cta-91bd007a20" data-cmp-data-layer="{&quot;teaser-5ba53f6bc3-cta-91bd007a20&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;Find your Career Fit&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/career-areas.html&quot;}}" data-cmp-clickable="" href="/careers/career-areas">Find your Career Fit</a>
                            </div>
                        </div>
                        <div class="cmp-teaser__image">
                            <div id="teaser-5ba53f6bc3-image" data-cmp-data-layer="{&quot;teaser-5ba53f6bc3-image&quot;:{&quot;@type&quot;:&quot;cep/components/adaptiveImage&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-24T18:53:09Z&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/career-areas.html&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;98ecd3be-e8bc-4859-a31c-5454329cc713&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-16T21:06:48Z&quot;,&quot;@type&quot;:&quot;image/jpeg&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg&quot;,&quot;repo:mobile:path&quot;:&quot;/content/dam/company/us/en/careers/Homepage-Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                <picture class="loaded visible">
                                    <source srcset="/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width100.jpg 100w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width200.jpg 200w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width380.jpg 380w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width500.jpg 500w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width767.jpg 767w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width1024.jpg 1024w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width1338.jpg 1338w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width1960.jpg 1960w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width2674.jpg 2674w,/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg/width3840.jpg 3840w" width="563" height="450">
                                    <img src="/content/dam/company/us/en/careers/the-cocacola-system-5x4.jpg" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="Colors are being analyzed by a technician in a Coca-Cola lab coat">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teaser campaign-card content-on-bottom content-on-right content-card--with-secondary-button">
                    <div id="teaser-c1f631f432" class="cmp-teaser">
                        <div class="cmp-teaser__content">
                            <h3 class="cmp-teaser__title">
                                Hiring Process
                            </h3>
                            <div class="cmp-teaser__description">
                                <p>We're excited to have you explore career opportunities with us and look forward to guiding you through our hiring process. Take the first step towards becoming a valued member of The Coca‑Cola Company.</p>
                            </div>
                            <div class="cmp-teaser__action-container">
                                <a class="cmp-teaser__action-link" id="teaser-c1f631f432-cta-0cb441c6f0" data-cmp-data-layer="{&quot;teaser-c1f631f432-cta-0cb441c6f0&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;Explore Hiring Process&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/hiring-process.html&quot;}}" data-cmp-clickable="" href="/careers/hiring-process">Explore Hiring Process</a>
                            </div>
                        </div>
                        <div class="cmp-teaser__image">
                            <div id="teaser-c1f631f432-image" data-cmp-data-layer="{&quot;teaser-c1f631f432-image&quot;:{&quot;@type&quot;:&quot;cep/components/adaptiveImage&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-24T18:53:26Z&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/hiring-process.html&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;1e75e36f-b3e1-4439-8082-7925e7da6b35&quot;,&quot;repo:modifyDate&quot;:&quot;2023-05-16T21:06:48Z&quot;,&quot;@type&quot;:&quot;image/png&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/group-shaking-hands-5x4.png&quot;,&quot;repo:mobile:path&quot;:&quot;/content/dam/company/us/en/careers/Homepage-Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                <picture class="visible loaded">
                                    <source srcset="/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width100.png 100w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width200.png 200w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width380.png 380w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width500.png 500w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width767.png 767w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width1024.png 1024w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width1338.png 1338w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width1960.png 1960w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width2674.png 2674w,/content/dam/company/us/en/careers/group-shaking-hands-5x4.png/width3840.png 3840w" width="563" height="450">
                                    <img src="/content/dam/company/us/en/careers/group-shaking-hands-5x4.png" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="Coworkers shaking hands and smiling">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="title"></div>
                <div class="container responsivegrid grid three-columns">
                    <script>
                        //Function to check if a teaser image exists and add the at-hide-teaser-image class from the image container if it does not
                        function updateTeaserImage(item, index) {
                            //Check if image exists
                            var imageSrc;
                            var imageExistsFlag = 'N';
                            if (item.querySelectorAll('img').length !== 0) {
                                if (item.querySelector('img').getAttribute('src')) {
                                    imageSrc = item.querySelector('img').getAttribute('src');
                                    if (imageSrc !== "" && imageSrc !== null && imageSrc !== undefined && imageSrc.indexOf(".thumbnailUrl") == -1) {
                                        imageExistsFlag = 'Y';
                                        console.log("Image " + (index + 1) + " found with src attribute: " + imageSrc);
                                    }
                                }
                            }
                            //If image does exist, ensure it has the loaded and visibl classes so the image will actually render (for whitelisting we also remove at-hide-teaser-image class)
                            if (imageExistsFlag == 'Y') {
                                //item.classList.remove('at-hide-teaser-image');
                                if (item.querySelector('picture') !== null) {
                                    item.querySelector('picture').classList.add('loaded');
                                    item.querySelector('picture').classList.add('visible');
                                }
                            }
                            //If image does not exist
                            if (imageExistsFlag == 'N') {
                                item.classList.add('at-hide-teaser-image');
                                console.log("Adding at-hide-teaser-image class to image container for item " + (index + 1) + " with src attribute: " + imageSrc);
                            }
                        }

                        function checkTeaserImages() {
                            var teaserImageArrayRaw;
                            var teaserImageArray = [];
                            if (document.querySelectorAll('#related-content .cmp-teaser__image').length !== 0) {
                                //create an array of teaser image elements
                                teaserImageArrayRaw = document.querySelectorAll('#related-content .cmp-teaser__image');
                                teaserImageArray = Array.from(teaserImageArrayRaw);
                                teaserImageArray.forEach(updateTeaserImage);
                            }
                        }

                        //Polling function to check incrimentally for the item being updated, then stopping once found
                        function pollBeforeExecuteRelatedContentUpdate() {
                            var a_related_itemExistsFlag = 0;
                            var a_related_intervId;
                            if (!a_related_intervId) {
                                a_related_intervId = setInterval(function() {
                                    console.log("Polling for related content images (every half second)");
                                    if (document.querySelectorAll('#related-content .cmp-teaser__image picture').length !== 0) {
                                        a_related_itemExistsFlag = 1;
                                        clearInterval(a_related_intervId);
                                        // release our intervalID from the variable
                                        a_related_intervId = null;
                                        console.log("Polling for related content images stopped (after finding node)");
                                        //Insert the content
                                        //setTimeout(checkTeaserImages, 500); //run this after half of one second
                                        checkTeaserImages();
                                        console.log("Teaser Images Updated");
                                    }
                                }, 500); //run this every half second
                            }

                            //Use below if a time limit is needed for the polling function
                            setTimeout(function() {
                                clearInterval(a_related_intervId);
                                // release our intervalID from the variable
                                a_related_intervId = null;
                                console.log("Polling for related content images stopped (after 10 seconds)");
                            }, 10000); //run this after 10 seconds
                        }
                        pollBeforeExecuteRelatedContentUpdate();
                        window.addEventListener("load", pollBeforeExecuteRelatedContentUpdate);
                    </script>
                    <style>
                        .at-hide-teaser-image {
                            display: none;
                        }

                        #related-content img {
                            opacity: 1 !important;
                        }

                        .cmp-teaser__title,
                        .cmp-teaser__title p {
                            font-weight: bold !important;
                            text-transform: capitalize;
                        }
                    </style>

                    <div class="title">
                        <div data-cmp-data-layer="{&quot;related-content-title&quot;:{&quot;@type&quot;:&quot;cep/components/title&quot;,&quot;repo:modifyDate&quot;:&quot;2024-03-04T15:22:26Z&quot;,&quot;dc:title&quot;:&quot;Related Content&quot;}}" id="related-content-title" class="cmp-title">
                            <h2 class="cmp-title__text">Related Content</h2>
                        </div>
                    </div>

                    <div class="container responsivegrid grid three-columns">
                        <div id="related-content" class="cmp-container related-recommendations">
                            <div class="teaser content-card"><a class="" id="teaser-related01-cta-related01" data-cmp-data-layer="{&quot;teaser-related01-cta-related01&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;Read More&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/career-areas&quot;}}" data-cmp-clickable="" href="https://www.coca-colacompany.com/careers/career-areas">
                                    <div id="teaser-related01" class="cmp-teaser" data-cmp-data-layer="{&quot;teaser-related01&quot;:{&quot;@type&quot;:&quot;cep/components/teaser&quot;,&quot;repo:modifyDate&quot;:&quot;1752348037766&quot;,&quot;dc:description&quot;:&quot;Career Areas&quot;}}">
                                        <div class="cmp-teaser__content">
                                            <div class="cmp-teaser__title">
                                                <p>Career Areas</p>
                                            </div>
                                            <div class="cmp-teaser__action-container">
                                                <p class="cmp-teaser__action-link">Read More</p>
                                            </div>
                                        </div>
                                        <div class="cmp-teaser__image">
                                            <div id="teaser-related01-image" data-cmp-data-layer="{&quot;teaser-related01-image&quot;:{&quot;@type&quot;:&quot;&quot;,&quot;repo:modifyDate&quot;:&quot;1752348037766&quot;,&quot;dc:title&quot;:&quot;&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;related01&quot;,&quot;repo:modifyDate&quot;:&quot;1752348037766&quot;,&quot;@type&quot;:&quot;&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/career-areas/Career Areas - Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <picture class="loaded visible">
                                                    <source width="328" height="159">
                                                    <img src="/content/dam/company/us/en/careers/career-areas/Career Areas - Desktop.jpg" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="Career Areas" title="Career Areas">
                                                </picture>
                                                <meta itemprop="caption" content="Career Areas">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="teaser content-card"><a class="" id="teaser-related02-cta-related02" data-cmp-data-layer="{&quot;teaser-related02-cta-related02&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;Read More&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/life-at-coca-cola&quot;}}" data-cmp-clickable="" href="https://www.coca-colacompany.com/careers/life-at-coca-cola">
                                    <div id="teaser-related02" class="cmp-teaser" data-cmp-data-layer="{&quot;teaser-related02&quot;:{&quot;@type&quot;:&quot;cep/components/teaser&quot;,&quot;repo:modifyDate&quot;:&quot;1752344487528&quot;,&quot;dc:description&quot;:&quot;Life at Coca-Cola&quot;}}">
                                        <div class="cmp-teaser__content">
                                            <div class="cmp-teaser__title">
                                                <p>Life at Coca-Cola</p>
                                            </div>
                                            <div class="cmp-teaser__action-container">
                                                <p class="cmp-teaser__action-link">Read More</p>
                                            </div>
                                        </div>
                                        <div class="cmp-teaser__image">
                                            <div id="teaser-related02-image" data-cmp-data-layer="{&quot;teaser-related02-image&quot;:{&quot;@type&quot;:&quot;&quot;,&quot;repo:modifyDate&quot;:&quot;1752344487528&quot;,&quot;dc:title&quot;:&quot;&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;related02&quot;,&quot;repo:modifyDate&quot;:&quot;1752344487528&quot;,&quot;@type&quot;:&quot;&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/life-at-coca-cola/Life-at-Coca-Cola-Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <picture class="loaded visible">
                                                    <source width="767" height="389">
                                                    <img src="/content/dam/company/us/en/careers/life-at-coca-cola/Life-at-Coca-Cola-Desktop.jpg" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="Life at Coca-Cola" title="Life at Coca-Cola">
                                                </picture>
                                                <meta itemprop="caption" content="Life at Coca-Cola">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="teaser content-card"><a class="" id="teaser-related03-cta-related03" data-cmp-data-layer="{&quot;teaser-related03-cta-related03&quot;:{&quot;@type&quot;:&quot;cep/components/teaser/cta&quot;,&quot;dc:title&quot;:&quot;Read More&quot;,&quot;xdm:linkURL&quot;:&quot;/careers/career-areas/our-military-community&quot;}}" data-cmp-clickable="" href="https://www.coca-colacompany.com/careers/career-areas/our-military-community">
                                    <div id="teaser-related03" class="cmp-teaser" data-cmp-data-layer="{&quot;teaser-related03&quot;:{&quot;@type&quot;:&quot;cep/components/teaser&quot;,&quot;repo:modifyDate&quot;:&quot;1752291382279&quot;,&quot;dc:description&quot;:&quot;Military&quot;}}">
                                        <div class="cmp-teaser__content">
                                            <div class="cmp-teaser__title">
                                                <p>Military</p>
                                            </div>
                                            <div class="cmp-teaser__action-container">
                                                <p class="cmp-teaser__action-link">Read More</p>
                                            </div>
                                        </div>
                                        <div class="cmp-teaser__image">
                                            <div id="teaser-related03-image" data-cmp-data-layer="{&quot;teaser-related03-image&quot;:{&quot;@type&quot;:&quot;&quot;,&quot;repo:modifyDate&quot;:&quot;1752291382279&quot;,&quot;dc:title&quot;:&quot;&quot;,&quot;image&quot;:{&quot;repo:id&quot;:&quot;related03&quot;,&quot;repo:modifyDate&quot;:&quot;1752291382279&quot;,&quot;@type&quot;:&quot;&quot;,&quot;repo:path&quot;:&quot;/content/dam/company/us/en/careers/our-military-community/OurMilitaryCommunity-Desktop.jpg&quot;}}}" class="cmp-adaptive-image cmp-image" itemscope="" itemtype="http://schema.org/ImageObject">
                                                <picture class="loaded visible">
                                                    <source width="1200" height="609">
                                                    <img src="/content/dam/company/us/en/careers/our-military-community/OurMilitaryCommunity-Desktop.jpg" loading="lazy" class="cmp-image__image" itemprop="contentUrl" alt="Military" title="Military">
                                                </picture>
                                                <meta itemprop="caption" content="Military">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection