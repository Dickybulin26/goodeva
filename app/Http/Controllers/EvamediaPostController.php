<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EvamediaPostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['category:id,category', 'authors:id,name,avatar'])->get();
        $category = Category::with('posts')->get();

        // Iterasi setiap objek dalam $trendingPost
        foreach ($posts as $post) {
            // Memisahkan string tags menjadi array berdasarkan koma
            $tagsArray = explode(',', $post->tags);

            // Mengganti nilai tags dengan array yang baru
            $post->tags = $tagsArray;
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');

        }

        return response()->json(compact('posts', 'category'), 200);
    }

    public function store(request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'title' => 'required|unique:posts',
            'tags' => 'required',
            'publisher' => 'nullable',
            'description' => 'nullable',
            'news_content' => 'required',
            'category_id' => 'required',
            'author' => 'required',
        ]);

        if ($request->file) {
            $fileName = $this->generateRandomString();
            $extension = $request->file->extension();
            $image = $fileName . '.' . $extension;

            Storage::disk('public')->putFileAs('evamediaAPI', $request->file, $image);
        }

        $request['image'] = $request->file ? $image : null;

        // $image = "data:image/png;base64," . base64_encode(file_get_contents($request->file('file')->path()));

        $tags = implode(',', $request->tags);

        $slug = Str::of($request->title)->slug('-');
        // $slug = strtolower($slug);

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->publisher = $request->publisher;
        $post->description = $request->description;
        $post->news_content = $request->news_content;
        $post->category_id = $request->category_id;
        $post->author = $request->author;
        $post->image = $image;
        $post->tags = $tags;

        $post->save();

        return response()->json(['message' => 'Post Created Successfully'], 201);
    }


    public function trendingPost()
    {
        $trendingPost = Post::orderBy('click_count', 'DESC')->take(6)->with(['category:id,category', 'authors:id,name,avatar'])->get();

        // Iterasi setiap objek dalam $trendingPost
        foreach ($trendingPost as $post) {
            // Memisahkan string tags menjadi array berdasarkan koma
            $tagsArray = explode(',', $post->tags);

            // Mengganti nilai tags dengan array yang baru
            // $post->addClick();
            $post->tags = $tagsArray;
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');
        }


        return response()->json(array('data' => $trendingPost), 200);
    }


    public function latestPost()
    {
        $latestPost = Post::orderBy('created_at', 'DESC')->take(10)->with(['category:id,category', 'authors:id,name,avatar'])->get();

        foreach ($latestPost as $post) {

            $post->news_content = substr($post->news_content, 0, 150) . '...';
            $tagsArray = explode(',', $post->tags);
            $post->tags = $tagsArray;
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');
        }

        return response()->json(array('data' => $latestPost), 200);
    }


    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    //? fungsi untuk menampilkan detail post
    public function detailPost($slug)
    {
        $post = Post::where('slug', $slug)
            ->with(['category:id,category', 'authors:id,name,avatar'])->first();

        //* if post exist
        if (isset($post)) {
            $post->addClick();
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');

            return response()->json($post, 200);
        }

        return response()->json(['message' => 'Post Not Found'], 404);
    }

    //* fungsi untuk mencari post berdasarkan title
    public function searchPost(Request $request)
    {
        $search = $request->input('search');

        $results = Post::where('title', 'like', '%' . $search . '%')
            ->with(['category:id,category', 'authors:id,name,avatar'])->get();

        foreach ($results as $post) {
            $post->news_content = substr($post->news_content, 0, 150) . '...';
            $tagsArray = explode(',', $post->tags);
            $post->tags = $tagsArray;
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');
        }

        return view('frontend/bs/evamedia/search', compact('results', 'search'));
    }


    //? fungsi untuk menampilkan rekomendasi post di halaman detail news
    public function recomendationPost($slug)
    {
        $currentPost = Post::where('slug', $slug)->first();

        $recomendation = Post::where('category_id', $currentPost->category_id)
            ->where('id', '!=', $currentPost->id)
            ->orderBy('category_id', 'DESC')
            ->orderBy('click_count', 'ASC')
            ->take(6)->with(['category:id,category', 'authors:id,name,avatar'])->get();

        foreach ($recomendation as $post) {
            $post->news_content = substr($post->news_content, 0, 150) . '...';
            $tagsArray = explode(',', $post->tags);
            $post->tags = $tagsArray;
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');
        }

        return response()->json(array('data' => $recomendation), 200);
    }


    // ? fungsi untuk menampilkan post dari category yang click_count terbanyak
    public function getPostByCategory($category_id)
    {
        $posts = Post::where('category_id', $category_id)
            ->orderBy('click_count', 'desc')
            ->with(['category:id,category', 'authors:id,name,avatar'])->get();

        foreach ($posts as $post) {

            $post->news_content = substr($post->news_content, 0, 150) . '...';
            $tagsArray = explode(',', $post->tags);
            $post->tags = $tagsArray;
            $post->timediff = $post->updated_at->diffForHumans();
            $post->date = $post->updated_at->format('d M');
        }

        return response()->json(array('data' => $posts), 200);
    }

}
