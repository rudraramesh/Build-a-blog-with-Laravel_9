@extends('main')

@section('title','Forge my password')
@section('content')


<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>

            <div class="panel-body">

                <form action="/reset-password" method="POST">
                    @csrf
                    @if(session('status'))
                    <p class="btn btn-success">{{session('status')}}</p>
                    @elseif(session('email'))
                    <p class="btn btn-danger">{{session('email')}}</p>
                    <div class="panel-body">
                       @endif
                    <input type="hidden" name="token" value="{{ $token }}">
                    
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    <label for="password">New Password:</label>
                    <input type="password" name="password" class="form-control">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" name="password_confirmation" class="form-control">
                    <br><br>
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>













                
                
                {{-- {!! Form::open(['url'=>'reset-password/{token}','method'=>"POST"]) !!}

                {{ Form::hidden('token',$token)}}
                
                
                {{ Form::label('email','Email:') }}
                {{ Form::email('email',['class'=>'form-control']) }}
                 
                {{ Form::label('password','New Password:') }}
                {{ Form::password('password', ['class'=>'form-control']) }}
                <br>
                {{ Form::label('password_confirmation','Confirm new password:') }}
                {{ Form::password('password_confirmation', ['class'=>'form-control']) }}
                <br>
                

                {{ Form::submit('Reset Password',['class'=>'btn btn-primary']) }}
                
                {{ Form::close() }} --}}
                
            </div>
        </div>
    </div>
</div>


@endsection
