<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::where('category_id', 1)->orderBy('created_at', 'DESC')->get();
        return view('home', [
            'posts' => $posts,
        ]);
    }

    /**
     * view coming soon page
     */

    public function comingSoon () {
        return view('coming_soon');
    }
}
