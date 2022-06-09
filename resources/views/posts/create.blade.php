@extends('main')

@section('title','Create New Post')
@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            {!! Form::open(['url' => 'posts.store']) !!}
                {{ Form::label('title','Title:') }}
                {{ Form::text('title',null, array('class'=> 'form-control')) }}

                {{ Form::label('body','Post Body:') }}
                {{ Form::textarea('body',null, array('class'=> 'form-control')) }}

                {{ Form::submit('Create New Post', array('class'=> 'btn btn-success btn-lg btn-block','style'=>'margin-top:20px;')) }}


            {!! Form::close() !!}
        </div>
    </div>

@endsection