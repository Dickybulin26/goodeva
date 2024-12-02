<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontGoodevaLp2Controller extends Controller

{

    // function to show home page
    public function home()
    {

        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'list_slider' => [
                        'slider1' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'Improvement begin with smarter process',
                            'text3' => 'Goodeva design, Automate, Optimize your business process more organize and efficient by empower Intelligence innovation',
                            'text_button' => 'Get Started',
                            'img_first' => 'goodeva-technology-iot-enterprise.png',
                        ],
                        'slider2' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'B2B Integrated Health & Safety Technology',
                            'text3' => 'Goodeva For Better Indonesian Wellness',
                            'text_button' => 'Get Started',
                            'img_first' => 'Goodeva-b2b-integrated-health-safety-technology-2.png',
                        ],
                        'slider3' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'Prevent Accidents Due to Fatigue',
                            'text3' => 'By using Goodeva Smart Safety',
                            'text_button' => 'Get Started',
                            'img_first' => 'Solusi-keselamatan-kerja-goodeva-technology-smart-safety-1.png',
                            'img_second' => 'Solusi-keselamatan-kerja-goodeva-technology-smart-safety-2.png',
                        ],
                        'slider4' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'Wearables and Apps Integration',
                            'text3' => 'The best fatigue detection application in Indonesia, Goodeva Smart Safety by Goodeva.',
                            'text_button' => 'Get Started',
                            'img_first' => 'goodeva-technology-integrasi-wearables-aplikasi-1.png',
                            'img_second' => 'goodeva-technology-integrasi-wearables-aplikasi-2.png',
                        ],
                    ],
                ],
                'section2' => [
                    'title' => 'Goodeva technology Ai & iOT Enterprise',
                    'text1' => 'Our flagship platform adopt artificial intelligence to serve better experience and help your business go beyond innovation',
                    'about_product' => [
                        'content1' => [
                            'cover' => "Group 18470.png",
                            'logo' => "logo-smart-safety.png",
                            'main_text' => "Digital Vaccines to Prevent Work Accidents",
                            'sub_text' => "Platform for safety + fatigue monitoring, Empowering artificial intelligence to Improve Safety, Efficiency and avoid accidents",
                            'button_text' => "Learn More",
                        ],
                        'content2' => [
                            'cover' => "dashboard-omsetku.png",
                            'logo' => "logo-omsetku.png",
                            'main_text' => "Sales Automation to Boost Your Business Profit",
                            'sub_text' => "Omsetku helps business increase their sales performance by adopting AI to drive sales growth and cost savings",
                            'button_text' => "Learn More",
                        ],
                    ],
                    'card_info' => [
                        'card1' => [
                            'title' => 'Smart Safety',
                            'description' => '<strong>Digital</strong> Safety & Fatigue platform to <strong>Prevent Worker Accidents</strong>',
                            'button_text' => "Learn More",
                            'cover' => "info-smart-safety.png",
                        ],
                        'card2' => [
                            'title' => 'Omsetku',
                            'description' => '<strong>an Apps to</strong> Increase Sales Growth and <strong>cost savings</strong>',
                            'button_text' => "Learn More",
                            'cover' => "info-omsetku.png",
                        ],
                        'card3' => [
                            'title' => 'Enterprise Services',
                            'description' => 'Handcraft <strong>Technology development services.</strong> optimize business process, systems and soultions for <strong>enterprise</strong> client.',
                            'button_text' => "Learn More",
                            'cover' => "info-enterprise.png",
                        ],
                    ],
                ],
                'section3' => [
                    'title' => 'Portfolio & Valued Client',
                    'img' => [],
                    'state_klien' => [
                        'state1' => [
                            'statement' => '"Goodeva has been proven to significantly reduce the number of workplace accidents and increase employee productivity."',
                            'name' => 'Iwan Gunawan',
                            'klien_from' => 'PT Kalimantan Prima Persada',
                            'picture' => 'image-iwan-gunawan-kpp.png',
                            'logo_company' => 'goodeva-kpp-logo.png',
                        ],
                        'state2' => [
                            'statement' => '"Goodeva helps us in turning our ideas & dreams into reality."',
                            'name' => 'Satya',
                            'klien_from' => 'PT Pamapersada Nusantara',
                            'picture' => 'testimoni-goodeva-satya.png',
                            'logo_company' => 'logo-pama-putih.png',
                        ],
                        'state3' => [
                            'statement' => '"With smart safety, it really helps us to reduce the incident rate due to fatigue."',
                            'name' => 'Angga Ardianto',
                            'klien_from' => 'PT Kalimantan Prima Persada',
                            'picture' => 'testimoni-goodeva-Angga.png',
                            'logo_company' => 'goodeva-kpp-logo.png',
                        ],
                        'state4' => [
                            'statement' => '"We enjoyed working with goodeva, very flexible in helping us."',
                            'name' => 'Oktavianto',
                            'klien_from' => 'PT Kalimantan Prima Persada',
                            'picture' => 'testimoni-goodeva-Oktavianto.png',
                            'logo_company' => 'goodeva-kpp-logo.png',
                        ],
                    ],
                ],
                'section4' => [
                    'title' => 'Media Highlight',
                ],
                'section5' => [
                    'title' => 'Enabling business transformation. <br> Accelerate now with Goodeva.',
                    'button_text' => 'Get Started',
                ],
            ],
            'indonesia' => [
                'section1' => [
                    'list_slider' => [
                        'slider1' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'Improvement begin with smarter process',
                            'text3' => 'Goodeva design, Automate, Optimize your business process more organize and efficient by empower Intelligence innovation',
                            'text_button' => 'Get Started',
                            'img_first' => 'goodeva-technology-iot-enterprise.png',
                        ],
                        'slider2' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'B2B Integrated Health & Safety Technology',
                            'text3' => 'Goodeva For Better Indonesian Wellness',
                            'text_button' => 'Get Started',
                            'img_first' => 'Goodeva-b2b-integrated-health-safety-technology-2.png',
                        ],
                        'slider3' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'Prevent Accidents Due to Fatigue',
                            'text3' => 'By using Goodeva Smart Safety',
                            'text_button' => 'Get Started',
                            'img_first' => 'Solusi-keselamatan-kerja-goodeva-technology-smart-safety-1.png',
                            'img_second' => 'Solusi-keselamatan-kerja-goodeva-technology-smart-safety-2.png',
                        ],
                        'slider4' => [
                            'text1' => 'Goodeva Technology',
                            'text2' => 'Wearables and Apps Integration',
                            'text3' => 'The best fatigue detection application in Indonesia, Goodeva Smart Safety by Goodeva.',
                            'text_button' => 'Get Started',
                            'img_first' => 'goodeva-technology-integrasi-wearables-aplikasi-1.png',
                            'img_second' => 'goodeva-technology-integrasi-wearables-aplikasi-2.png',
                        ],
                    ],
                ],
                'section2' => [
                    'title' => 'Goodeva technology Ai & iOT Enterprise',
                    'text1' => 'Our flagship platform adopt artificial intelligence to serve better experience and help your business go beyond innovation',
                    'about_product' => [
                        'content1' => [
                            'cover' => "Group 18470.png",
                            'logo' => "logo-smart-safety.png",
                            'main_text' => "Digital Vaccines to Prevent Work Accidents",
                            'sub_text' => "Platform for safety + fatigue monitoring, Empowering artificial intelligence to Improve Safety, Efficiency and avoid accidents",
                            'button_text' => "Learn More",
                        ],
                        'content2' => [
                            'cover' => "dashboard-omsetku.png",
                            'logo' => "logo-omsetku.png",
                            'main_text' => "Sales Automation to Boost Your Business Profit",
                            'sub_text' => "Omsetku helps business increase their sales performance by adopting AI to drive sales growth and cost savings",
                            'button_text' => "Learn More",
                        ],
                    ],
                    'card_info' => [
                        'card1' => [
                            'title' => 'Smart Safety',
                            'description' => '<strong>Digital</strong> Safety & Fatigue platform to <strong>Prevent Worker Accidents</strong>',
                            'button_text' => "Learn More",
                            'cover' => "info-smart-safety.png",
                        ],
                        'card2' => [
                            'title' => 'Omsetku',
                            'description' => '<strong>an Apps to</strong> Increase Sales Growth and <strong>cost savings</strong>',
                            'button_text' => "Learn More",
                            'cover' => "info-omsetku.png",
                        ],
                        'card3' => [
                            'title' => 'Enterprise Services',
                            'description' => 'Handcraft <strong>Technology development services.</strong> optimize business process, systems and soultions for <strong>enterprise</strong> client.',
                            'button_text' => "Learn More",
                            'cover' => "info-enterprise.png",
                        ],
                    ],
                ],
                'section3' => [
                    'title' => 'Portfolio & Valued Client',
                    'img' => [],
                    'state_klien' => [
                        'state1' => [
                            'statement' => '"Goodeva has been proven to significantly reduce the number of workplace accidents and increase employee productivity."',
                            'name' => 'Iwan Gunawan',
                            'klien_from' => 'PT Kalimantan Prima Persada',
                            'picture' => 'image-iwan-gunawan-kpp.png',
                            'logo_company' => 'goodeva-kpp-logo.png',
                        ],
                        'state2' => [
                            'statement' => '"Goodeva helps us in turning our ideas & dreams into reality."',
                            'name' => 'Satya',
                            'klien_from' => 'PT Pamapersada Nusantara',
                            'picture' => 'testimoni-goodeva-satya.png',
                            'logo_company' => 'logo-pama-putih.png',
                        ],
                        'state3' => [
                            'statement' => '"With smart safety, it really helps us to reduce the incident rate due to fatigue."',
                            'name' => 'Angga Ardianto',
                            'klien_from' => 'PT Kalimantan Prima Persada',
                            'picture' => 'testimoni-goodeva-Angga.png',
                            'logo_company' => 'goodeva-kpp-logo.png',
                        ],
                        'state4' => [
                            'statement' => '"We enjoyed working with goodeva, very flexible in helping us."',
                            'name' => 'Oktavianto',
                            'klien_from' => 'PT Kalimantan Prima Persada',
                            'picture' => 'testimoni-goodeva-Oktavianto.png',
                            'logo_company' => 'goodeva-kpp-logo.png',
                        ],
                    ],
                ],
                'section4' => [
                    'title' => 'Media Highlight',
                ],
                'section5' => [
                    'title' => 'Enabling business transformation. <br> Accelerate now with Goodeva.',
                    'button_text' => 'Get Started',
                ],
            ],
        ];

        return view('front-goodeva-lp/goodeva-home', compact(
            'text_lang',
            'default_lang',
        ));
    }


    // function to show goodeva smart safety page
    public function smartSafety()
    {

        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'Worker Fatigue monitoring <br> to Improve safety & productivity',
                    'name_product' => 'Smart Safety by Goodeva',
                    'description' => 'Goodeva is pioneer of fatigue management systems in Indonesia. <br> Our system is powered by advanced technology including artificial intelligence & iOT wearables Automation.',
                    'text1' => 'Start Trial',
                    'text2' => 'Whatsapp Us',
                ],
                'section2' => [
                    'title' => 'Partner technology of goodeva smart safety',
                ],
                'section3' => [
                    'name_product' => 'Goodeva Smart Safety',
                    'title' => 'Realize Zero Incident Fatigue <br> With iOT & Ai Goodeva',
                    'text1' => 'The future technology for the integration of work-worthiness data for all employees <br> obtained from iOT wearables is then processed with Ai and displayed on an integrated <br> platform to prevent work accidents.',
                    'image' => 'image-relize-zero-gss.png',
                    'background' => 'background-realize-zero.png',
                ],
                'section4' => [
                    'title' => 'Fatigue Management in Realtime <br> From Mobile & Dashboard',
                    'text1' => 'Future fatigue management with an integrated platform between applications and <br> dashboards to help optimize operational activities.',
                    'image' => 'image-fatigue-management.png',
                ],
                'section5' => [
                    'title' => 'Predict Fatigue. Intervene. <br> Get a 360º View of Fatigue Risk.',
                    'text1' => 'Supervisors and operators get warnings of impending fatigue for crew members, and can easily view heatmaps of impending risks.',
                    'image' => 'image-predict-fatigue.png',
                ],
                'section6' => [
                    'name_product' => 'Dashboard Smart Safety',
                    'title' => 'Open API, Customized, & Integrated Third-Party',
                    'text1' => 'Increase efficiency, productivity and business performance by integrating goodeva products <br> according to your business needs.',
                    'image' => 'image-dashboard-smart-safety-update3.png',
                ],
                'section7' => [
                    'text1' => 'Apps Feature',
                    'feature_product' => [
                        'content1' => [
                            'cover' => "smart-safety-sleep-monitoring.png",
                            'main_text' => "Fatigue & Sleep Monitoring",
                            'sub_text' => "Calculation of sleep data & automatic fatigue conditions accurately so as to identify employee fatigue early.",
                        ],
                        'content2' => [
                            'cover' => "smart-safety-digital-daily.png",
                            'main_text' => "Fatigue Analytics Chart",
                            'sub_text' => "Employee eligibility information is displayed in an easy-to-understand graph.",
                        ],
                        'content3' => [
                            'cover' => "smart-safety-analytics-chart.png",
                            'main_text' => "Digital Daily Fit To Work ",
                            'sub_text' => "Perform fit to work digitally through applications and integrated",
                        ],
                    ],
                ],
                'section8' => [
                    'title' => 'Smart Safety',
                    'main_text' => '5 Reasons Goodeva Smart Safety Technology is the Best Fatigue Prevention',
                    'sub_text' => 'Ensure that all employees are spared from fatigue and are ready to work with an integrated system.',
                    'list_reason' => [
                        'Proven to Reduce Fatigue Incidence',
                        'Fatigue All Operator Early Detection',
                        'Have Data History in the Event of an Incident',
                        'Reducing the Risk of Work Accidents',
                        'Complete Features & Integrated One Platform',
                    ],
                    'list_cover' => [
                        'image-5-reason-smart-safety.png',
                        'image-5-reason-smart-safety.png',
                        'image-5-reason-smart-safety.png',
                        'image-5-reason-smart-safety.png',
                        'image-5-reason-smart-safety.png',

                        // image random
                        // 'Goodeva-smart-safety-mining-dashboard.png',
                        // 'Alesan 2@2x.png',
                        // 'Goodeva-smart-safety-detail-dashboard.png',
                        // 'Alesan 4@2x.png',
                        // 'Goodeva-smart-safety-iot-dashboard.png',
                    ],
                ],
                'section9' => [
                    'title' => 'Why Smart Safety by Goodeva Is Different <br> With Fatigue Other Platforms',
                    'image' => 'image-why-smart-safety-update1.png',
                    'image_m' => 'image-why-smart-safety-mobile.png',
                ],
                'section10' => [
                    'title' => 'Has Been Implemented In The Mining Region Of Indonesia',
                    'text1' => 'Smart safety has been proven in various regions in Indonesia to help companies prevent work accidents <br> towards zero incidents with the help of technology.',
                    'image' => 'image-why-smart-safety-update1.png',
                    'list_implement' => [
                        'location1' => [
                            'regencies' => 'Palangkaraya',
                            'marker' => 'marker-palangkaraya.png',
                        ],
                        'location2' => [
                            'regencies' => 'Samarinda',
                            'marker' => 'marker-samarinda.png',
                        ],
                        'location3' => [
                            'regencies' => 'Banjarmasin',
                            'marker' => 'marker-banjarmasin.png',
                        ],
                        'location4' => [
                            'regencies' => 'Kutai',
                            'marker' => 'marker-kutai.png',
                        ],
                        'location5' => [
                            'regencies' => 'Sanggata',
                            'marker' => 'marker-sanggata.png',
                        ],
                        'location6' => [
                            'regencies' => 'Barito Utara',
                            'marker' => 'marker-barito-utara.png',
                        ],
                        'location7' => [
                            'regencies' => 'Barunang',
                            'marker' => 'marker-barunang.png',
                        ],
                        'location8' => [
                            'regencies' => 'Tenggarong',
                            'marker' => 'marker-tenggarong.png',
                        ],
                        'location9' => [
                            'regencies' => 'Lahat',
                            'marker' => 'marker-lahat.png',
                        ],
                        'location10' => [
                            'regencies' => 'Rantau',
                            'marker' => 'marker-rantau.png',
                        ],
                    ],
                    'markers' => [
                        [
                            'title' => 'Palangkaraya',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-palangkaraya-min.png'),
                            'location' => [
                                'lat' => doubleval(-2.2091929886054484),
                                'lng' => doubleval(113.90339210019229),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Palangkaraya',
                            ],
                        ],
                        [
                            'title' => 'Samarinda',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-samarinda-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.4966373366556332),
                                'lng' => doubleval(117.13981626318935),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Samarinda',
                            ],
                        ],
                        [
                            'title' => 'Banjarmasin',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-banjarmasin-min.png'),
                            'location' => [
                                'lat' => doubleval(-3.320819216629489),
                                'lng' => doubleval(114.59129430552277),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Banjarmasin',
                            ],
                        ],
                        [
                            'title' => 'Kutai',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-kutai-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.133212958666949),
                                'lng' => doubleval(116.47265032041868),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Kutai',
                            ],
                        ],
                        [
                            'title' => 'Sanggata',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-sanggata-min.png'),
                            'location' => [
                                'lat' => doubleval(0.49080575457465164),
                                'lng' => doubleval(117.53005939783637),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Sanggata',
                            ],
                        ],
                        [
                            'title' => 'Barito Utara',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-barito-utara-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.9991449842443106),
                                'lng' => doubleval(115.14391375806906),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Barito Utara',
                            ],
                        ],
                        [
                            'title' => 'Barunang',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-barunang-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.9948832975678524),
                                'lng' => doubleval(114.37903268051372),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Barunang',
                            ],
                        ],
                        [
                            'title' => 'Tenggarong',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-tenggarong-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.43303307360339327),
                                'lng' => doubleval(116.98935084427285),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Tenggarong',
                            ],
                        ],
                        [
                            'title' => 'Lahat',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-lahat-min.png'),
                            'location' => [
                                'lat' => doubleval(-3.785557003058416),
                                'lng' => doubleval(103.53975816666731),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Lahat',
                            ],
                        ],
                        [
                            'title' => 'Rantau',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-rantau-min.png'),
                            'location' => [
                                'lat' => doubleval(-2.9375718821969206),
                                'lng' => doubleval(115.14391116639007),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Rantau',
                            ],
                        ],
                    ],
                ],
                'section11' => [
                    'title' => 'Integrated Fatigue Prevention Technology With Complete Features',
                    'text1' => 'In addition to the features above, Smart Safety also has many safety features and other advantages <br> that make your company more advanced, modern & secure.',
                    'list_integrate' => [
                        'content1' => [
                            'image' => 'Integrated dashboard.svg',
                            'main_text' => 'Open API & Integrated Dashboard',
                            'sub_text' => 'Apps & Dashboard is already integrated and Open API.',
                        ],
                        'content2' => [
                            'image' => 'Historical sleep.svg',
                            'main_text' => 'Historical Fatigue Data',
                            'sub_text' => 'Easier & faster investigation with Historical fatigue data.',
                        ],
                        'content3' => [
                            'image' => 'Fatigue Alarm.svg',
                            'main_text' => 'KPI Performance Rating',
                            'sub_text' => 'Rating data on the operator has the highest performance.',
                        ],
                        'content4' => [
                            'image' => 'Custom Theme.svg',
                            'main_text' => 'Custom Apps & Dashboard',
                            'sub_text' => 'Custom smart health apps theme according to company identity.',
                        ],
                        'content5' => [
                            'image' => 'Historical fatigue report.svg',
                            'main_text' => 'Historical Data Export',
                            'sub_text' => 'Manage employee eligibility data easily with the export excel feature.',
                        ],
                        'content6' => [
                            'image' => 'Peringatan fatigue.svg',
                            'main_text' => 'Fatigue Alert',
                            'sub_text' => 'Displays employee data automatically indicating fatigue.',
                        ],
                        'content7' => [
                            'image' => 'integrated wearable.svg',
                            'main_text' => 'Integrated with wearables',
                            'sub_text' => 'Displays employee data automatically indicating fatigue.',
                        ],
                        'content8' => [
                            'image' => 'Customized is available.svg',
                            'main_text' => 'Whitelabel Services',
                            'sub_text' => 'Dashboard & Report can be customized as desired.',
                        ],
                    ],
                ],
                'section12' => [
                    'title' => 'Covered By',
                ],
                'section13' => [
                    'title' => 'Are You Ready To Realize Zero Incident?',
                    'text1' => 'Lower incidents of work accidents for better companies.',
                    'text_button1' => 'Trial Now',
                    'text_button2' => 'Whatsapp Us',
                ],
            ],
            'indonesia' => [],
        ];

        return view('front-goodeva-lp/goodeva-smart-safety', compact(
            'text_lang',
            'default_lang',
        ));
    }


    // function to show home page
    public function contact()
    {

        // $default_lang = 'indonesia';
        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'Cosultation with expert for Free',
                    'text1' => 'Let’s get in touch',
                    'text2' => 'Have an idea for digitalization innovation with technology to make business more effective & efficient.',
                    'input' => [
                        'input1' => 'Name',
                        'input2' => 'Email',
                        'input3' => 'Message',
                        'submit' => 'Send',
                    ],
                ],
                'section2' => [
                    'title' => 'Where To Find Us',
                    'card1' => [
                        'name' => 'Jakarta Holdings Rep. Office',
                        'address' => 'Gopi Holdings, <br> Gedung South Quarter, Tower A, Level-18, Jl. RA Kartini, <br> Cilandak - Jakarta Selatan 12430',
                        'email' => 'email  : sales@goodeva.co.id',
                        'office' => 'office : (021) 8273-8692',
                    ],
                    'card2' => [
                        'name' => 'Bekasi Office 1',
                        'address' => 'CIT Division, <br> Goodeva Building 1, Grand Galaxy Commercial RSK 6/15 Kota Bekasi',
                        'marketing' => 'Marketing (WA) : 0812-2234-036',
                        'email' => 'email  : sales@goodeva.co.id',
                    ],
                    'card3' => [
                        'name' => 'Bekasi Office 2',
                        'address' => 'CIT Division, <br> Goodeva Building 1, Grand Galaxy Commercial RSK 6/15 Kota Bekasi',
                        'marketing' => 'Marketing (WA) : 0812-2234-036',
                        'email' => 'email  : sales@goodeva.co.id',
                    ],
                ],
            ],
            'indonesia' => [
                'section1' => [
                    'title' => 'Kontak',
                    'text1' => 'Beritahu Kami Tentang Projectmu',
                    'text2' => 'Punya ide inovasi digitalisasi dengan teknologi agar bisnis lebih efektif & efisien, ayo kembangkan bisnis Anda bersama Goodeva.',
                    'input' => [
                        'input1' => 'Nama',
                        'input2' => 'Email',
                        'input3' => 'Pesan',
                        'submit' => 'Kirim',
                    ],
                ],
                'section2' => [
                    'title' => 'Dimana Menemukan Kami',
                    'card1' => [
                        'name' => 'Jakarta Holdings Rep. Office',
                        'address' => 'Gopi Holdings, <br> Gedung South Quarter, Tower A, Level-18, Jl. RA Kartini, <br> Cilandak - Jakarta Selatan 12430',
                        'email' => 'email  : sales@goodeva.co.id',
                        'office' => 'office : (021) 8273-8692',
                    ],
                    'card2' => [
                        'name' => 'Bekasi Office 1',
                        'address' => 'CIT Division, <br> Goodeva Building 1, Grand Galaxy Commercial RSK 6/15 Kota Bekasi',
                        'marketing' => 'Marketing (WA) : 0812-2234-036',
                        'email' => 'email  : sales@goodeva.co.id',
                    ],
                    'card3' => [
                        'name' => 'Bekasi Office 2',
                        'address' => 'CIT Division, <br> Goodeva Building 1, Grand Galaxy Commercial RSK 6/15 Kota Bekasi',
                        'marketing' => 'Marketing (WA) : 0812-2234-036',
                        'email' => 'email  : sales@goodeva.co.id',
                    ],
                ],
            ],
        ];

        return view('front-goodeva-lp/goodeva-contact', compact(
            'text_lang',
            'default_lang',
        ));
    }


    // function to show about page
    public function about()
    {

        // $default_lang = 'indonesia';
        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'We are <span class="color--signature font-w600">Goodeva</span> Ninja.',
                    'text1' => '<b>We are powered by the mind of innovation to go beyond digital transformation.</b><br> Goodeva has a philosophical meaning, which is a word connection that forms a GOOD-EVALUATION (GOOD-EVA) This deep philosophical value makes us committed to always delivering more and serving better quality services.',
                    'content1' => [
                        'main' => '2015',
                        'text' => 'Founded',
                    ],
                    'content2' => [
                        'main' => '250',
                        'text' => 'Project Handled',
                    ],
                    'content3' => [
                        'main' => '2018',
                        'text' => 'Established',
                    ],
                    'content4' => [
                        'main' => '4',
                        'text' => 'Products',
                    ],
                ],
                'section2' => [
                    'title' => '<b>Company</b> Journey',
                    'text1' => "Since 2015, Goodeva was founded to develop BigData, <br> Artifical Intelligence & iOT enterprise technology in Indonesia. <br> Follow Goodeva's journey as part of Indonesia's technology history.",
                    'timeline1' => [
                        'year' => '2015',
                        'text' => 'From a home idea, Gagoo technology was born',
                    ],
                    'timeline2' => [
                        'year' => '2016',
                        'text' => 'Gagoo technology changed its name to Goodeva technology',
                    ],
                    'timeline3' => [
                        'year' => '2017',
                        'text' => 'Goodeva cooperates with globaldeva goslar germany',
                    ],
                    'timeline4' => [
                        'year' => '2018',
                        'text' => 'The results of years of research gave birth to Ai & iOT smart safety products',
                    ],
                    'timeline5' => [
                        'year' => 'Now',
                        'text' => 'Goodeva iOT & Ai products have been used in almost all provinces in Indonesia',
                    ],
                ],
                'section3' => [
                    'title' => 'Core Competency',
                    'text1' => 'We develop professional digital services in automation, artificial intelligence, IoT  and enterprise Technology development.',
                    'list_content' => [
                        'Digital transformation for safety + fatigue monitoring, <br> Empowering artificial intelligence to Improve worker safety, <br> Efficiency and avoid accidents',
                        'Helps business increase their sales performance by adopting AI to drive sales growth and cost savings',
                        'We serve handcraft digital transformation for enterprise to aim their goals',
                    ],
                ],
                'section4' => [
                    'content1' => [
                        'title' => 'Core Value',
                        'main_point' => [
                            'Customer First',
                            'Good-Evaluation',
                        ],
                        'text1' => '<span class="font-w700">Customer First</span>. We are committed to delivering more than the requiements to serve you a better experience. Our core values of <span class="font-w700">Good-Evaluation</span> guide our actions to keep improving on every aspect that we serve to you.',
                    ],
                    'content2' => [
                        'title' => 'Vision',
                        'text1' => "Creating Innovation for helping business boost their profit by empowering the work of the nation's children",
                    ],
                    'content3' => [
                        'title' => 'Mission',
                        'list_mission' => [
                            'Driving a positive culture mindset to work faster, innovatively, optimistically, and evaluatively.',
                            'Endeavor to stay Creative, responsive, and on-time',
                            'The Quality focus for delivering better',
                            'Think differently to move laterally instead of linear',
                        ],
                    ],
                ],
                'section5' => [
                    'title' => 'Board of Management',
                    'content1' => [
                        'name' => 'Agustinus Putra',
                        'position' => 'CEO & Founder',
                        'cover' => '',
                    ],
                    'content2' => [
                        'name' => 'Anton Priyono',
                        'position' => 'Corp. Advisor  & Commissioner',
                        'cover' => '',
                    ],
                    'content1' => [
                        'name' => 'Brian A. Kusumo',
                        'position' => 'Chief Technology Officer',
                        'cover' => '',
                    ],
                    'content1' => [
                        'name' => 'Ignasius Triutomo',
                        'position' => 'VP Operation & Busdev',
                        'cover' => '',
                    ],
                ],
                'section6' => [
                    'title' => 'Board of Management',
                    'list_management' => [
                        [
                            'name' => 'Agustinus Putra',
                            'position' => 'CEO & Founder',
                            'cover' => 'img-pak-putra-ceo.png',
                            'description' => "Putra is Goodeva’s CEO, he is responsible for managing Goodeva and other Gopi holdings portfolio. He is responsible for the overall business and the main point of communication with key stakeholders, including investors, partners, customers, and the public. Over his career, Putra has already experienced managing multi-project of digital transformations within governance and national big companies in Indonesia. He earned his Master's Degree in Information Technology, from the Faculty of Computer Science at University of Indonesia.",
                        ],
                        [
                            'name' => 'Anton Priyono',
                            'position' => 'Corp. Advisor  & Commissioner',
                            'cover' => 'img-pak-anton-commissioner.png',
                            'description' => "Anton Priyono is Goodeva’s Corp. Advisor  & Commissioner, he is responsible for managing Goodeva and other Gopi holdings portfolio. He is responsible for the overall business and the main point of communication with key stakeholders, including investors, partners, customers, and the public. Over his career, Putra has already experienced managing multi-project of digital transformations within governance and national big companies in Indonesia. He earned his Master's Degree in Information Technology, from the Faculty of Computer Science at University of Indonesia.",
                        ],
                        [
                            'name' => 'Brian A. Kusumo',
                            'position' => 'Chief Technology Officer',
                            'cover' => 'img-pak-brian-cto.png',
                            'description' => "Brian is Goodeva’s Chief Technology Officer, he is responsible for managing Goodeva and other Gopi holdings portfolio. He is responsible for the overall business and the main point of communication with key stakeholders, including investors, partners, customers, and the public. Over his career, Putra has already experienced managing multi-project of digital transformations within governance and national big companies in Indonesia. He earned his Master's Degree in Information Technology, from the Faculty of Computer Science at University of Indonesia.",
                        ],
                        [
                            'name' => 'Ignasius Triutomo',
                            'position' => 'VP Operation & Busdev',
                            'cover' => 'img-pak-ignas-busdev.png',
                            'description' => "Ignasius is Goodeva’s VP Operation & Busdev, he is responsible for managing Goodeva and other Gopi holdings portfolio. He is responsible for the overall business and the main point of communication with key stakeholders, including investors, partners, customers, and the public. Over his career, Putra has already experienced managing multi-project of digital transformations within governance and national big companies in Indonesia. He earned his Master's Degree in Information Technology, from the Faculty of Computer Science at University of Indonesia.",
                        ],
                    ],
                    'image_all_team' => 'image-goodeva-all-team.png',
                ],
                'section7' => [],
                'section8' => [
                    'title' => 'Want to join with positive mind?',
                    'text1' => 'We’re hiring for some posistion, Check Link Below',
                    'text2' => 'See Vacancie’s',
                ],
            ],
            'indonesia' => [
                'section1' => [
                    'title' => 'We are <span class="color--signature font-w600">Goodeva</span> Ninja.',
                    'text1' => '<b>We are powered by the mind of innovation to go beyond digital transformation.</b><br> Goodeva has a philosophical meaning, which is a word connection that forms a GOOD-EVALUATION (GOOD-EVA) This deep philosophical value makes us committed to always delivering more and serving better quality services.',
                    'content1' => [
                        'main' => '2015',
                        'text' => 'Founded',
                    ],
                    'content2' => [
                        'main' => '250',
                        'text' => 'Project Handled',
                    ],
                    'content3' => [
                        'main' => '2018',
                        'text' => 'Established',
                    ],
                    'content4' => [
                        'main' => '4',
                        'text' => 'Products',
                    ],
                ],
                'section2' => [
                    'title' => '<b>Company</b> Journey',
                    'text1' => "Since 2015, Goodeva was founded to develop BigData, <br> Artifical Intelligence & iOT enterprise technology in Indonesia. <br> Follow Goodeva's journey as part of Indonesia's technology history.",
                    'timeline1' => [
                        'year' => '2015',
                        'text' => 'From a home idea, Gagoo technology was born',
                    ],
                    'timeline2' => [
                        'year' => '2016',
                        'text' => 'Gagoo technology changed its name to Goodeva technology',
                    ],
                    'timeline3' => [
                        'year' => '2017',
                        'text' => 'Goodeva cooperates with globaldeva goslar germany',
                    ],
                    'timeline4' => [
                        'year' => '2018',
                        'text' => 'The results of years of research gave birth to Ai & iOT smart safety products',
                    ],
                    'timeline5' => [
                        'year' => 'Now',
                        'text' => 'Goodeva iOT & Ai products have been used in almost all provinces in Indonesia',
                    ],
                ],
                'section3' => [
                    'title' => 'Core Competency',
                    'text1' => 'We develop professional digital services in automation, artificial intelligence, IoT  and enterprise Technology development.',
                    'list_content' => [
                        'Digital transformation for safety + fatigue monitoring, <br> Empowering artificial intelligence to Improve worker safety, <br> Efficiency and avoid accidents',
                        'Helps business increase their sales performance by adopting AI to drive sales growth and cost savings',
                        'We serve handcraft digital transformation for enterprise to aim their goals',
                    ],
                ],
                'section4' => [
                    'content1' => [
                        'title' => 'Core Value',
                        'main_point' => [
                            'Customer First',
                            'Good-Evaluation',
                        ],
                        'text1' => '<span class="color--signature font-w600">Customer First</span>. We are committed to delivering more than the requiements to serve you a better experience. Our core values of <span class="color--signature font-w600">Good-Evaluation</span> guide our actions to keep improving on every aspect that we serve to you.',
                    ],
                    'content2' => [
                        'title' => 'Vision',
                        'text1' => "Creating Innovation for helping business boost their profit by empowering the work of the nation's children",
                    ],
                    'content3' => [
                        'title' => 'Mission',
                        'list_mission' => [
                            'Driving a positive culture mindset to work faster, innovatively, optimistically, and evaluatively.',
                            'Endeavor to stay Creative, responsive, and on-time',
                            'The Quality focus for delivering better',
                            'Think differently to move laterally instead of linear',
                        ],
                    ],
                ],
                'section5' => [
                    'title' => 'Board of Management',
                    'content1' => [
                        'name' => 'Agustinus Putra',
                        'position' => 'CEO & Founder',
                        'cover' => '',
                    ],
                    'content2' => [
                        'name' => 'Anton Priyono',
                        'position' => 'Corp. Advisor  & Commissioner',
                        'cover' => '',
                    ],
                    'content1' => [
                        'name' => 'Brian A. Kusumo',
                        'position' => 'Chief Technology Officer',
                        'cover' => '',
                    ],
                    'content1' => [
                        'name' => 'Ignasius Triutomo',
                        'position' => 'VP Operation & Busdev',
                        'cover' => '',
                    ],
                ],
                'section6' => [],
                'section7' => [],
                'section8' => [
                    'title' => 'Want to join with positive mind?',
                    'text1' => 'We’re hiring for some posistion, Check Link Below',
                    'text2' => 'See Vacancie’s',
                ],
            ],
        ];

        return view('front-goodeva-lp/goodeva-about', compact(
            'text_lang',
            'default_lang',
        ));
    }


    //// function to show solution page
    public function solution()
    {

        // $default_lang = 'indonesia';
        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'Enabling Digital Transformation',
                    'text1' => 'At Goodeva Technology, we innovate for the future. <br> We empower proven tech to help your business stay forward within innovation. ',
                ],
                'section2' => [
                    'title' => 'The Partner who always delivers more ',
                    'text1' => 'Goodeva endeavor to create your business process more organized and efficient by representing the handcraft system to aim you reach your digital transformation goals. ',
                    'content1' => [
                        'name' => 'iOT with Artificial Intelligence',
                        'description' => 'We adopted new technology to integrate all data obtained from the connected device and process data with artificial intelligence',
                    ],
                    'content2' => [
                        'name' => 'Android & iOS development',
                        'description' => 'Turn ideas into reality with a powerful and customized Android-iOS application based on your business needs.',
                    ],
                    'content3' => [
                        'name' => 'Robotic Process Automation',
                        'description' => 'We Develop automation processes to improve your obsolete systems to be faster and more efficient with automated robotic system technology.',
                    ],
                    'content4' => [
                        'name' => 'Data Management',
                        'description' => 'Manage data and make better decisions based on valid data result to drive you to improve your business',
                    ]
                ],
                'section3' => [
                    'title' => 'Do you want to ask more?',
                    'description' => 'Consultation free with the expert of digital transformation. ',
                    'input' => [
                        'input1' => 'Name',
                        'input2' => 'Your Email',
                        'input3' => 'Your Message',
                        'submit' => 'Send message',
                    ],
                ],
            ],
            'indonesia' => [
                'section1' => [
                    'title' => 'Bangun Produk Lebih Baik Dengan Goodeva',
                    'text1' => 'Goodeva adalah perusahaan teknologi AI & iOT yang merencanakan dan mengembangkan aplikasi iOs,<br>Android, dan sistem berbasis web dengan menggabungkan teknologi dan data untuk mengubah ide menjadi kenyataan',
                ],
                'section2' => [
                    'title' => 'The Partner who always delivers more ',
                    'text1' => 'Goodeva endeavor to create your business process more organized and efficient by representing the handcraft system to aim you reach your digital transformation goals. ',
                    'content1' => [
                        'name' => 'iOT with Artificial Intelligence',
                        'description' => 'We adopted new technology to integrate all data obtained from the connected device and process data with artificial intelligence',
                    ],
                    'content2' => [
                        'name' => 'Android & iOS development',
                        'description' => 'Turn ideas into reality with a powerful and customized Android-iOS application based on your business needs.',
                    ],
                    'content3' => [
                        'name' => 'Robotic Process Automation',
                        'description' => 'We Develop automation processes to improve your obsolete systems to be faster and more efficient with automated robotic system technology.',
                    ],
                    'content4' => [
                        'name' => 'Data Management',
                        'description' => 'Manage data and make better decisions based on valid data result to drive you to improve your business',
                    ]
                ],
                'section3' => [
                    'title' => 'Do you want to ask more?',
                    'description' => 'Consultation free with the expert of digital transformation. ',
                    'input' => [
                        'input1' => 'Name',
                        'input2' => 'Your Email',
                        'input3' => 'Your Message',
                        'submit' => 'Send message',
                    ],
                ],
            ],
        ];

        return view('front-goodeva-lp/goodeva-solution', compact(
            'text_lang',
            'default_lang',
        ));
    }


    //// function to show career page
    public function career()
    {

        // $default_lang = 'indonesia';
        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'A <span style="font-weight: 600;">place</span> for those <span style="font-weight: bold;">who do things exceptionally</span> well',
                    'text1' => "Have an idea for digitalization innovation with technology to make business more effective & efficient, let's develop your business together with Goodeva.",
                    'text2' => "Find Jobs",
                ],
                'section2' => [
                    'title' => 'Why Join Us',
                    'text1' => 'Our culture would be great fit for those who share similar values. If how we do <br> things resonates with you, we welcome you to join us',
                    'content' => [
                        [
                            'title' => 'We embrace experimentation',
                            'description' => "No limits so you don't worry too much about losing data",
                            'icon' => "goodeva-We embrace experimentation.png",
                        ],
                        [
                            'title' => 'We reward achievements',
                            'description' => "No limits so you don't worry too much about losing data",
                            'icon' => "goodeva-We reward achievements.png",
                        ],
                        [
                            'title' => 'We foster respectful relationships',
                            'description' => "No limits so you don't worry too much about losing data",
                            'icon' => "goodeva-We foster respectful relationships.png",
                        ],
                    ],

                ],
                'section3' => [
                    'title' => 'Explore The Teams',
                    'text1' => 'Our culture would be great fit for those who share similar values. If how we do <br> things resonates with you, we welcome you to join us',
                    'list_job' => [
                        'job1' => [
                            'status' => 'Full Time',
                            'position' => 'Android Programmer',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-engineering.png',
                        ],
                        'job2' => [
                            'status' => 'Full Time',
                            'position' => 'IOS Programmer',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-business-development.png',
                        ],
                        'job3' => [
                            'status' => 'Full Time',
                            'position' => 'Sales Development',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-design-graphic.png',
                        ],
                        'job4' => [
                            'status' => 'Full Time',
                            'position' => 'UI/UX Designer',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-it-support.png?v=1',
                        ],
                        'job5' => [
                            'status' => 'Full Time',
                            'position' => 'Web Programmer',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-marketing-creative.png',
                        ],
                        'job6' => [
                            'status' => 'Full Time',
                            'position' => 'HR/GA Staff',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-data-analytics.png',
                        ],
                        'job7' => [
                            'status' => 'Full Time',
                            'position' => 'IT Support',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-engineering.png',
                        ],
                        'job8' => [
                            'status' => 'Full Time',
                            'position' => 'Graphic Designer',
                            'location' => 'Bekasi, Indonesia',
                            'icon' => 'goodeva-business-development.png',
                        ],
                    ],
                ],
                'section4' => [
                    'title' => 'Where to Find Us',
                    'text1' => 'Our culture will be very suitable for those who share the same values. If how do we do it? things resonate with you, we welcome you to join us',
                    'card1' => [
                        'name' => 'Goodeva Office 1',
                        'address' => 'Goodeva building 1, Grand Galaxy Commercial, Blok RSK 6/15 Jalan Boulevar Raya Timur, Kota Bekasi.',
                        'contact' => 'WhatsApp : <br> 081222-666-196',
                        'email' => 'email  : sales@goodeva.co.id',
                    ],
                    'card2' => [
                        'name' => 'Goodeva Office 2',
                        'address' => 'Goodeva building 2, Grand Galaxy Commercial, Blok RSK 6/17 Jalan Boulevar Raya Timur, Kota Bekasi.',
                        'contact' => 'WhatsApp : <br> 081222-666-196',
                        'email' => 'email  : sales@goodeva.co.id',
                    ],
                ],
            ],
            'indonesia' => [],
        ];

        return view('front-goodeva-lp/goodeva-career', compact(
            'text_lang',
            'default_lang',
        ));
    }



    // function Omsetku Goodeva Website
    public function Omsetku()
    {

        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'Boost Your Sales Performance <br> and Gain More Profit',
                    'name_product' => 'Goodeva Sales Automation',
                    'description' => 'Omsetku helps SME business increase their sales performance by adopting AI to drive sales growth and cost savings.',
                    'text1' => 'Start Trial',
                    'text2' => 'Whatsapp Us',
                ],
                'section2' => [
                    'title' => 'Partner technology of goodeva sales automation',
                ],
                'section3' => [
                    'name_product' => 'Goodeva Sales Automation',
                    'title' => 'Manage marketing & sales activity <br> enabling them to sell more',
                    'text1' => 'We serve advanced technology for integrating all sales data from devices from <br> customer data to sales data then processed with AI and displayed on an <br> integrated platform to help monitor sales sales activities.',
                    'text-res' => 'We serve advanced technology for integrating all sales data from devices from customer data to sales data then processed with AI and displayed on an integrated platform to help monitor sales sales activities.',
                    'image' => 'people-2.webp',
                    'background' => 'background-realize-zero.png',
                ],
                'section4' => [
                    'name_product' => 'Goodeva Sales Automation',
                    'title' => 'Monitor sales daily journey <br> & target real-time everywhere',
                    'text1' => 'Our system help business to possibly analyze sales worker with BigData, <br> we can analyze the behavior and push them to reach their selling target',
                    'text-res' => 'Our system help business to possibly analyze sales worker with BigData, we can analyze the behavior and push them to reach their selling target',
                    'image' => 'people-3-min.webp',
                ],
                'section5' => [
                    'name_product' => 'Goodeva Sales Automation',
                    'title' => '360 Degree customer & sales view',
                    'text1' => 'Proven technology for enabling SME reach their selling target <br> by empowering AI and intelligence dashboard analytics',
                    'text-res' => 'Proven technology for enabling SME reach their selling target by empowering AI and intelligence dashboard analytics',
                    'image' => 'dashboard.webp',
                    'image-res' => 'dashboard-res.webp',
                ],
                'section6' => [
                    'name_product' => 'Goodeva Sales Automation',
                    'title' => 'Integrate with your third party apps',
                    'text1' => 'We help you stay connected with your existing ERP & other third-party apps to <br> integrate data between new and existing systems.',
                    'image' => 'code-bg.webp',
                ],
                'section7' => [
                    'title' => 'Apps Features',
                    'text1' => 'Apps Feature',
                    'feature_product' => [
                        'content1' => [
                            'cover' => "phone-1.webp",
                            'main_text' => "Targeting Sales",
                            'sub_text' => "Setup a target for a group of sales, and you can track selling achievement in realtime in the apps.",
                        ],
                        'content2' => [
                            'cover' => "phone-2.webp",
                            'main_text' => "Customer Detail",
                            'sub_text' => "Record all customer data to be closer & familiar to increase customer satisfaction.",
                        ],
                        'content3' => [
                            'cover' => "phone-3.webp",
                            'main_text' => "Sales Commission",
                            'sub_text' => "No need to be confused anymore, with the commission feature you can manage sales commissions more easily.",
                        ],
                        'content4' => [
                            'cover' => "phone-4.webp",
                            'main_text' => "Expense Data",
                            'sub_text' => "This feature help you manage your sales expense and reimbursement more easy, fast, and integrated with your sales account.",
                        ],
                    ],
                ],
                'section8' => [
                    'main_text' => 'Why The Omsetku Can Help sales <br> to work more easy & efficient?',
                    'sub_text' => 'Start Increasing Your Sales With simple apps.',
                    'why_product' => [
                        'content1' => [
                            'icon' => "time-icon.png",
                            'main_text' => "Real Time Performance",
                            'sub_text' => "Performance reports from leads, team performance, to sales activity activities can be monitored in real-time.",
                        ],
                        'content2' => [
                            'icon' => "temp-icon.png",
                            'main_text' => "Customer Detail",
                            'sub_text' => "Record all customer data to be closer & familiar to increase customer satisfaction.",
                        ],
                        'content3' => [
                            'icon' => "task-icon.png",
                            'main_text' => "Sales Commission",
                            'sub_text' => "No need to be confused anymore, with the commission feature you can manage sales commissions more easily.",
                        ],
                    ],
                ],
                'section9' => [
                    'title' => 'Why Smart Safety by Goodeva Is Different <br> With Fatigue Other Platforms',
                    'image' => 'image-why-smart-safety-update1.png',
                    'image_m' => 'image-why-smart-safety-mobile.png',
                ],
                'section10' => [
                    'title' => 'Has Been Implemented In The Mining Region Of Indonesia',
                    'text1' => 'Smart safety has been proven in various regions in Indonesia to help companies prevent work accidents <br> towards zero incidents with the help of technology.',
                    'image' => 'image-why-smart-safety-update1.png',
                    'list_implement' => [
                        'location1' => [
                            'regencies' => 'Palangkaraya',
                            'marker' => 'marker-palangkaraya.png',
                        ],
                        'location2' => [
                            'regencies' => 'Samarinda',
                            'marker' => 'marker-samarinda.png',
                        ],
                        'location3' => [
                            'regencies' => 'Banjarmasin',
                            'marker' => 'marker-banjarmasin.png',
                        ],
                        'location4' => [
                            'regencies' => 'Kutai',
                            'marker' => 'marker-kutai.png',
                        ],
                        'location5' => [
                            'regencies' => 'Sanggata',
                            'marker' => 'marker-sanggata.png',
                        ],
                        'location6' => [
                            'regencies' => 'Barito Utara',
                            'marker' => 'marker-barito-utara.png',
                        ],
                        'location7' => [
                            'regencies' => 'Barunang',
                            'marker' => 'marker-barunang.png',
                        ],
                        'location8' => [
                            'regencies' => 'Tenggarong',
                            'marker' => 'marker-tenggarong.png',
                        ],
                        'location9' => [
                            'regencies' => 'Lahat',
                            'marker' => 'marker-lahat.png',
                        ],
                        'location10' => [
                            'regencies' => 'Rantau',
                            'marker' => 'marker-rantau.png',
                        ],
                    ],
                    'markers' => [
                        [
                            'title' => 'Palangkaraya',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-palangkaraya-min.png'),
                            'location' => [
                                'lat' => doubleval(-2.2091929886054484),
                                'lng' => doubleval(113.90339210019229),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Palangkaraya',
                            ],
                        ],
                        [
                            'title' => 'Samarinda',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-samarinda-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.4966373366556332),
                                'lng' => doubleval(117.13981626318935),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Samarinda',
                            ],
                        ],
                        [
                            'title' => 'Banjarmasin',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-banjarmasin-min.png'),
                            'location' => [
                                'lat' => doubleval(-3.320819216629489),
                                'lng' => doubleval(114.59129430552277),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Banjarmasin',
                            ],
                        ],
                        [
                            'title' => 'Kutai',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-kutai-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.133212958666949),
                                'lng' => doubleval(116.47265032041868),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Kutai',
                            ],
                        ],
                        [
                            'title' => 'Sanggata',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-sanggata-min.png'),
                            'location' => [
                                'lat' => doubleval(0.49080575457465164),
                                'lng' => doubleval(117.53005939783637),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Sanggata',
                            ],
                        ],
                        [
                            'title' => 'Barito Utara',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-barito-utara-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.9991449842443106),
                                'lng' => doubleval(115.14391375806906),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Barito Utara',
                            ],
                        ],
                        [
                            'title' => 'Barunang',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-barunang-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.9948832975678524),
                                'lng' => doubleval(114.37903268051372),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Barunang',
                            ],
                        ],
                        [
                            'title' => 'Tenggarong',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-tenggarong-min.png'),
                            'location' => [
                                'lat' => doubleval(-0.43303307360339327),
                                'lng' => doubleval(116.98935084427285),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Tenggarong',
                            ],
                        ],
                        [
                            'title' => 'Lahat',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-lahat-min.png'),
                            'location' => [
                                'lat' => doubleval(-3.785557003058416),
                                'lng' => doubleval(103.53975816666731),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Lahat',
                            ],
                        ],
                        [
                            'title' => 'Rantau',
                            'circle' => asset('public/asset-goodeva-lp/marker/marker-rantau-min.png'),
                            'location' => [
                                'lat' => doubleval(-2.9375718821969206),
                                'lng' => doubleval(115.14391116639007),
                            ],
                            'program' => [],
                            'informasi' => [
                                'regencies' => 'Rantau',
                            ],
                        ],
                    ],
                ],
                'section11' => [
                    'title' => 'Integrated Fatigue Prevention Technology With Complete Features',
                    'text1' => 'In addition to the features above, Smart Safety also has many safety features and other advantages <br> that make your company more advanced, modern & secure.',
                    'list_integrate' => [
                        'content1' => [
                            'image' => 'Integrated dashboard.svg',
                            'main_text' => 'Open API & Integrated Dashboard',
                            'sub_text' => 'Apps & Dashboard is already integrated and Open API.',
                        ],
                        'content2' => [
                            'image' => 'Historical sleep.svg',
                            'main_text' => 'Historical Fatigue Data',
                            'sub_text' => 'Easier & faster investigation with Historical fatigue data.',
                        ],
                        'content3' => [
                            'image' => 'Fatigue Alarm.svg',
                            'main_text' => 'KPI Performance Rating',
                            'sub_text' => 'Rating data on the operator has the highest performance.',
                        ],
                        'content4' => [
                            'image' => 'Custom Theme.svg',
                            'main_text' => 'Custom Apps & Dashboard',
                            'sub_text' => 'Custom smart health apps theme according to company identity.',
                        ],
                        'content5' => [
                            'image' => 'Historical fatigue report.svg',
                            'main_text' => 'Historical Data Export',
                            'sub_text' => 'Manage employee eligibility data easily with the export excel feature.',
                        ],
                        'content6' => [
                            'image' => 'Peringatan fatigue.svg',
                            'main_text' => 'Fatigue Alert',
                            'sub_text' => 'Displays employee data automatically indicating fatigue.',
                        ],
                        'content7' => [
                            'image' => 'integrated wearable.svg',
                            'main_text' => 'Integrated with wearables',
                            'sub_text' => 'Displays employee data automatically indicating fatigue.',
                        ],
                        'content8' => [
                            'image' => 'Customized is available.svg',
                            'main_text' => 'Whitelabel Services',
                            'sub_text' => 'Dashboard & Report can be customized as desired.',
                        ],
                    ],
                ],
                'section12' => [
                    'title' => 'Covered By',
                ],
                'section13' => [
                    'title' => 'Improve sales performance, boost profit.',
                    'text1' => 'Contact us for more information how we can help business achieve their revenue goals.',
                    'text_button1' => 'Trial Now',
                    'text_button2' => 'Whatsapp Us',
                ],
                'section14' => [
                    'text1' => 'CRM integration',
                    'feature_product' => [
                        'content1' => [
                            'cover' => "funnel.webp",
                            'main_text' => "All In One Solution  Bussiness Inteligence",
                            'sub_text' => "Our Apps help to collect and organized customer databases for reference of promotion decisions and marketing activity",
                        ],
                    ],
                ],
                'section15' => [
                    'text1' => 'CRM integration',
                    'feature_product' => [
                        'content1' => [
                            'cover' => "phone-hand-min.webp",
                            'main_text' => "Make Sales Orders, Quotations, & <br> Inovice Using Hp With Omsetku Apps!",
                            'sub_text' => "Enabling your sales to work more efficient to save cost and boost <br> your profit. Contact us now for more information.",
                        ],
                        'fill' => [
                            'content1' => [
                                'icon' => "icon-api.png",
                                'title' => "Open API & Integrated Dashboard",
                                'sub_title' => "Apps & Dashboard are integrated and Open API.",
                            ],
                            'content2' => [
                                'icon' => "custom-theme.png",
                                'title' => "Custom Theme Apps & Dashboard",
                                'sub_title' => "Custom themes according to business identity.",
                            ],
                            'content3' => [
                                'icon' => "icon-monitoring.png",
                                'title' => "Real Time Sales Monitoring",
                                'sub_title' => "Monitoring actual sales activity & Report.",
                            ],
                            'content4' => [
                                'icon' => "icon-reminder.png",
                                'title' => "Sales Reminders & Notifications",
                                'sub_title' => "Make reminders so you don't forget sales activities",
                            ],
                        ],
                    ],
                ],
            ],
            'indonesia' => [],
        ];

        return view('front-goodeva-lp/goodeva-omsetku', compact(
            'text_lang',
            'default_lang',
        ));
    }
}
