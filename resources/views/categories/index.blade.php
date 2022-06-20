@extends('main')
@section('title','All Categories')

@section('content')

<div class="row">
    <div class="col-md-8">
        <h1>Categories</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>{{-- end of col-md-8 --}}

    <div class="col-md-3">
        <div class="well">
            <form action="{{ route('categories.store')}}" method="POST">
                @csrf
                <h1>New Category</h1>
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Category Name:" class="form-control">

                <br>
                <button type="submit" class="btn btn-primary mt-1 w-100">Create New Category</button>
            </form>
        </div>
    </div>
    
</div>
    
@endsection
