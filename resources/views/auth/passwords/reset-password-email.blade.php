@extends('main')

@section('title','Forge my password')
@section('content')


<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Reset Password</div>
            @if(session('status'))
            <p class="btn btn-success">{{session('status')}}</p>
            @elseif(session('email'))
            <p>{{session('email')}}</p>
            <div class="panel-body">
                @endif
                
                {!! Form::open(['url'=>'forgot-password','method'=>"POST"]) !!}
                {{ Form::label('email','Email:') }}
                {{ Form::email('email',null, ['class'=>'form-control']) }}
                <br>
                {{ Form::submit('Reset Password',['class'=>'btn btn-primary']) }}
                    <br>
                    <p><a href="{{route('login')}}">Back to Login Page</a></p>
                {{ Form::close() }}
                
            </div>
        </div>
    </div>
</div>


@endsection
