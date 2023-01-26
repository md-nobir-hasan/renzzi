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
                <div class="text-center mt-3 py-2">
                    <a href="{{ url('all_category') }}" class="btn"><i class="fa-sharp fa-solid fa-list-check"></i> Many more...</a>
                </div>
            </div>

            {{-- New Arrivals Products  --}}
            <div class="wrapper-container">
                <div class="d-grid gap-2 py-3">
                    <button class="btn rounded-0 py-2" style="text-align: left" type="button"><h4 class="m-0"><i class="fa-solid fa-list"></i> New Arrivals Products</h4></button>
                </div>

                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3">

                    @forelse($products as $product)
                        <div class="col">
                            <div class="card shadow-sm pb-3">
                                <a href="{{ route('product_details', [$product->id]) }}">
                                    <img class="bd-placeholder-img card-img-top img{{ $product->id }}" src='{{ asset("$product->photo") }}' alt="{{ $product->title }}" title="{{ $product->title }}" width="100%" height="225">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-dark mb-0 title{{ $product->id }}">{{ $product->title }}</h5>
                                    </div>
                                </a>
                                <div class="text-center">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <div class="btn-group ">
                                            <button type="button" class="btn btn-sm btn-price text-dark ">৳ <span class='dis-price{{ $product->id }}'>{{ en2bn($product->price - ($product->discount ?? 0)) }}</span></button>
                                            <button type="button" style="text-decoration: line-through;" class="btn btn-sm btn-disprice ">৳ <span class='price{{ $product->id }}'>{{ en2bn($product->price) }}</span></button>
                                        </div>
                                    </div>
                                    <a href="" class="btn add-to-cart" id="{{ $product->id }}">
                                        <i class="fa fa-cart-plus"></i><span> Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        @if (isset($category))
                            <p class="w-100 text-center">There are no products in {{ $category->title }} category</p>
                        @else
                            <p class="w-100 text-center">There are no products</p>
                        @endif
                    @endforelse

                </div>
                <div class="text-center mt-3  py-2">
                    <a href="{{ url('all_product') }}" class="btn"><i class="fa-sharp fa-solid fa-list-check"></i> Many more...</a>
                </div>
            </div>

            {{--  Best Selling Products  --}}
            <div class="wrapper-container">
                <div class="d-grid gap-2 py-3">
                    <button class="btn rounded-0 py-2" style="text-align: left" type="button"><h4 class="m-0"><i class="fa-solid fa-list"></i> Best Selling Products</h4></button>
                </div>

                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3">

                    @forelse($products_hot as $product)
                        <div class="col">
                            <div class="card shadow-sm pb-3">
                                <a href="{{ route('product_details', [$product->id]) }}">
                                    <img class="bd-placeholder-img card-img-top img{{ $product->id }}" src='{{ asset("$product->photo") }}' alt="{{ $product->title }}" title="{{ $product->title }}" width="100%" height="225">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-dark mb-0 title{{ $product->id }}">{{ $product->title }}</h5>
                                    </div>
                                </a>
                                <div class="text-center">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <div class="btn-group ">
                                            <button type="button" class="btn btn-sm btn-price text-dark">৳<span class='dis-price{{ $product->id }}'>{{ en2bn($product->price - ($product->discount ?? 0)) }}</span></button>
                                            <button type="button" style="text-decoration: line-through;" class="btn btn-sm btn-disprice ">৳<span class='price{{ $product->id }}'>{{ en2bn($product->price) }}</span></button>
                                        </div>
                                    </div>
                                    <a href="" class="btn add-to-cart" id="{{ $product->id }}">
                                        <i class="fa fa-cart-plus"></i><span> Add to Cart</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @empty
                        @if (isset($category))
                            <p class="w-100 text-center">There are no products in {{ $category->title }} category</p>
                        @else
                            <p class="w-100 text-center">There are no products</p>
                        @endif
                    @endforelse

                </div>
                <div class="text-center mt-3  py-2">
                    <a href="{{ url('all_product') }}" class="btn"><i class="fa-sharp fa-solid fa-list-check"></i> Many more...</a>
                </div>
            </div>

            {{-- Featured Products  --}}
            <div class="wrapper-container">
                <div class="d-grid gap-2 py-3">
                    <button class="btn rounded-0 py-2" style="text-align: left" type="button"><h4 class="m-0"><i class="fa-solid fa-list"></i> Featured Products</h4></button>
                </div>

                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-3">

                    @forelse($products_default as $product)

                            <div class="col">
                                <div class="card shadow-sm pb-3">
                                    <a href="{{ route('product_details', [$product->id]) }}">
                                        <img class="bd-placeholder-img card-img-top img{{ $product->id }}" src='{{ asset("$product->photo") }}' alt="{{ $product->title }}" title="{{ $product->title }}" width="100%" height="225">
                                        <div class="card-body text-center">
                                            <h5 class="card-title text-dark mb-0 title{{ $product->id }}">{{ $product->title }}</h5>
                                        </div>
                                    </a>
                                    <div class="text-center">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <div class="btn-group ">
                                                <button type="button" class="btn btn-sm btn-price text-dark ">৳<span class='dis-price{{ $product->id }}'>{{ en2bn($product->price - ($product->discount ?? 0)) }}</span></button>
                                                <button type="button" style="text-decoration: line-through;" class="btn btn-sm btn-disprice ">৳<span class='price{{ $product->id }}'>{{ en2bn($product->price) }}</span></button>
                                            </div>
                                        </div>
                                        <a href="" class="btn add-to-cart" id="{{ $product->id }}">
                                            <i class="fa fa-cart-plus"></i><span> Add to Cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                    @empty
                        @if (isset($category))
                            <p class="w-100 text-center">There are no products in {{ $category->title }} category</p>
                        @else
                            <p class="w-100 text-center">There are no products</p>
                        @endif
                    @endforelse

                </div>
                <div class="text-center mt-3  py-2">
                    <a href="{{ url('all_product') }}" class="btn"><i class="fa-sharp fa-solid fa-list-check"></i> Many more...</a>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('custom-js')

@endpush
