@extends('layouts.app')

@section('content')
    <!-- content -->
    <section class="py-5">
        <div class="container">
            <div class="row gx-5">
                <aside class="col-lg-6">

                    <div class="mb-3 d-flex justify-content-center">

                        <img src="/assets/image/{{ $product_picture[1]->picture }}"
                            style="max-width: 100%; max-height: 60vh; margin: auto;" />
                    </div>
                    <div class="d-flex justify-content-center mb-3">

                        @foreach ($product_picture as $pict)
                            @if ($pict->id != 1)
                                <img style="padding-left: 6px" width="60" height="80"
                                    src="/assets/image/{{ $pict->picture }}" />
                            @endif
                        @endforeach

                    </div>

                    <form action="/cart" method="POST" enctype="multipart/form-data">
                        @csrf
                        <main class="col-lg-6">
                            <div class="ps-lg-3">
                                <h4 class="title text-dark">
                                    {{ $product->product_name }}
                                </h4>
                                <div class="d-flex flex-row my-3"></span>
                                    <span class="text-success">In stock</span>
                                </div>

                                <div class="mb-3">
                                    <span name="product_price" class="h5"> {{ $variant->price }} </span>
                                    <span class="text-muted">/per item</span>
                                </div>

                                <p>
                                    {{ $product->description }}
                                </p>

                                <div class="col-md-4 col-6">
                                    <label class="mb-2">Category : {{ $category->category_name }}</label>
                                </div>

                                <div class="col-md-4 col-6">
                                    <label class="mb-2">Variant : {{ $variant->variant_name }}</label>
                                </div>

                                <div class="col-md-4 col-6">
                                    <label class="mb-2">Quantity : </label>
                                    <input type="number" min="1" name="quantity">
                                </div>

                                <div class="row mb-4">

                                    <!-- col.// -->
                                    <div class="col-md-4 col-6 mb-3">
                                        <div class="input-group bs-number-incrementer">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default" data-operation="decrement">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>

                                            <span class="bs-number-incremented-target"></span>

                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default" data-operation="increment">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                <input type="hidden" name="variant_id" value="{{ $variant->id }}">
                                <input type="hidden" name="price" value="{{ $variant->price }}">
                                <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">

                                <button class="btn btn-light border border-secondary py-2 icon-hover px-3" type="submit">
                                    Add to Cart
                                </button>

                                <a href="/" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i
                                        class="me-1 fa fa-heart fa-lg"></i> Back </a>
                            </div>
                        </main>

                    </form>

                </aside>


            </div>
        </div>
    </section>
    <!-- content -->
@endsection
