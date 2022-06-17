@extends('main')

@section('title','Forge my password')
@section('content')


<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>

            <div class="panel-body">
                
                
                {!! Form::open(['url'=>'reset-password','method'=>"POST"]) !!}

                {{ Form::hidden('token',$token)}}
                
                
                {{ Form::label('email','Email:') }}
                {{ Form::email('email',$email,['class'=>'form-control']) }}
                 
                {{ Form::label('password','New Password:') }}
                {{ Form::password('password', ['class'=>'form-control']) }}
                <br>
                {{ Form::label('password_confirmation','Confirm new password:') }}
                {{ Form::password('password_confirmation', ['class'=>'form-control']) }}
                <br>
                

                {{ Form::submit('Reset Password',['class'=>'btn btn-primary']) }}
                
                {{ Form::close() }}
                
            </div>
        </div>
    </div>
</div>


@endsection
