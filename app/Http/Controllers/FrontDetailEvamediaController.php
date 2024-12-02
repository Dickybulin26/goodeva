<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class FrontDetailEvamediaController extends Controller
{
    public function detail($slug)
    {
        $default_lang = 'english';

        $text_lang = [
            'english' => [
                'section1' => [
                    'title' => 'stay insightful',
                    'description' => 'Discover stories, thinking, and expertise from writers on any topic.',
                    'text1' => 'Baca Sekarang',
                ],
                'section2' => [
                    "title" => "Trending di Evamedia",
                    "icon" => "trending.svg",
                    'trending_post' => [
                        "content1" => [
                            "profile_icon" => "Luka Bonisch.svg",
                            "title" => "The Problem You Think You Have Is Never the Real Problem",
                            "date" => "Nov 26 • 5 min read",
                        ],
                        "content2" => [
                            "profile_icon" => "Thomas Smith.svg",
                            "title" => "Did OpenAI Secretly Create a Brain-Like Intelligence After All?",
                            "date" => "Nov 26 • 5 min read",
                        ],
                        "content3" => [
                            "profile_icon" => "Kevin Chisholm.svg",
                            "title" => "What’s new in Flutter 3.16",
                            "date" => "Nov 15 • 14 min read",
                        ],
                        "content4" => [
                            "profile_icon" => "Carlos Arguelles.svg",
                            "title" => "My favorite coding question to give candidates",
                            "date" => "Nov 12 • 11 min read",
                        ],
                        "content5" => [
                            "profile_icon" => "dart.svg",
                            "title" => "Announcing Dart 3.2",
                            "date" => "Nov 15 • 6 min read",
                        ],
                        "content6" => [
                            "profile_icon" => "ux-collective.svg",
                            "title" => "Is technology harming our brains?",
                            "date" => "Nov 28 • 4 min read",
                        ],
                    ],
                ],
                "section3" => [
                    "title" => "Evamedia Content",
                    'evamedia_content' => [
                        "content1" => [
                            "profile_icon" => "Biz Stone.svg",
                            "title" => "The No Homework Policy",
                            "desc" => 'An early experience in making my own rules came when I entered high school. In the first weeks of my freshman year, I tried to do…',
                            'image' => "evamedia-img-content1.png",
                            "date" => "Nov 21 • 4 min read • ",
                            'category' => "High School",
                        ],
                        "content2" => [
                            "profile_icon" => "Jacqueline Dooley.svg",
                            "title" => "Sometimes The Cracks Get Too Big to Hold a Friendship Together",
                            "desc" => 'Why I’m letting a 40-year friendship go.',
                            'image' => "evamedia-img-content2.png",
                            "date" => "Nov 13 • 7 min read • ",
                            'category' => "Memoir",
                        ],
                        "content3" => [
                            "profile_icon" => "Jane Elliott PhD.svg",
                            "title" => "The Trouble With Teachability",
                            "desc" => 'Why solving for what’s easily explained winds up making things hard',
                            'image' => "evamedia-img-content3.png",
                            "date" => "Nov 23 • 6 min read • ",
                            'category' => "Psychology",
                        ],
                        "content4" => [
                            "profile_icon" => "Cameron Kruse.svg",
                            "title" => "Food Twin: Stress Testing the U.S. Food System",
                            "desc" => 'Today the Plotline, the food climate and data community organized by Earth Genome, is launching Food Twin, a proof of concept digit… twin…',
                            'image' => "evamedia-img-content4.png",
                            "date" => "Nov 16 • 8 min read • ",
                            'category' => "Climate Change",
                        ],
                        "content5" => [
                            "profile_icon" => "Pernoste & Dahl.svg",
                            "title" => "How to Read a Poem",
                            "desc" => 'For poets and non-poets',
                            'image' => "evamedia-img-content5.png",
                            "date" => "Nov 9 • 10 min read • ",
                            'category' => "Blog",
                        ],
                        "content6" => [
                            "profile_icon" => "Duane Valz.svg",
                            "title" => "The Corporate Governance Failure at the Heart of Sam Altman’s Ouster from OpenAI",
                            "desc" => 'In this piece I examine the flawed corporate structure of OpenAI, and the neglect of governance evolution during a year of immens… change',
                            'image' => "evamedia-img-content6.png",
                            "date" => "Nov 20 • 12 min read • ",
                            'category' => "Governance",
                        ],
                        "content7" => [
                            "profile_icon" => "Mike Grindle.svg",
                            "title" => "Frutiger Aero: When the Future Looked Optimistic",
                            "desc" => 'The 2000s design aesthetic that you forgot about',
                            'image' => "evamedia-img-content7.png",
                            "date" => "Nov 12 • 8 min read • ",
                            'category' => "Design",
                        ],
                        "content8" => [
                            "profile_icon" => "Jessicah Lahitou.svg",
                            "title" => "Being 40 with Beyoncé",
                            "desc" => 'Entering middle-age with Queen Bey in Toronto: highly recommend.',
                            'image' => "evamedia-img-content8.png",
                            "date" => "Oct 14 • 6 min read • ",
                            'category' => "Music",
                        ],
                        "content9" => [
                            "profile_icon" => "Ty Stephens.svg",
                            "title" => "From Punch Cards to ChatGPT",
                            "desc" => 'My Grandfather’s Glimpse into Generative AI',
                            'image' => "evamedia-img-content9.png",
                            "date" => "Nov 1 • 9 min read • ",
                            'category' => "ChatGPT",
                        ],
                        "content10" => [
                            "profile_icon" => "Vicki Tan.svg",
                            "title" => "The Long View",
                            "desc" => 'A metaphysical design framework to help us design better possible past/present/futures to create the human experience we… want, for all time',
                            'image' => "evamedia-img-content10.png",
                            "date" => "Nov 26 • 17 min read • ",
                            'category' => "Technology",
                        ],
                    ]
                ]
            ]
        ];

        $posts = Post::with(['category:id,category', 'authors:id,name,avatar'])->get();
        // $category = Category::with('posts')->get();

        // Iterasi setiap objek dalam $trendingPost
        foreach ($posts as $post) {
            // Memisahkan string tags menjadi array berdasarkan koma
            // $tagsArray = explode(',', $post->tags);

            // Mengganti nilai tags dengan array yang baru
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');
        }

        // dd($posts);

        return view('frontend/bs/evamedia/detail', compact('post', 'slug', ));
    }
}
