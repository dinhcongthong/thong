@extends('layouts.app')

@section('content')
<div class="container-fluid bg-home">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide mb-3" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/top1.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/top2.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/top3.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="form-row py-5">
            <div class="col-6 offset-md-3 my-3 text-center">
                <img src="{{ asset('images/product/1.jpg') }}" alt="" class="img-fluid" id="image">
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('scripts')
<script>
    $(document).ready(function(e) {
    alert('123');

    const image = document.getElementById('image');
    const cropper = new Cropper(image, {
        aspectRatio: 6 / 4,
        crop(event) {
            console.log(event.detail.x);
            console.log(event.detail.y);
            console.log(event.detail.width);
            console.log(event.detail.height);
            console.log(event.detail.rotate);
            console.log(event.detail.scaleX);
            console.log(event.detail.scaleY);
        },
    });
});
</script>
@endsection --}}