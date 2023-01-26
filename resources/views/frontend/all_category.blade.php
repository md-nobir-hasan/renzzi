@extends('frontend.layouts.app')
@push('custom-css')
    <style>
        .product-image {
            max-height: 100px;
        }

        #cart_mobile a {
            color: black;
        }
    </style>
@endpush
@section('page_conent')

    <div class="">
        <div class="p-top-15">
            {{-- Main banner  --}}
            <div id="carouselExampleIndicators" class="carousel slide mt-2" data-bs-ride="true" style="margin-top: 59px !important;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('assets/frontend/images/slider/slider1.jpg') }}" class="d-block w-100" alt="...">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/images/slider/slider2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('assets/frontend/images/slider/slider3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="wrapper-container">
                <div class="d-grid gap-2 py-3">
                    <button class="btn rounded-0 py-2 text-white" style="background-color: #ff9801; text-align: left" type="button"><h4 class="m-0"><i class="fa-solid fa-list"></i> Most popular categories</h4></button>
                </div>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-6 g-3">

                    @foreach($categories as $category)

                        <div class="col">
                            <a href="{{ route('category', [$category->id]) }}">
                                <div class="card bg-dark text-white border" style="border: #e7e7e7;">
                                    <img src="/{{ $category->img }}" class="card-img" alt="{{ $category->title }}">
                                    <div class="card-img-overlay ">
                                        <h5 class="card-title text-dark">{{ $category->title }}</h5>
                                        <button class="btn btn-sm" style="color: #0052b1;"><i class="fa-solid fa-basket-shopping"></i> Shop Now</button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
@push('custom-js')

@endpush
