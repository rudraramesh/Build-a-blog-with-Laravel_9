@extends('main')
@section('title','All Posts')

@section('content')

<div class="row">
    <div class="col-md-10">
        <h1>All Posts</h1>
    </div>
    <div class="col-md-2">
        <a href="{{ route('posts.create')}}" class="btn btn-sm  w-100 btn-primary btn-h1-specing"> Create New Post</a>
    </div>
    <div class="col-md-12">
        <hr>
    </div>
</div>{{-- end of .row --}}
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach($posts as $post)

                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "...":"" }}</td>
                    <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                    <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
        
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    
    </div>
</div>

@stop