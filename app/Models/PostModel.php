<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class PostModel
{
    private static $data_post = [
        [
            "title" => "LKPP",
            "description" => "Integrated and web-based national inpassing system for LKPP",
            "post_logo" => "/assets/img/news/Logo_lkpp 2.png",
            "post_img" => "/assets/img/news/lkpp.png",
            "post_class" => "lkpp",
        ],
        [
            "title" => "B20 Council Platform",
            "description" => "The B20 is an international business
                            forum composed of representatives from the G20 business community,
                            serving as a platform for dialogue between global business leaders",
            "post_logo" => "/assets/img/news/logo-b20.png",
            "post_img" => "/assets/img/news/b20-indonesia.png",
            "post_class" => "b20",
        ],
        [
            "title" => "ASEAN",
            "description" => "Develop and implement a standalone LMS that can be accessed by all member countries",
            "post_logo" => "/assets/img/news/asean-goodeva.png",
            "post_img" => "/assets/img/news/asean.png",
            "post_class" => "asean",
        ],
        [
            "title" => "Kementrian Pertanian",
            "description" => "Special web platform for palm oil
                            monitoring to integrate data from various sources so that it is easy to access",
            "post_logo" => "/assets/img/news/logo-pertanian.png",
            "post_img" => "/assets/img/news/pertanian.png",
            "post_class" => "pertanian",
        ],
        [
            "title" => "Kadin Indonesia",
            "description" => "Integrated vaccination management system for Mutual Cooperation Vaccination needs",
            "post_logo" => "/assets/img/news/kadin-logo 1.png",
            "post_img" => "/assets/img/news/vaccination.png",
            "post_class" => "kadin",
        ],
        [
            "title" => "UNDP",
            "description" => "This system will integrate data from various sources into a platform that is easy to access and analyze",
            "post_logo" => "/assets/img/news/undp-logo.png",
            "post_img" => "/assets/img/news/undp2.png",
            "post_class" => "undp",
        ],
    ];

    public static function getAllData(){
        return self::$data_post;
    }
}
