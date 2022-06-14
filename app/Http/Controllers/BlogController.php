<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function getSingle($slug){
        // fatch from the database based slug
        $post = Post::where('slug','=',$slug)->first();

        // return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
