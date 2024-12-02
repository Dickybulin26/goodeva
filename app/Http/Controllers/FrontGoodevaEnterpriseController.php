<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontGoodevaEnterpriseController extends Controller

{

  // function to show goodeva enterprise page
  public function GoodevaEnterprise(Request $request)
  {

    $c = $request->input('c');

    $default_lang = 'english';

    $text_lang = [
        'english' => [
            'section1' => [
                'title' => 'Your Enteprise Solution',
                'name_product' => 'Goodeva',
                'description' => 'Goodeva Enteprise is a professional and creative graphic design partner, providing the best visual solution to improve your brand identity.',
                'text1' => 'Get Started',
                'text2' => 'Whatsapp Us',
            ],
            'section4' => [
                'title' => 'Portfolio and Client',
                'subtitle' => 'Join with 24 Company Local Indonesia & International',
            ],
            'section3' => [
                'name_product' => 'Goodeva Enterprise',
                'title' => 'The Our Finished Project For Client',
                'text1' => 'Explore our project portfolios. We are proud to present our work results that reflect the dedication of innovative designs and Proffesional quality',                           
            ],                                
            'section7' => [
                'title' => 'Enabling business transformation. Accelerate now with Goodeva.',
                'text1' => 'Contact us for more information how we can help business achieve their revenue goals.',
                'text_button1' => 'Trial Now',
                'text_button2' => 'Whatsapp Us',
            ],
            'section2' => [
                'text1' => 'CRM integration',
                'feature_product' => [                  
                    'fill' => [
                        'content1' => [
                            'icon' => "fitur-iot.png",
                            'title' => "<span>iOT with Artificial Intelligence</span>",
                            'sub_title' => "Adopted new technology to integrate all data obtained from the connected device.",
                        ],                        
                        'content2' => [
                            'icon' => "fitur-android-ios.png",
                            'title' => "<span>Android & iOS development</span>",
                            'sub_title' => "Turn ideas into reality with a powerful and customized Android-iOS apps.",
                        ],                        
                        'content3' => [
                            'icon' => "fitur-robotic.png",
                            'title' => "<span>Robotic Process Automation</span>",
                            'sub_title' => "Develop automation processes to improve your obsolete systems to be faster.",
                        ],                        
                        'content4' => [
                            'icon' => "fitur-data-management.png",
                            'title' => "<span>Data Management</span>",
                            'sub_title' => "Manage data and make better decisions based on valid data result.",
                        ],                        
                    ],
                ],
            ],
            'section5' => [
                'fiturs' => [
                    'fitur1' => [
                        'title' => 'LKPP',
                        'desc' => 'Integrated and web-based national inpassing system for LKPP.',
                        'picture' => 'lkpp-goodeva-bg.png',
                        'logo' => 'lkpp-goodeva-logo.svg',
                        'slug' => 'lkpp',
                    ],
                    'fitur2' => [
                        'title' => 'B20 Council Platform',
                        'desc' => 'The B20 is an international business forum composed of representatives from the G20 business community, serving as a platform for dialogue between global business leaders.',
                        'picture' => 'b20-goodeva-bg.png',
                        'logo' => 'b20-goodeva-logo.svg',
                        'slug' => 'b20',
                    ],
                    'fitur3' => [
                        'title' => 'ASEAN',
                        'desc' => 'Develop and implement a standalone LMS that can be accessed by all member countries.',
                        'picture' => 'asean-goodeva-bg.png',
                        'logo' => 'asean-goodeva-logo.svg',
                        'slug' => 'asean',
                    ],
                    'fitur4' => [
                        'title' => 'Kementrian Pertanian',
                        'desc' => 'Special web platform for palm oil monitoring to integrate data from various sources so that it is easy to access.',
                        'picture' => 'kementan-goodeva-bg.png',
                        'logo' => 'kementan-goodeva-logo.svg',
                        'slug' => 'pertanian',
                    ],
                    'fitur5' => [
                        'title' => 'Kadin Indonesia',
                        'desc' => 'Integrated vaccination management system for Mutual Cooperation Vaccination needs.',
                        'picture' => 'kadin-goodeva-bg.png',
                        'logo' => 'kadin-goodeva-logo.svg',
                        'slug' => 'kadin',
                    ],
                    'fitur6' => [
                        'title' => 'UNDP',
                        'desc' => 'This system will integrate data from various sources into a platform that is easy to access and analyze.',
                        'picture' => 'undp-goodeva-bg.png',
                        'logo' => 'undp-goodeva-logo.svg',
                        'slug' => 'undp',
                    ],
                ],
            ],
        ],
        'indonesia' => [],
    ];
    

    return view('frontend/bs/enterprise', compact(
      'text_lang',
      'default_lang',
      'c',
    ));
  }

}
