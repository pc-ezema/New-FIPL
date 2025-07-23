@extends('layouts.frontend', ['title' => 'Sustainability'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/home-page.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{url('assets/css/sustainability.min.css')}}" type="text/css">
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
                        <source media="(min-width: 991px)" srcset="{{url('assets/images/sustainability/banner.png')}}">
                        <source media="(min-width: 767px)" srcset="{{url('assets/images/sustainability/banner.png')}}">
                        <source media="(min-width: 0)" srcset="{{url('assets/images/sustainability/banner.png')}}">

                        <img class="bg img-responsive" src="{{url('assets/images/sustainability/banner.png')}}" alt="Sustainability">
                    </picture>

                    <div class="imageOverlayBnr"></div>

                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>Sustainability</span>
                                    <h1 class="heroHeading">
                                        <span>Driving the Growth of Agri-Industrial Hubs Across Africa</span>
                                        <span></span>
                                        <span></span>
                                    </h1>
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
                <section class="internal-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>Our Sustainability Commitment</h1>
                                <p>At the Food Industrial Park, sustainability is at the heart of what we do as we work to improve Africa's agricultural value chain. 
                                    We are dedicated to creating a system that supports food security, cares for the environment, and promotes economic prosperity for agrarian communities. 
                                    Our approach to sustainability focuses on three main areas: Environmental Responsibility, Social Impact, and Economic Viability.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="parallax aem-GridColumn aem-GridColumn--default--12">
                <section class="report-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1>The {{ config('app.name') }} Way</h1>
                                <p style="color:#1f1d5e; max-width:829px;"></p>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-12 offset-md-2">
                                <div class="row row-grid">
                                    <div class="col-md-4">
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front" style="background-image: url({{url('assets/images/sustainability/environmental-responsibility.png')}}); background-size: cover;">
                                                    <div class="operation-card">
                                                        <h5>Environmental Responsibility</h5>
                                                    </div>
                                                </div>
                                                <div class="flip-card-back" style="background-color:#a63993;">
                                                    <h4>Environmental Responsibility</h4>
                                                    <h3>At FIP, we focus on sustainable practices across every part of the agricultural and industrial value chain to reduce our environmental impact and use resources more efficiently. 
                                                        Some of our key efforts include regenerative farming that supports healthy soil and biodiversity through crop rotation and organic farming. We also prioritize water conservation by using advanced irrigation systems and rainwater harvesting. 
                                                        To reduce carbon emissions, we incorporate renewable energy sources like solar and biogas. Additionally, we manage waste responsibly by repurposing agricultural by-products to create natural herbicides and fertilizers for the crops, as well as feed for livestock.</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="flip-card flip-card-one">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front flip-card-front-one " style="background-image: url({{url('assets/images/sustainability/social-impact.png')}}); background-size: cover;">
                                                    <div class="operation-card-one">
                                                        <h5>Social Impact</h5>
                                                    </div>
                                                </div>
                                                <div class="flip-card-back backer" style="background-color:#4DB698;">
                                                    <h4>Social Impact</h4>
                                                    <h3 style="font-size:11px;">
                                                        Our social impact is helping communities grow and making sure everyone has fair opportunities. 
                                                        FIP supports farmers through our Farmers Engagement Programme by offering training, resources, 
                                                        and access to markets to enhance productivity. We also invest in developing people's skills through training programs in modern farming and agribusiness management. 
                                                        Our work in food security and nutrition helps improve supply chains and reduce food waste. Additionally, we support local communities by improving infrastructure, education, and health, making life better for everyone.
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="flip-card">
                                            <div class="flip-card-inner">
                                                <div class="flip-card-front" style="background-image: url({{url('assets/images/sustainability/economic-viability.png')}}); background-size: cover;">
                                                    <div class="operation-card">
                                                        <h5>Economic Viability</h5>
                                                    </div>
                                                </div>
                                                <div class="flip-card-back" style="background-color:#4DB698;">
                                                    <h4>Economic Viability</h4>
                                                    <h3>
                                                        For sustainability to last, it must be economically viable. We connect farmers, processors, distributors, and investors to optimize resources and maximize value. 
                                                        We use agri-tech and innovation, like smart farming, precision agriculture, and digital market access, to improve efficiency. 
                                                        Our sustainable investment models ensure that investments support large-scale agricultural projects that benefit both the economy and society. 
                                                        Additionally, we promote exports to make African agricultural products more competitive globally, boosting economic growth and earning foreign exchange.
                                                    </h3>
                                                </div>
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