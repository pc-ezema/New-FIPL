@extends('layouts.frontend', ['title' => 'Careers'])

@push('styles')
<link rel="stylesheet" href="{{url('assets/css/information-type-1.min.css')}}" type="text/css">
@endpush

@push('scripts')
<script src="{{url('assets/javascript/information-type-1.min.js')}}"></script>
@endpush

@section('page-content')
<main>
    <div class="root responsivegrid">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="banner-video parbase aem-GridColumn aem-GridColumn--default--12">
                <section class="bannerSection mainSliderElem clickableDiv" anchorval="0">
                    <picture>
                        <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/Community_Environment_Desktop.JPG">
                        <source media="(min-width: 767px)" srcset="/content/dam/tata/images/communityLanding/tablet/Community_Environment_Tab.JPG">
                        <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/Community_Environment_Mobile.JPG">
                        <img class="bg img-responsive " src="/content/dam/tata/images/communityLanding/desktop/Community_Environment_Desktop.JPG" alt="Environmental protection is a priority for the Tata group">
                    </picture>

                    <video poster="" playsinline="" loop="" autoplay="autoplay" id="bannerVideo" muted="" desktopposter="/content/dam/tata/images/communityLanding/desktop/Community_Environment_Desktop.JPG" tabposter="/content/dam/tata/images/communityLanding/tablet/Community_Environment_Tab.JPG" mobilevideo="/content/dam/tata/videos/jaguar.mp4" mobileposter="/content/dam/tata/images/communityLanding/mobile/Community_Environment_Mobile.JPG" class="noDisplay">
                        <source src="" type="video/mp4">
                    </video>

                    <div class="imageOverlayBnr"></div>
                    <div class="heroForegrounds container fxblock">
                        <div class="heroHeadline">
                            <div class="sectionContent">
                                <div class="bannerHeading">
                                    <span>Strategic Alliance</span>
                                    <h1 class="heroHeading">
                                        <span>Our Strategic Alliance</span>
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
            <div id="nardus" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/Coral_Project_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/Coral_Project_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/Coral_Project_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/Coral_Project_Desktop_360x260.jpg" alt="Coral reef conservation">
                                </picture>
                                <span class="captionImg">NARDUS</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">Nardus Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Nardus is a leading provider of premium essential oils, with over 700 farmers supporting our backward integration. We promote the cultivation of a variety of aromatic plants and herbs, such as Lemongrass, Basil, Thyme, Turmeric, and Ginger, processed with various techniques to produce high-quality essential oils.</span> 
                                        <a href="https://nardus.ng" onclick="event.stopPropagation()" target="_blank" rel="noopener">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="sano" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataChem_BotanicalReserve_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataChem_BotanicalReserve_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                </picture>
                                <span class="captionImg">SANO FOODS</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">Sano Foods Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Sano Foods is Nigeria's leading producer of 100% organic foods and beverages under the FIPL group. Sourcing directly from rural smallholder farmers, we process, package, and distribute healthy products that promote wellbeing and reduce health risks. With an exceptional in-house R&D team driving product development, our offerings range from fresh livestock and spices to healthy staples and teas. We are committed to improving consumers' health through nutritious, organic options that complement modern lifestyles while supporting local agriculture.</span> 
                                        <a href="https://sanofoods.ng" onclick="event.stopPropagation()" target="_blank" rel="noopener">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="agricapital" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataMotorsWetlands_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataMotorsWetlands_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg" alt="Tata Motors' Wetland Habitat">
                                </picture>
                                <span class="captionImg">AGRICAPITAL</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">Agricapital Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Agricapital is a specialized financial services provider under the FIPL group, dedicated to supporting Nigeria's agricultural sector through tailored financing solutions and comprehensive advisory services.</span>
                                        <span class="infoFeedArticle">We facilitate trade in agricultural commodities, helping farmers and agripreneurs access markets for their produce while ensuring traceability and compliance with quality standards. Their work includes supporting sustainable farming practices and connecting global resources to local agricultural opportunities.</span>
                                        <span class="infoFeedArticle">Our mission extends beyond financing to provide products and services that drive agricultural development across Nigeria, creating sustainable growth opportunities throughout the entire agricultural value chain.</span>
                                        <a href="https://agricapital.ng" onclick="event.stopPropagation()" target="_self">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="4green" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataChem_BotanicalReserve_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataChem_BotanicalReserve_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                </picture>
                                <span class="captionImg">4 GREEN COMMUNICATION</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">4 Green Communication Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">4 Green Communications serves as the creative media division of the FIPL group, amplifying transformative initiatives through digital and traditional channels. We create engaging content that showcases the successes of food, agriculture, and real estate initiatives while keeping stakeholders informed and inspired.</span>
                                        <span class="infoFeedArticle">Through strategic media partnerships and cutting-edge communication technologies, we disseminate key insights and industry trends that drive collaborative growth. Our efforts foster transparency, build trust, and stimulate dialogue within the communities we serve.</span>
                                        <span class="infoFeedArticle">By blending creative storytelling with data-driven strategies, we elevate FIPL's brand presence and contribute to a broader understanding of our mission. We remain committed to using media as a force for positive change, connecting people, ideas, and opportunities to drive sustainable development.</span>
                                        <a href="https://4greencomms.com" onclick="event.stopPropagation()" target="_blank" rel="noopener">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="bcal" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataMotorsWetlands_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataMotorsWetlands_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg" alt="Tata Motors' Wetland Habitat">
                                </picture>
                                <span class="captionImg">BCAL</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">Bonum Consilium Africa Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">At BCAL, we address the rural housing deficit by developing affordable, sustainable homes tailored for farming communities. Our projects integrate energy-efficient designs and locally sourced materials to create comfortable living spaces that harmonize with agricultural lifestyles.​</span>
                                        <span class="infoFeedArticle">We offer flexible ownership models and streamlined acquisition processes, making quality housing accessible to farmers across various income levels. By simplifying financing and legal procedures, we empower agricultural families to secure homes that support their way of life.​</span>
                                        <a href="https://bcal.ng" onclick="event.stopPropagation()" target="_self">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="rufec" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataChem_BotanicalReserve_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataChem_BotanicalReserve_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                </picture>
                                <span class="captionImg">RUFEC</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">Rufec Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">At RUFEC, we are dedicated to enhancing agricultural productivity by providing high-quality organic fertilizers tailored to the needs of Nigerian farmers. Our products are designed to enrich soil health, boost crop yields, and promote sustainable farming practices across the region.​</span> 
                                        <span class="infoFeedArticle">Strategically located in Abeokuta, Ogun State, RUFEC ensures the timely and efficient delivery of our fertilizers to farming communities. We prioritize customer satisfaction by offering expert guidance and support, helping farmers achieve optimal results and contribute to food security.​​</span>
                                        <span class="infoFeedArticle">By choosing RUFEC, farmers invest in eco-friendly solutions that not only enhance their harvests but also preserve the environment for future generations. We are committed to fostering a greener, more prosperous agricultural landscape in Nigeria.</span>
                                        <a href="https://rufec.ng" onclick="event.stopPropagation()" target="_blank" rel="noopener">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="agropark" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataMotorsWetlands_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataMotorsWetlands_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg" alt="Tata Motors' Wetland Habitat">
                                </picture>
                                <span class="captionImg">AGROPARK</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">Agropark Development Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">At Agropark, we revolutionize agriculture by seamlessly integrating crop production, livestock management, and agro-processing within the FIPL ecosystem. Our innovative approach unifies the entire supply chain, ensuring that every step from farm to table meets the highest standards of sustainability and quality.</span>
                                        <span class="infoFeedArticle">Agropark consistently sets new standards in agricultural efficiency and product quality. Our proven track record inspires confidence and demonstrates our unwavering dedication to driving the future of Nigeria's agricultural industry.</span>
                                        <a href="https://agropark.ng" onclick="event.stopPropagation()" target="_self">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="agrihubtech" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataChem_BotanicalReserve_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataChem_BotanicalReserve_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                </picture>
                                <span class="captionImg">AGRI-HUB TECHNOLOGIES</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">Agri-Hub Technologies Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Agri-Hub Technologies Limited specializes in delivering advanced agricultural machinery alongside cutting-edge ICT solutions tailored for modern farming. Our flagship offerings include GREEVO, an innovative platform designed to enhance farm operations through real-time data analytics and intelligent insights.​</span> 
                                        <span class="infoFeedArticle">Complementing GREEVO, our comprehensive farm accounting software simplifies financial management, enabling farmers to track expenses, manage budgets, and optimize resource allocation with ease. Additionally, our farm management applications provide tools for crop planning, field operations monitoring, and agronomic decision-making, all aimed at increasing productivity and sustainability.</span>
                                        <span class="infoFeedArticle">By integrating state-of-the-art machinery with intelligent software solutions, Agri-Hub Technologies empowers farmers to transition from traditional practices to data-driven agriculture, fostering efficiency, profitability, and long-term growth in the agricultural sector.</span>
                                        <a href="https://agrihubtech.ng" onclick="event.stopPropagation()" target="_blank" rel="noopener">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="fagh" class="institutes-image-left aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection infoGrey customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataMotorsWetlands_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataMotorsWetlands_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataMotorsWetlands_Desktop_360x260.jpg" alt="Tata Motors' Wetland Habitat">
                                </picture>
                                <span class="captionImg">FAGH</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 contentSection">
                                <h3 class="infoHeading">FAGH Herbal Remedies Limited</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">At FAGH Herbal Remedies, we create drinks that blend traditional herbal knowledge with a modern twist. Our range features TAA-TAN Herbal Mix, Amaro Alcoholic Drink, and Massacara Gin—each crafted to deliver a balanced mix of flavor and natural goodness.</span>
                                        <span class="infoFeedArticle">We use carefully selected herbs and quality ingredients to craft beverages that not only taste great but also carry the legacy of time-tested traditions. Our products are made for people who appreciate genuine, down-to-earth quality in every drink.</span>
                                        <span class="infoFeedArticle">Taste the heritage and feel the quality in every sip, each one a true reflection of our passion for pure, authentic herbal remedies.</span>
                                        <a href="#" onclick="event.stopPropagation()" target="_self">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div id="afbs" class="institutes-image-right aem-GridColumn aem-GridColumn--default--12">
                <section class="saltStContentSection infoFoldSection customScroll noSlider">
                    <div class="container">
                        <div class="row headingP noMargin clickArea" onclick="CardClickable(event)">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right contentSection">
                                <picture>
                                    <source media="(min-width: 991px)" srcset="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                    <source media="(min-width: 575px)" srcset="/content/dam/tata/images/communityLanding/tablet/TataChem_BotanicalReserve_Tab_283x260.jpg">
                                    <source media="(min-width: 0)" srcset="/content/dam/tata/images/communityLanding/mobile/TataChem_BotanicalReserve_Mobile_290x240.jpg">
                                    <img class="img-responsive foldImg" src="/content/dam/tata/images/communityLanding/desktop/TataChem_BotanicalReserve_Desktop_360x260.jpg">
                                </picture>
                                <span class="captionImg">AFBS</span>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left contentSection">
                                <h3 class="infoHeading">Agriculture and Food Business School</h3>
                                <div class="infoContent">
                                    <div>
                                        <span class="infoFeedArticle">Our mission at the AFBS is to provide high-quality education and hands-on training that combines agriculture, food production, and business. We prepare our students with real-world skills to thrive in these vital industries and contribute meaningfully to their communities.​</span> 
                                        <span class="infoFeedArticle">We focus on delivering programs that balance theory with practice. From farm management and food systems to business operations, students gain valuable experience through fieldwork, labs, and case-based learning. Our curriculum is designed to help learners understand the full journey—from soil to shelf—and develop the confidence to lead or launch their ventures.</span>
                                        <span class="infoFeedArticle">To ensure our students are job-ready, we maintain strong ties with farms, agribusinesses, food companies, and financial institutions. These partnerships keep our training current and connected to the real world. Whether you're a future student, a parent, an investor, or an industry partner, the Agriculture, Food and Business School is your gateway to a stronger, more sustainable future.</span>
                                        <a href="#" onclick="event.stopPropagation()" target="_blank" rel="noopener">
                                            <img src="{{url('assets/images/Arrow_new.svg')}}" alt="Arrow" class="arrow">
                                        </a>
                                    </div>
                                    <div class="feedArticleBorder borderAnimCards comeInBorder"></div>
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