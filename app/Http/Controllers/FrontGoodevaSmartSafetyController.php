<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontGoodevaSmartSafetyController extends Controller
{

    // function to show goodeva smart safety page
    public function smartSafety()
    {

        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'Smart Safety',
                    'name_product' => 'Goodeva',
                    'description' => 'Omsetku helps SME business increase their sales performance by adopting AI to drive sales growth and cost savings.',
                    'text1' => 'Get Started',
                    'text2' => 'Whatsapp Us',
                ],
                'section2' => [
                    'title' => 'Portfolio and Client',
                    'subtitle' => 'Implemented on more than 15 sites throughout Indonesia',
                ],
                'section3' => [
                    'name_product' => 'Goodeva Smart Safety',
                    'title' => 'Goodeva Smart Safety Realize Zero Incident Fatigue With iOT & Ai Goodeva',
                    'text1' => 'The future technology for the integration of work worthiness data for all employees obtained from iOT wearables is then processed with Ai',
                    'text-res' => 'The future technology for the integration of work worthiness data for all employees obtained from iOT wearables is then processed with Ai',
                    'image' => 'people-2.webp',
                    'background' => 'background-realize-zero.png',
                    'image1' => 'gss-1.png',
                    'image2' => 'gss-2.png',
                    'image3' => 'gss-3.png',
                    'image4' => 'gss-m.png',

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
                            'cover' => "fatigue-management.png",
                            'cover_m' => "fatigue-management-m.png",
                            'main_text' => "Fatigue Management in Realtime From Mobile & Dashboard",
                            'sub_text' => "Future fatigue management with an integrated platform between applications and dashboards to help optimize operational activities.",
                        ],
                        'content2' => [
                            'cover' => "predict-fatigue.png",
                            'cover_m' => "predict-fatigue.png",
                            'main_text' => "Predict Fatigue. Intervene Get a 360º View of Fatigue Risk.",
                            'sub_text' => "Supervisors and operators get warnings of impending fatigue for crew members, and can easily view heatmaps of impending risks..",
                        ],
                        'content3' => [
                            'cover' => "open-api.png",
                            'cover_m' => "open-api.png",
                            'main_text' => "Open API, Customized, & Integrated Third-Party",
                            'sub_text' => "Increase efficiency, productivity and business performance by integrating goodeva products according to your business needs.",
                        ]
                    ],
                ],
                'section8' => [
                    'main_text' => '5 Reasons Goodeva Smartsafety Technology is the Best Fatigue Prevention',
                    'sub_text' => 'Ensure that all employees are spared from fatigue and are ready to work with an integrated system.',
                    'img' => 'why-smartsafety.png',
                    'why_product' => [
                        'content1' => [
                            'icon' => "time-icon.png",
                            'main_text' => "Proven to reduce fatigue incident",
                            'sub_text' => "Performance reports from leads, team performance, to sales activity activities can be monitored in real-time.",
                        ],
                        'content2' => [
                            'icon' => "temp-icon.png",
                            'main_text' => "Fatigue all operator early detection",
                            'sub_text' => "Record all customer data to be closer & familiar to increase customer satisfaction.",
                        ],
                        'content3' => [
                            'icon' => "task-icon.png",
                            'main_text' => "Have data history in the event of an incident",
                            'sub_text' => "No need to be confused anymore, with the commission feature you can manage sales commissions more easily.",
                        ],
                        'content4' => [
                            'icon' => "task-icon.png",
                            'main_text' => "Complete features & integrated one platform",
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
                    'title' => 'Are You Ready To Realize Zero Incident?',
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
                            'main_text' => "Integrated Fatigue Prevention Technology With Complete Features",
                            'sub_text' => "In addition to the features above, Smartsafety also has many safety features and other advantagesthat make your company more advanced, modern & secure.",
                        ],
                        'fill' => [
                            'content1' => [
                                'icon' => "fitur-api.png",
                                'title' => "Open API & <span> Integrated </span> Dashboard",
                                'sub_title' => "Apps & Dashboard is already integrated and Open API.",
                            ],
                            'content2' => [
                                'icon' => "fitur-realtime.png",
                                'title' => "<span>Historical</span> Fatigue Data",
                                'sub_title' => "Easier & faster investigation with Historical fatigue data.",
                            ],
                            'content3' => [
                                'icon' => "fitur-kpi.png",
                                'title' => "KPI <span>Performance</span> Rating Sales",
                                'sub_title' => "Rating data on the operator has the highest performance.",
                            ],
                            'content4' => [
                                'icon' => "fitur-custom.png",
                                'title' => "<span>Custom Apps</span> & Dashboard",
                                'sub_title' => "Custom smart health apps theme according to company identity.",
                            ],
                            'content5' => [
                                'icon' => "fitur-export.png",
                                'title' => "<span>Historical</span> Data Export",
                                'sub_title' => "Manage employee eligibility data easily with the export excel feature.",
                            ],
                            'content6' => [
                                'icon' => "fitur-alert.png",
                                'title' => "<span>Fatigue</span> <br> Alert",
                                'sub_title' => "Displays employee data automatically indicating fatigue.",
                            ],
                            'content7' => [
                                'icon' => "fitur-integrated.png",
                                'title' => "<span>Integrated</span> with wearables",
                                'sub_title' => "Displays employee data automatically indicating fatigue.",
                            ],
                            'content8' => [
                                'icon' => "fitur-whitelabel.png",
                                'title' => "<span>Whitelabel</span> Services",
                                'sub_title' => "Dashboard & Report can be customized as desired.",
                            ],
                        ],
                    ],
                ],
                'section16' => [
                    'main_text' => 'Use Smartsafety to reduce fatigue in your workplace',
                    'sub_text' => 'Smartsafety has been proven in various regions in Indonesia.',
                    'faq' => [
                        [
                            'main_text' => "What is Smartsafety?",
                            'sub_text' => "Smartsafety is a fatigue prevention system using IoT and wearable technology, specifically designed to measure employees' sleep hours and ensure they are fit to work.",
                        ],
                        [
                            'main_text' => "How Smartsafety works?",
                            'sub_text' => "Smartsafety works by recording sleep hours through wearables and sending the sleep data to a dashboard for monitoring by the technical team.",
                        ],
                        [
                            'main_text' => "What are the benefits of using Smartsafety for companies?",
                            'sub_text' => "<ul>
                                                <li>Prevents fatigue-related accidents</li>
                                                <li>Improves employees' rest behavior</li>
                                                <li>Decreases employee productivity</li>
                                                <li>Monitors sleep adequacy</li>
                                                <li>Ensures employees are fit to work</li>
                                            </ul>",
                        ],
                        [
                            'main_text' => "Can Smartsafety be integrated with the company's system?",
                            'sub_text' => "Yes, because Smartsafety uses an open API, it can be integrated with other systems within the company.",
                        ],
                        [
                            'main_text' => "How to install Smartsafety in a work environment?",
                            'sub_text' =>   "<ul>
                                                <li>Register your wearable device in the Smartsafety system</li>
                                                <li>Install the Smartsafety app on your phone</li>
                                                <li>Connect your wearable device to the app</li>
                                                <li>Once connected, Smartsafety is ready to use</li>
                                            </ul>",
                        ],
                        [
                            'main_text' => "How to order Smartsafety service?",
                            'sub_text' => "You can contact our sales team to learn more about Smartsafety and place an order.",
                        ],
                    ],
                ],
                'section17' => [
                    'fiturs' => [
                        'fitur1' => [
                            'title' => 'Fatigue & Sleep Monitoring',
                            'desc' => 'Calculation of sleep data & automatic fatigue conditions accurately so as to identify employee fatigue early.',
                            'picture' => 'slider-1-sleep-monitoring.png',
                        ],
                        'fitur2' => [
                            'title' => 'Fatigue & Sleep Monitoring',
                            'desc' => 'Perform fit to work digitally through applications and integrated.',
                            'picture' => 'slider-2-sleep-monitoring.jpg',
                        ],
                        'fitur3' => [
                            'title' => 'Fatigue Analytic Chart',
                            'desc' => 'Employee eligibility information is displayed in an easy-to-understand graph.',
                            'picture' => 'slider-3-fatigue-analytic.jpg',
                        ],
                    ],
                ],
            ],
            'indonesia' => [],
        ];

        return view('frontend/bs/smartsafety', compact(
            'text_lang',
            'default_lang',
        ));
    }

}
