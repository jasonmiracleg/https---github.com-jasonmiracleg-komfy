@extends('layouts.app')

@section('content')
    <div style="background-color: #ffb348">
        <div class="container py-5 text-white">
            <h1 class="display-2 fw-semibold">Partnership Komfy</h1>
            <p class="fs-3">Partner kami memiliki dampak besar pada perkembangan bisnis Komfy. Menjaga kepercayaan dan
                memperlakukan partner bisnis dengan baik merupakan visi kami. Siapa saja partner yang telah andil bagian
                dalam perkembangan bisnis Komfy?</p>
        </div>
    </div>
    <div class="container pt-3 px-5 px-md-0">
        @auth
            @if (Auth::user()->isAdmin())
                <div>
                    <form action="{{ route('partnership.create') }}" method="GET">
                        <button class="btn btn-success mb-3 text-white fw-bold" href="{{ route('testimony.create') }}">
                            Tambah Partnership
                        </button>
                    </form>
                </div>
            @endif
        @endauth
        <div class="row">
            @foreach ($partnerships as $partnership)
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card card-hover">
                        @if (Storage::disk('public')->exists($partnership->partnership_picture))
                            <img src="{{ asset('storage/' . $partnership->partnership_picture) }}"
                                class="img-square img-fluid rounded-top w-sm-auto w-100">
                        @else
                            <img src="{{ asset('image/body_sculpture.jpg') }}"
                                class="img-square img-fluid rounded-top w-sm-auto w-100">
                        @endif
                        <!-- Card Body -->
                        <div class="card-body border-top">
                            <h3 class="fw-bold mb-2 text-truncate-line-2 ">{{ $partnership->partnership_name }}
                            </h3>
                            <div>
                                <p>{{ $partnership->description }}</p>
                                @if ($partnership->phone_number)
                                    <p><span class="fw-bolder">Contact : </span>{{ $partnership->phone_number }}</p>
                                @endif
                            </div>
                        </div>
                        <!-- Card Footer -->
                        <div class="d-flex flex-wrap py-3 px-5 gap-2" style="background-color: #ffbb5c">
                            <div class="text-center flex-grow-1">
                                <a href="{{ $partnership->url }}">
                                    <button class="btn btn-secondary fw-bold w-100">Baca
                                        Selengkapnya</button>
                                </a>
                            </div>
                            @auth
                                @if (Auth::user()->isAdmin())
                                    <div class="text-center flex-grow-1">
                                        <form action="{{ route('partnership.edit', $partnership) }}" method="GET">
                                            <button class="btn btn-primary fw-bold w-100"
                                                href="{{ route('partnership.edit', $partnership) }}">Edit Partnership</button>
                                        </form>
                                    </div>
                                    <div class="text-center flex-grow-1">
                                        <form action="{{ route('partnership.destroy', $partnership) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger fw-bold w-100""
                                                href="{{ route('partnership.destroy', $partnership) }}">
                                                Hapus Partnership
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
@endsection
