@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <section class="py-lg-16 py-6" x-show: "open">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-12">
                        <div>
                            <h1 class="display-2 fw-bold mb-3">Hidup sehat dengan minum <u class="text-warning"><span
                                        class="text-primary">Kombucha</span></u></h1>
                            <p class="lead mb-4">Nikmati minuman enak yang kaya akan manfaat </p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-2">
                                    <img src="{{ asset('assets/image/verified_icon.png') }}" alt=""
                                        style="width:24px; height:24px">
                                    <span class="ms-2">Sehat</span>
                                </li>
                                <li class="mb-2">
                                    <img src="{{ asset('assets/image/verified_icon.png') }}" alt=""
                                        style="width:24px; height:24px">
                                    <span class="ms-2">Menyegarkan</span>
                                </li>
                                <li class="mb-2">
                                    <img src="{{ asset('assets/image/verified_icon.png') }}" alt=""
                                        style="width:24px; height:24px">
                                    <span class="ms-2">Harga terjangkau</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-12 d-lg-flex justify-content-end">
                        <div class="mt-12 mt-lg-0 position-relative">

                            <img src="{{ asset('assets/image/kombucha.JPG') }}" alt="online course"
                                class="img-fluid rounded-4 z-1 position-relative d-lg-block d-none" style="width: 26vw">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="py-8 bg-light-gradient-top ">


            <div class="container">
                <div class="row mt-12 justify-content-center">
                    <!-- caption -->
                    <div class="col-lg-8 col-md-12 col-12 text-center">

                        <h2 class="mb-4 display-4 fw-bold">

                            <u class="text-warning"><span class="text-primary">Produk</span></u>
                            Kami
                        </h2>
                    </div>
                </div>
                <!-- row -->
                <div class="row mt-12">

                    @foreach ($variants as $variant)
                        <div class=" mt-3 col-xl-3 col-lg-4 col-md-6 col-12">
                            <!-- card -->
                            <div class="card mb-4 card-hover" style="height:80vh">

                                @foreach ($product_picture as $product_pict)
                                    @if ($product_pict->variant_id == $variant->id)
                                        <!-- img -->
                                        <div class="card-img-top">
                                            <img src="{{ asset('/assets/image/' . $product_pict->picture) }}" alt="err"
                                                class="rounded-top-md img-fluid" style="height: 50vh; width: 100%;">
                                        </div>
                                    @break
                                @endif
                            @endforeach

                            <!-- card body -->
                            <div class="card-body">
                                @foreach ($products as $product)
                                    @if ($product->id == $variant->product_id)
                                        <h5 class="mb-2 fw-bold text-center"> {{ $product->product_name }} -
                                            {{ $variant->variant_name }} </h5>
                                    @endif
                                @endforeach

                                <h5 class="mb-2 fw-semibold text-center">
                                    Rp. {{ $variant->price }} </h5>
                                <!-- Button Block -->
                                <div class="d-flex justify-content-center">
                                    @auth
                                        @if (Auth::user() != null)
                                            <a href="/show/{{ $variant->id }}/{{ $variant->product_id }}">
                                                <button class="btn btn-primary" type="button">Lihat Detail</button>
                                            </a>
                                        @endif
                                    @else
                                        <a href="{{ route('login') }}">
                                            <button class="btn btn-primary" type="button">Lihat Detail</button>
                                        </a>
                                    @endauth

                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
