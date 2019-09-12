@extends('layouts.app')

@section('content')
    <div class="container text-center p-5">
        <h2 class="bg-success p-2">Get Update</h2>
        <form class="form-row" action="{{ route('post_phone_route') }}" method="post">
            @csrf
            <div class="col-6 offset-md-3 text-left p-2">
                <label for="name">Name</label>
                <input type="text" value="" name="name" class="form-control">
            </div>
            <div class="col-6 offset-md-3 text-left p-2">
                <label for="origin">Origin</label>
                <input type="text" class="form-control" value="" name="origin">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-success">Save</button>
            </div>
        </form>
    </div>
@endsection