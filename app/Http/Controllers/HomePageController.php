<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function index() 
    {
        return view('pages.index');
    }

    public function agriculture() 
    {
        return view('pages.business.agriculture');
    }

    public function food() 
    {
        return view('pages.business.food');
    }

    public function media() 
    {
        return view('pages.business.media');
    }

    public function realEstate() 
    {
        return view('pages.business.real-estate');
    }

    public function careers() 
    {
        return view('pages.careers');
    }

    public function contactUs() 
    {
        return view('pages.contactUs');
    }

    public function submit(Request $request)
    {
        // Honeypot check
        if (!empty($request->input('website'))) {
            return response()->json([
                'status' => 'error',
                'message' => 'Spam detected.'
            ], 403);
        }

        // Validate input
        $validator = Validator::make($request->all(), [
            'name'            => 'required|string|max:100',
            'email'           => 'required|email|max:150',
            'subject'         => 'nullable|string|max:150',
            'message'         => 'nullable|string|max:1000',
            'recaptcha_token' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Verify reCAPTCHA token
        $recaptchaSecret = env('RECAPTCHA_SECRET_KEY');
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => $recaptchaSecret,
            'response' => $request->recaptcha_token,
            'remoteip' => $request->ip(),
        ]);

        $recaptcha = $recaptchaResponse->json();
        if (!$recaptcha['success'] || $recaptcha['score'] < 0.5) {
            return response()->json([
                'status' => 'error',
                'message' => 'reCAPTCHA validation failed.'
            ], 403);
        }

        // Save to database or send email here...

        return response()->json([
            'status' => 'success',
            'message' => 'Thank you! Your message has been sent.'
        ]);
    }

    public function aboutUs() 
    {
        return view('pages.aboutUs');
    }

    public function vision() 
    {
        return view('pages.aboutUs.vision');
    }

    public function mission() 
    {
        return view('pages.aboutUs.mission');
    }

    public function coreValues() 
    {
        return view('pages.aboutUs.coreValues');
    }

    public function sustainability() 
    {
        return view('pages.sustainability');
    }

    public function strategicAlliance($companyName) 
    {
        $companies = [
            'nardus' => [
                'title' => 'Nardus Limited',
                'image' => 'assets/images/home/nardus-large.png',
                'caption' => 'Nardus',
                'description' => '<p><span class="mainPara">Nardus is a leading provider of premium essential oils, with over 700 farmers supporting our backward integration. We promote the cultivation of a variety of aromatic plants and herbs, such as Lemongrass, Basil, Thyme, Turmeric, and Ginger, processed with various techniques to produce high-quality essential oils.</span></p>',
                'link' => 'https://nardus.ng',
            ],
            'sano' => [
                'title' => 'Sano Foods Limited',
                'image' => 'assets/images/home/sano-foods-large.png',
                'caption' => 'Sano Foods',
                'description' => '<p><span class="mainPara">Sano Foods is Nigeria\'s leading producer of 100% organic foods and beverages under the FIP group. Sourcing directly from rural smallholder farmers, we process, package, and distribute healthy products that promote wellbeing and reduce health risks. With an exceptional in-house R&D team driving product development, our offerings range from fresh livestock and spices to healthy staples and teas. We are committed to improving consumers\' health through nutritious, organic options that complement modern lifestyles while supporting local agriculture.</span></p>',
                'link' => 'https://sanofoods.ng',
            ],
            'agricapital' => [
                'title' => 'Agricapital Limited',
                'image' => 'assets/images/home/agricapital-large.png',
                'caption' => 'Agricapital',
                'description' => '<p><span class="mainPara">Agricapital is a specialized financial services provider under the FIP group, dedicated to supporting Nigeria\'s agricultural sector through tailored financing solutions and comprehensive advisory services.</span></p>
                <p><span class="saltPara">We facilitate trade in agricultural commodities, helping farmers and agripreneurs access markets for their produce while ensuring traceability and compliance with quality standards. Their work includes supporting sustainable farming practices and connecting global resources to local agricultural opportunities.</span></p>
                <p><span class="saltPara">Our mission extends beyond financing to provide products and services that drive agricultural development across Nigeria, creating sustainable growth opportunities throughout the entire agricultural value chain.</span></p>',
                'link' => 'https://agricapital.ng',
            ],
            '4green' => [
                'title' => '4 Green Communication Limited',
                'image' => 'assets/images/home/4green-large.png',
                'caption' => '4 Green Communications',
                'description' => '<p><span class="mainPara">4 Green Communications serves as the creative media division of the FIP group, amplifying transformative initiatives through digital and traditional channels. We create engaging content that showcases the successes of food, agriculture, and real estate initiatives while keeping stakeholders informed and inspired.</span></p>
                <p><span class="saltPara">Through strategic media partnerships and cutting-edge communication technologies, we disseminate key insights and industry trends that drive collaborative growth. Our efforts foster transparency, build trust, and stimulate dialogue within the communities we serve.</span></p>
                <p><span class="saltPara">By blending creative storytelling with data-driven strategies, we elevate FIP\'s brand presence and contribute to a broader understanding of our mission. We remain committed to using media as a force for positive change, connecting people, ideas, and opportunities to drive sustainable development.</span></p>',
                'link' => 'https://4greencomms.com',
            ],
            'bcal' => [
                'title' => 'Bonum Consilium Africa Limited',
                'image' => 'assets/images/home/bonum-large.png',
                'caption' => 'BCAL',
                'description' => '<p><span class="mainPara">At BCAL, we address the rural housing deficit by developing affordable, sustainable homes tailored for farming communities. Our projects integrate energy-efficient designs and locally sourced materials to create comfortable living spaces that harmonize with agricultural lifestyles.​</span></p>
                <p><span class="saltPara">We offer flexible ownership models and streamlined acquisition processes, making quality housing accessible to farmers across a range of income levels. By simplifying financing and legal procedures, we empower agricultural families to secure homes that support their way of life.​</p>',
                'link' => 'https://bcal.ng',
            ],
            'rufec' => [
                'title' => 'Rufec Limited',
                'image' => 'assets/images/home/rufec-large.png',
                'caption' => 'RUFEC',
                'description' => '<p><span class="mainPara">At RUFEC, we are dedicated to enhancing agricultural productivity by providing high-quality organic fertilizers tailored to the needs of Nigerian farmers. Our products are designed to enrich soil health, boost crop yields, and promote sustainable farming practices across the region.​</span></p>
                <p><span class="saltPara">Strategically located in Abeokuta, Ogun State, RUFEC ensures the timely and efficient delivery of our fertilizers to farming communities. We prioritize customer satisfaction by offering expert guidance and support, helping farmers achieve optimal results and contribute to food security.</span></p>
                <p><span class="saltPara">By choosing RUFEC, farmers invest in eco-friendly solutions that not only enhance their harvests but also preserve the environment for future generations. We are committed to fostering a greener, more prosperous agricultural landscape in Nigeria.</span></p>',
                'link' => 'https://rufec.ng',
            ],
            'agropark' => [
                'title' => 'Agropark Development Limited',
                'image' => 'assets/images/home/agropark-large.png',
                'caption' => 'Agropark',
                'description' => '<p><span class="mainPara">At Agropark, we revolutionize agriculture by seamlessly integrating crop production, livestock management, and agro-processing within the FIP ecosystem. Our innovative approach unifies the entire supply chain, ensuring that every step from farm to table meets the highest standards of sustainability and quality.</span></p>
                <p><span class="saltPara">Agropark consistently sets new standards in agricultural efficiency and product quality. Our proven track record inspires confidence and demonstrates our unwavering dedication to driving the future of Nigeria\'s agricultural industry.</span></p>',
                'link' => 'https://agropark.ng',
            ],
            'agrihubtech' => [
                'title' => 'Agri-Hub Technologies Limited',
                'image' => 'assets/images/home/agri-tech-hub-large.png',
                'caption' => 'Agri-Hub Technologies',
                'description' => '<p><span class="mainPara">Agri-Hub Technologies Limited specializes in delivering advanced agricultural machinery alongside cutting-edge ICT solutions tailored for modern farming. Our flagship offerings include GREEVO, an innovative platform designed to enhance farm operations through real-time data analytics and intelligent insights.​</span></p>
                <p><span class="saltPara">Complementing GREEVO, our comprehensive farm accounting software simplifies financial management, enabling farmers to track expenses, manage budgets, and optimize resource allocation with ease. Additionally, our farm management applications provide tools for crop planning, field operations monitoring, and agronomic decision-making, all aimed at increasing productivity and sustainability.</span></p>
                <p><span class="saltPara">By integrating state-of-the-art machinery with intelligent software solutions, Agri-Hub Technologies empowers farmers to transition from traditional practices to data-driven agriculture, fostering efficiency, profitability, and long-term growth in the agricultural sector.</span></p>',
                'link' => 'https://agrihubtech.ng',
            ],
            'fagh' => [
                'title' => 'FAGH Herbal Remedies Limited',
                'image' => 'assets/images/home/fagh-large.png',
                'caption' => 'FAGH Herbal Remedies',
                'description' => '<p><span class="mainPara">At FAGH Herbal Remedies, we create drinks that blend traditional herbal knowledge with a modern twist. Our range features TAA-TAN Herbal Mix, Amaro Alcoholic Drink, and Massacara Gin—each crafted to deliver a balanced mix of flavor and natural goodness.</span></p>
                <p><span class="saltPara">We use carefully selected herbs and quality ingredients to craft beverages that not only taste great but also carry the legacy of time-tested traditions. Our products are made for people who appreciate genuine, down-to-earth quality in every drink.</span></p>
                <p><span class="saltPara">Taste the heritage and feel the quality in every sip, each one a true reflection of our passion for pure, authentic herbal remedies</span></p>',
                'link' => '#',
            ],
            'afbs' => [
                'title' => 'Agriculture and Food Business School',
                'image' => 'assets/images/home/afbs-large.png',
                'caption' => 'AFBS',
                'description' => '<p><span class="mainPara">Our mission at the AFBS is to provide high-quality education and hands-on training that combines agriculture, food production, and business. We prepare our students with real-world skills to thrive in these vital industries and contribute meaningfully to their communities.</span></p>
                <p><span class="saltPara">We focus on delivering programs that balance theory with practice. From farm management and food systems to business operations, students gain valuable experience through fieldwork, labs, and case-based learning. Our curriculum is designed to help learners understand the full journey—from soil to shelf—and develop the confidence to lead or launch their ventures.</span></p>
                <p><span class="saltPara">To ensure our students are job-ready, we maintain strong ties with farms, agribusinesses, food companies, and financial institutions. These partnerships keep our training current and connected to the real world. Whether you\'re a future student, a parent, an investor, or an industry partner, the Agriculture, Food and Business School is your gateway to a stronger, more sustainable future.</span></p>',
                'link' => '#',
            ],
        ];


        if (!isset($companies[$companyName])) {
            abort(404, 'Company not found');
        }

        $company = $companies[$companyName];

        return view('pages.strategicAlliance', compact('company'));
    }

    public function trainings() 
    {
        return view('pages.trainings');
    }

}
