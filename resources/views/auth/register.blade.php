@extends('main')
@section('title','Register')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open() !!}
        {{ Form::label('name','Name:') }}
        {{ Form::text('name',null, ['class'=>'form-control']) }}

        {{ Form::label('email','Email:') }}
        {{ Form::text('email',null, ['class'=>'form-control']) }}

        {{ Form::label('password','Password:') }}
        {{ Form::password('password', ['class'=>'form-control']) }}
        
        {{ Form::label('password_confirmation','Confirm Password:') }}
        {{ Form::password('password_confirmation', ['class'=>'form-control']) }}
      <br><br>

        {{ Form::submit('Login',['class'=>'btn btn-success w-100']) }}

        {!! Form::close()  !!}
    </div>
</div>

@endsection