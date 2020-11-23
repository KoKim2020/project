<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
class PostController extends Controller
{

    public function __construct()
    {

        $this->middleware(['auth', 'verified'])->only('create');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "success";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $random = Str::random(8);
        return $random . '.'.'png';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'body' => 'required'
        ]);


        $body = $request->body;
        $images = $request->images;
        $post = [
            'body' => $body,
            'images' => $images
        ];
        $imgUrls = [];

        $p = new Post();
        $p->author_id = 1;
        $p->title = $request->title;
        $p->slug = Str::random(7);
        $p->featured = 1;


        foreach ($images as $key => $image) {
            $file_name = $this->create();

            Storage::put('public/images/' . $file_name, file_get_contents($image));
            $url = Storage::url('images/' . $file_name);
            array_push($imgUrls,  asset($url));
        }

    
        foreach ($images as $key => $image) {
             $post['body'] =  str_replace( $image, $imgUrls[$key] , $post['body']); // 1st search, 2 replace, 3 string
        }
        $p->body = $post['body'];

        $p->save();
        return "success";
    }

    /**
     * Display the Post Detail
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorFail($id);
        $post->load('tag');
        return view('post_detail', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get categories
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getCategory()
    {
        return Category::all();
    }
}
