@extends('main')
@section('title','Login')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {!! Form::open() !!}
        @if(Session::has('success'))
        <div class="alert alert-success">
          {{Session::get('success')}}
        </div>
        @endif
        @if(Session::has('error'))
        <div class="alert alert-danger">
          {{Session::get('error')}}
        </div>
        @endif
        {{ Form::label('email','Email:') }}
        {{ Form::email('email',null, ['class'=>'form-control']) }}

        {{ Form::label('password','Password:') }}
        {{ Form::password('password', ['class'=>'form-control']) }}
        <br>

        {{ Form::checkbox('remember') }}{{ Form::label('remember',"Remember Me")}}
        <br><br>

        {{ Form::submit('Login',['class'=>'btn btn-success w-100']) }}

        {!! Form::close()  !!}
    </div>
</div>

@endsection