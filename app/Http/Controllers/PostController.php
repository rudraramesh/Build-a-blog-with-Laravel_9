<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Session;
use App\Models\Category;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  create a variable and store all the blog post in it from the database.
        $posts = Post::orderBy('id','desc')->Paginate(2);
        // dd($posts);
        // return  a view and pass in the above variable
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'title'         =>'required|max:255',
            'slug'          =>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id'   =>'required|integer',
            'body'          =>'required'
        ));


        // store in the database
        $post = new Post;
        

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;

        $post->save();

        Session::flash('success','The blog post was successfully save!');

        return redirect()->route('posts.show',$post->id);


        // redirect to another page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);   
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and server as a var
        $post = Post::find($id);
        $categories = Category::all();
        $cats = array();
        foreach($categories as $category):
            $cats[$category->id] = $category->name;
        endforeach;

        // return the view and pass in the var we previously created
        return view('posts.edit')->withPost($post)->withCategories($cats);
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
        // validate ethe data
        $post = Post::find($id);
        if($request->input('slug') == $post->slug){
            $this->validate($request, array(
                'title'=>'required|max:255',
                'category_id'=>'required|integer',
                'body'=>'required'
            ));
        }else {
            $this->validate($request, array(
            'title'=>'required|max:255',
            'slug'=>'required|alpha_dash|min:5|max:255|unique:posts,slug',
            'category_id'=>'required|integer',
            'body'=>'required'
            ));
        }

        // save the date to database
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->category_id = $request->input('category_id');
        $post->body = $request->input('body');

        $post->save();

        // set flash data with success message
        Session::flash('success','this post is successfully saved.');
        // redirect with flash data to posts.show
        return redirect()->route('posts.show',$post->id);
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
        $post = Post::find($id);

        $post->delete();

        Session::flash('success','The Post Was Successfully Deleted.');
        return redirect()->route('posts.index');
    }
}
