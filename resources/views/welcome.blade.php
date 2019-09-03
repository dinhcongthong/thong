@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="alert alert-danger">
                <p class="text-light font-weight-bold">{{ str_replace('_', '-', app()->getLocale()) }}</p>
            </div>
        </div>
        
        <div class="col-6">
            <div class="alert alert-danger">
                <p class="text-light font-weight-bold">slkfaslkfjaslkf</p>
            </div>
        </div>
    </div>
@endsection