@extends('main')

@section('title','Contact Us')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form action="">
            <div class="form-group">
                <label for="" name="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="" name="subject">Subject:</label>
                <input type="subject" id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for="" name="message">Message:</label>
                <textarea id="message" name="message" class="form-control">Type Your Message Here....</textarea>
            </div>
            <input type="submit" value="Send Message" class="btn btn-success btn-sm mt-3">

        </form>
    </div>
</div>
@endsection