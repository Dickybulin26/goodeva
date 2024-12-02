<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Mail;

use Session;



class FrontHomeRevampController extends Controller

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
              'text2' => 'Transforming Global Technology',
              'text3' => 'Global Innovation Partner Technology',
              'text_button' => 'Get Started',
              'img_first' => 'transforming-global-technology-1.png',
              'img_second' => 'transforming-global-technology-2.png',
              'code' => 'transforming-1'
            ],
            'slider2' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Wearables and Apps Integration',
              'text3' => 'The best fatigue detection application in Indonesia, Goodeva Smart Safety by Goodeva.',
              'text_button' => 'Get Started',
              'img_first' => 'wearables-and-apps-integration-1.png',
              'img_second' => 'wearables-and-apps-integration-2.png',
              'code' => 'wearable_apps'
            ],
            'slider3' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Prevent Accidents Due to Fatigue',
              'text3' => 'By using Goodeva Smart Safety',
              'text_button' => 'Get Started',
              'img_first' => 'prevent-accidents-due-to-fatigue-1.png',
              'img_second' => 'prevent-accidents-due-to-fatigue-2.png',
              'code' => 'prevent_accident'
            ],
            
            'slider4' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Deliver More Than Requirement',
              'text3' => 'Customized, First Hand, On Time, & On Budget',
              'text_button' => 'Get Started',
              'img_first' => 'goodeva-technology-iot-enterprise.png',
              'code' => 'deliver_more'
            ],
          ],
        ],
        'section2' => [
          'title' => 'Goodeva technology Ai & iOT Enterprise',
          'text1' => 'Our flagship platform adopt artificial intelligence to serve better experience and help your business go beyond innovation',
          'about_product' => [
            'content1' => [
              'cover' => "smart-safety.png",
              'logo' => "logo-smart-safety.png",
              'main_text' => "Digital Vaccines to Prevent Work Accidents",
              'sub_text' => "Platform for safety + fatigue monitoring, Empowering artificial intelligence to Improve Safety, Efficiency and avoid accidents.",
              'button_text' => "Learn More",
            ],
            'content2' => [
              'cover' => "sales-trace.png",
              'logo' => "logo-sales-trace.png",
              'main_text' => "Sales Automation to Boost Your Business Profit",
              'sub_text' => "Salestrace helps business increase their sales performance by adopting AI to drive sales growth and cost savings.",
              'button_text' => "Learn More",
            ],
            'content3' => [
              'cover' => "goodeva-enterprise.png",
              'cover_mobile' => "goodeva-enterprise-mobile.png",
              'logo' => "logo-goodeva-enterprise.png",
              'main_text' => "The solution improving business processes",
              'sub_text' => "Handcraft Technology development services. optimize business process, systems and solutions for enterprise client.",
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
          'title' => 'Enabling business transformation. <br> Accelerate now with <b>Goodeva</b>.',
          'button_text' => 'Get Started',
        ],
      ],
      'indonesia' => [
        'section1' => [
          'list_slider' => [
            'slider1' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Deliver More Than Requirement',
              'text3' => 'Customized, First Hand, On Time, & On Budget',
              'text_button' => 'Get Started',
              'img_first' => 'goodeva-technology-iot-enterprise.png',
              'code' => 'deliver_more'
            ],
            'slider2' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Wearables and Apps Integration',
              'text3' => 'The best fatigue detection application in Indonesia, Goodeva Smart Safety by Goodeva.',
              'text_button' => 'Get Started',
              'img_first' => 'wearables-and-apps-integration-1.png',
              'img_second' => 'wearables-and-apps-integration-2.png',
              'code' => 'wearable_apps'
            ],
            'slider3' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Prevent Accidents Due to Fatigue',
              'text3' => 'By using Goodeva Smart Safety',
              'text_button' => 'Get Started',
              'img_first' => 'prevent-accidents-due-to-fatigue-1.png',
              'img_second' => 'prevent-accidents-due-to-fatigue-2.png',
              'code' => 'prevent_accident'
            ],
            'slider4' => [
              'text1' => 'Goodeva Technology',
              'text2' => 'Transforming Global Technology',
              'text3' => 'Global Innovation Partner Technology',
              'text_button' => 'Get Started',
              'img_first' => 'transforming-global-technology-1.png',
              'img_second' => 'transforming-global-technology-2.png',
              'code' => 'transforming-1'
            ]
          ],
        ],
        'section2' => [
          'title' => 'Goodeva technology Ai & iOT Enterprise',
          'text1' => 'Our flagship platform adopt artificial intelligence to serve better experience and help your business go beyond innovation',
          'about_product' => [
           'content1' => [
              'cover' => "smart-safety.png",
              'logo' => "logo-smart-safety.png",
              'main_text' => "Digital Vaccines to Prevent Work Accidents",
              'sub_text' => "Platform for safety + fatigue monitoring, Empowering artificial intelligence to Improve Safety, Efficiency and avoid accidents.",
              'button_text' => "Learn More",
            ],
            'content2' => [
              'cover' => "sales-trace.png",
              'logo' => "logo-sales-trace.png",
              'main_text' => "Sales Automation to Boost Your Business Profit",
              'sub_text' => "Salestrace helps business increase their sales performance by adopting AI to drive sales growth and cost savings.",
              'button_text' => "Learn More",
            ],
            'content3' => [
              'cover' => "goodeva-enterprise.svg",
              'logo' => "logo-goodeva-enterprise.png",
              'main_text' => "The solution improving business processes",
              'sub_text' => "Handcraft Technology development services. optimize business process, systems and solutions for enterprise client.",
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
          'title' => 'Enabling business transformation. <br> Accelerate now with <b>Goodeva</b>.',
          'button_text' => 'Get Started',
        ],
      ],
    ];

    return view('frontend/bs/home', compact(
      'text_lang',
      'default_lang',
    ));
  }
}
