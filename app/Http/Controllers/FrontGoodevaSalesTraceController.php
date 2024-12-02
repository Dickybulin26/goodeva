<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontGoodevaSalesTraceController extends Controller
{


    // function Omsetku Goodeva Website
    public function salesTrace()
    {

        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'Salestrace',
                    'name_product' => 'Goodeva',
                    'description' => 'Omsetku helps SME business increase their sales performance by adopting AI to drive sales growth and cost savings.',
                    'text1' => 'Get Started',
                    'text2' => 'Whatsapp Us',
                ],
                'section2' => [
                    'title' => 'Portfolio and Client',
                    'subtitle' => 'Join with 24 Company Local Indonesia & International',
                ],
                'section3' => [
                    'name_product' => 'Goodeva Sales Automation',
                    'title' => 'Accelerate sales performance & monitor sales with the Salestrace',
                    'text1' => 'The Salestrace App makes it easier for businesses to monitor sales performance which can be done anywhere and anytime, and makes the business more optimal',
                    'text-res' => 'We serve advanced technology for integrating all sales data from devices from customer data to sales data then processed with AI',
                    'image' => 'people-2.webp',
                    'background' => 'background-realize-zero.png',
                    'image1' => 'manage-marketing-1.png',
                    'image2' => 'manage-marketing-2.png',
                    'image3' => 'manage-marketing-3.png'
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
                            'cover' => "manage-marketing.png",
                            'cover_m' => "manage-marketing-m.svg",
                            'main_text' => "Manage marketing & sales activity enabling them to sell more",
                            'sub_text' => "We serve advanced technology for integrating all sales data from devices from customer data to sales data then processed with AI and displayed on an integrated platform to help monitor sales sales activities.",
                        ],
                        'content2' => [
                            'cover' => "monitor-sales.png",
                            'cover_m' => "monitor-sales.png",
                            'main_text' => "Monitor sales daily journey & target real-time everywhere",
                            'sub_text' => "Our system help business to possibly analyze sales worker with BigData, we can analyze the behavior and push them to reach their selling target.",
                        ],
                        'content3' => [
                            'cover' => "sales-view.png",
                            'cover_m' => "sales-view.png",
                            'main_text' => "360 Degree customer & sales view",
                            'sub_text' => "Proven technology for enabling SME reach their selling target by empowering AI and intelligence dashboard analytics.",
                        ],
                        'content4' => [
                            'cover' => "all-in-one-solution.png",
                            'cover_m' => "all-in-one-solution.png",
                            'main_text' => "All In One Solution Bussiness Inteligence",
                            'sub_text' => "Our system help business to possibly analyze sales worker with BigData, we can analyze the behavior and push them to reach their selling target.",
                        ],
                        'content5' => [
                            'cover' => "integrate-third-party.png",
                            'cover_m' => "integrate-third-party.png",
                            'main_text' => "Integrate with your third party apps",
                            'sub_text' => "We help you stay connected with your existing ERP & other third-party apps to integrate data between new and existing systems.",
                        ],
                    ],
                ],
                'section8' => [
                    'main_text' => 'Why The Salestrace Can Help sales to work more easy & efficient?',
                    'sub_text' => 'Start Increasing Your Sales With simple apps.',
                    'img' => 'why-salestrace.png',
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
                    'title' => 'Goodeva Has Been Covered by the Media',
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
                            'main_text' => "Make Sales Orders, Quotations, & Invoice Using Hp With Salestrace Apps!",
                            'sub_text' => "Enabling your sales to work more efficient to save cost and boost your profit. Contact us now for more information.",
                        ],
                        'fill' => [
                            'content1' => [
                                'icon' => "fitur-api.png",
                                'title' => "Open API & <span> Integrated </span> Dashboard",
                                'sub_title' => "Apps & Dashboard are integrated and Open API.",
                            ],
                            'content2' => [
                                'icon' => "fitur-realtime.png",
                                'title' => "Real Time <span>Sales</span> Monitoring",
                                'sub_title' => "Monitoring actual sales activity & Report.",
                            ],
                            'content3' => [
                                'icon' => "fitur-reminder.png",
                                'title' => "Sales <span>Reminders</span> & Notifications",
                                'sub_title' => "Make reminders so you don't forget sales activities",
                            ],
                            'content4' => [
                                'icon' => "fitur-custom.png",
                                'title' => "<span>Custom Apps</span> & Dashboard",
                                'sub_title' => "Custom themes according to business identity.",
                            ],
                        ],
                    ],
                ],
                'section16' => [
                    'main_text' => 'Use smart sales for your sales automation and help your sales',
                    'sub_text' => 'Salestrace helps SME business increase their sales performance by adopting AI to drive sales growth and cost savings.',
                    'faq' => [
                        [
                            'main_text' => "What is the Salestrace application?",
                            'sub_text' => "Sales Trace is a CRM application that helps businesses and salespeople work more automatically and efficiently.",
                        ],
                        [
                            'main_text' => "How do I start using the Salestrace application?",
                            'sub_text' => "To use Sales Trace, you can register on our website, then download the app for free from the App Store or Play Store.",
                        ],
                        [
                            'main_text' => "What are the main features available in the Salestrace application?",
                            'sub_text' => "Monitor sales performance, including CRM functions, customer analysis, financial reports, quotations, sales orders, and invoices, Track sales targets",
                        ],
                        [
                            'main_text' => "Is the Salestrace application available for free?",
                            'sub_text' => "The Sales Trace app is free to download, but access to a Sales Trace account requires a paid subscription.",
                        ],
                        [
                            'main_text' => "Is my business data safe on the Salestrace application?",
                            'sub_text' => "Yes, we guarantee that your data is secure with Sales Trace.",
                        ],
                        [
                            'main_text' => "How can i get help if i have problems with the Salestrace Apps?",
                            'sub_text' => "If you encounter any issues with the Sales Trace app, you can contact our support team via the app or reach out to our team via WhatsApp through our website.",
                        ],
                    ],
                ],
                'section17' => [
                    'fiturs' => [
                        'fitur1' => [
                            'title' => 'Targeting Sales',
                            'desc' => 'Setup a target for a group of sales, and you can track selling achievement in realtime in the apps.',
                            'picture' => 'slider-1-target.png',
                        ]
                    ],
                ],
            ],
            'indonesia' => [],
        ];

        return view('frontend/bs/salestrace', compact(
            'text_lang',
            'default_lang',
        ));
    }
}
