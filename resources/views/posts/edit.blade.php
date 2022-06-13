@extends('main')
@section('title','Edit Blog Post')
@section('content')

{!! Form::model($post,['route'=>['posts.update',$post->id]])  !!}
<div class="row">
    <div class="col-md-8">
        {{Form::label('title','Titles:')}}
        {{ Form::text('title',null,["class"=>'form-control input-lg']) }}

        {{Form::label('body','Body:',['class'=>'form-specing-top'])}}
        {{Form::textarea('body',null, ['class'=>'form-control']) }}

</div>
<div class="col-md-4">
    <div class="well">
        <dl class="dl-horizontal">
            <dt>Create At:</dt>
            <dd>{{ date('M j,Y h:ia',strtotime($post->created_at)) }}</dd>
        </dl>
            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>{{ date('M j,Y h:ia',strtotime($post->updated_at)) }}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block w-100')) !!}
                </div>
                <div class="col-sm-6">
                    {!! Html::linkRoute('posts.update','Save Changes',array($post->id),array('class'=>'btn btn-success btn-block w-100')) !!}
                </div>
            </div>
    </div>
</div>
</div>{{-- end of the row (form) --}}
{!! Form::close() !!}

@stop