@extends('main')
@section('title','Login')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
      {{-- forget password msg start --}}
      @if(session('status'))
      <p class="btn btn-success">{{session('status')}}</p>
      @elseif(session('email'))
      <p class="btn btn-danger">{{session('email')}}</p>
      <div class="panel-body">
          @endif
          {{-- forget password msg end --}}
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

        <p><a href="{{ route('password.request') }}">Forget Password</a></p>
        

        {!! Form::close()  !!}
    </div>
</div>

@endsection