<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PagesController extends Controller
{
    public function getIndex(){
        $posts = Post::orderBy('created_at','desc')->limit(4)->get();
        // dd($posts);
        return view('pages.welcome')->withPosts($posts);

    }
    public function getAbout(){
        $first = 'ramesh';
        $last = 'baduwal';
        $fullname = $first ." ".  $last;
        $address = 'bhalka 02, lamki-chuha, kailali';
        $email = 'ramesh@gmail.com';
        $data= [];
        $data['fullname'] = $fullname;
        $data['address'] = $address;
        $data['email'] = $email;
        return view('pages.about')->withData($data);
    }
    public function getContact(){
        return view('pages.contact');
    }
}
