@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex p-lg-3 p-4 align-items-center">
            <div class="col-md-8 order-md-1 order-2">
                <h1 class="display-1 fw-bold text-center text-md-start">Testimoni Pelanggan</h1>
                <p class="fs-3 text-center text-md-start">Apa pendapat mereka tentang produk Komfy?</p>
            </div>
            <div class="col-md-4 order-md-2 order-1 text-center d-md-block d-none">
                <img src="{{ asset('image/Testimony.JPG') }}" class="rounded img-fluid">
            </div>
        </div>
        <div class="p-lg-3 p-4">
            <div class="border-top border-bottom">
                <h1 class="mt-3 fw-bolder text-center mb-3">Testimoni Anda</h1>
                @auth
                    @if (Auth::user()->isAdmin())
                        <form action="{{ route('testimony.create') }}" method="GET">
                            <button class="btn btn-warning mb-3" href="{{ route('testimony.create') }}">
                                Tambah Testimoni
                            </button>
                        </form>
                        <div class="row d-flex">
                            <div class="col-lg-4 col-md-6">
                                <div class="card mb-4">
                                    <!-- Card Body -->
                                    <div class="card-body rounded shadow" style="background-color: #ffa323">
                                        <div class="d-lg-flex">
                                            <div
                                                class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                                <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                                    class="rounded-circle
                                         mb-3 mb-lg-0 shadow"
                                                    width="100" height="100">
                                            </div>
                                            <div class="ms-lg-4 text-lg-start text-center text-white">
                                                <h4 class="mb-0 fw-bold">Jenny Wilson</h4>
                                                <p class="mb-0 fs-6 fw-bolder">Customer</p>
                                                <p>I start my development and digital career studying digital
                                                    design. After taking a couple of programming classes I realize
                                                    that code is what I wanted to be doing, so I start learning by
                                                    myself. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum
                                                    inventore
                                                    maiores ab suscipit quos accusamus quidem eaque alias sed, minima molestiae
                                                    voluptatum
                                                    magnam soluta distinctio dolore, qui est porro ad.
                                                </p>
                                                <form action="{{ route('testimony.create') }}" method="GET">
                                                    <button class="btn btn-primary mb-3" href="{{ route('testimony.create') }}">
                                                        Edit Testimoni
                                                    </button>
                                                    <button class="btn btn-danger mb-3" href="{{ route('testimony.create') }}">
                                                        Hapus Testimoni
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endauth
            </div>
        </div>
        <div class="row p-lg-3 p-4 d-flex">
            @auth
                @if (Auth::user()->isAdmin())
                    <h1 class="mt-3 fw-bolder text-center mb-3">Testimoni Pelanggan</h1>
                @endif
            @endauth
            <div class="col-lg-4 col-md-6">
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body rounded shadow" style="background-color: #ffa323">
                        <div class="d-lg-flex">
                            <div
                                class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                    class="rounded-circle
                             mb-3 mb-lg-0 shadow" width="100"
                                    height="100">
                            </div>
                            <div class="ms-lg-4 text-lg-start text-center text-white">
                                <h4 class="mb-0 fw-bold">Jenny Wilson</h4>
                                <p class="mb-0 fs-6 fw-bold">Customer</p>
                                <p>I start my development and digital career studying digital
                                    design. After taking a couple of programming classes I realize
                                    that code is what I wanted to be doing, so I start learning by
                                    myself. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum inventore
                                    maiores ab suscipit quos accusamus quidem eaque alias sed, minima molestiae
                                    voluptatum
                                    magnam soluta distinctio dolore, qui est porro ad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body rounded shadow" style="background-color: #ffa323">
                        <div class="d-lg-flex">
                            <div
                                class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                    class="rounded-circle
                             mb-3 mb-lg-0 shadow" width="100"
                                    height="100">
                            </div>
                            <div class="ms-lg-4 text-lg-start text-center text-white">
                                <h4 class="mb-0 fw-bold">Jenny Wilson</h4>
                                <p class="mb-0 fs-6 fw-bold">Customer</p>
                                <p>I start my development and digital career studying digital
                                    design. After taking a couple of programming classes I realize
                                    that code is what I wanted to be doing, so I start learning by
                                    myself. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum inventore
                                    maiores ab suscipit quos accusamus quidem eaque alias sed, minima molestiae
                                    voluptatum
                                    magnam soluta distinctio dolore, qui est porro ad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card mb-4">
                    <!-- Card Body -->
                    <div class="card-body rounded shadow" style="background-color: #ffa323">
                        <div class="d-lg-flex">
                            <div
                                class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                    class="rounded-circle
                             mb-3 mb-lg-0 shadow" width="100"
                                    height="100">
                            </div>
                            <div class="ms-lg-4 text-lg-start text-center text-white">
                                <h4 class="mb-0 fw-bold">Jenny Wilson</h4>
                                <p class="mb-0 fs-6 fw-bold">Customer</p>
                                <p>I start my development and digital career studying digital
                                    design. After taking a couple of programming classes I realize
                                    that code is what I wanted to be doing, so I start learning by
                                    myself. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum inventore
                                    maiores ab suscipit quos accusamus quidem eaque alias sed, minima molestiae
                                    voluptatum
                                    magnam soluta distinctio dolore, qui est porro ad.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
