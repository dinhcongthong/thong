@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="alert alert-danger">
                <p class="text-light font-weight-bold">{{ str_replace('_', '-', app()->getLocale()) }}</p>
            </div>
        </div>
    </div>

    <form class="form-row" method="POST" action="{{ route('post_send_mail_route') }}">
        @csrf
        <div class="col-12 mb-3">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
        </div>
        <div class="col-12 mb-3">
            <label for="content">Content</label>
            <textarea name="content" id="content" placeholder="Content" class="form-control"></textarea>
        </div>
        <div class="col-12 mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
@endsection