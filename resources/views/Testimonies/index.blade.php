@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row d-flex p-lg-3 p-4 align-items-center">
            <div class="col-md-8 order-md-1 order-2">
                <h1 class="display-1 fw-bold text-center text-md-start">Testimoni Pelanggan</h1>
                <p class="fs-3 text-center text-md-start">Apa pendapat mereka tentang produk Komfy?</p>
            </div>
            <div class="col-md-4 order-md-2 order-1 text-center d-md-block d-none">
                <img src="{{ asset('assets/image/Testimony.JPG') }}" class="rounded img-fluid">
            </div>
        </div>
        <div class="p-lg-3 p-4">
            @auth
                @if (Auth::user()->isMember())
                    <div class="border-top border-bottom">
                        <h1 class="mt-3 fw-bolder text-center mb-3">Testimoni Anda</h1>
                        <form action="{{ route('member.testimony.create') }}" method="GET">
                            <button class="btn btn-success mb-3" href="{{ route('testimony.create') }}">
                                Tambah Testimoni
                            </button>
                        </form>
                        <div class="row d-flex">
                            @foreach ($mytestimony as $testimony)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-4">
                                        <!-- Card Body -->
                                        <div class="card-body rounded shadow" style="background-color: #ffa323">
                                            <div class="d-lg-flex">
                                                <div
                                                    class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                                    @if (File::exists('assets/image/' . $testimony->testify->profile_picture))
                                                        <img src="{{ asset('assets/image/' . $testimony->testify->profile_picture) }}"
                                                            alt="err"
                                                            class="rounded-circle
                                                            mb-3 mb-lg-0 shadow"
                                                            width="100" height="100">
                                                    @else
                                                        <img src="{{ asset('assets/image/User_icon.png') }}" alt="err"
                                                            class="rounded-circle
                                                        mb-3 mb-lg-0 shadow"
                                                            width="100" height="100">
                                                    @endif
                                                </div>
                                                <div class="ms-lg-4 text-lg-start text-center text-white">
                                                    <h4 class="mb-0 fw-bold">{{ $testimony->testify->name }}</h4>
                                                    <p class="mb-0 fs-6 fw-bolder">{{ $testimony->testify->role->role_name }}
                                                    </p>
                                                    <p>{{ $testimony->description }}
                                                    </p>
                                                    <form action="{{ route('member.testimony.edit', $testimony) }}"
                                                        method="GET">
                                                        <button class="btn btn-primary mb-3"
                                                            href="{{ route('member.testimony.edit', $testimony) }}">
                                                            Edit Testimoni
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('member.testimony.destroy', $testimony) }}"
                                                        method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger mb-3"
                                                            href="{{ route('member.testimony.destroy', $testimony) }}">
                                                            Hapus Testimoni
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                @if (Auth::user()->isAdmin())
                    <div class="border-top border-bottom">
                        <h1 class="mt-3 fw-bolder text-center mb-3">Permohonan Testimoni</h1>
                        <div class="row d-flex">
                            @foreach ($testimonyRequest as $request)
                                <div class="col-lg-4 col-md-6">
                                    <div class="card mb-4">
                                        <!-- Card Body -->
                                        <div class="card-body rounded shadow" style="background-color: #ffa323">
                                            <div class="d-lg-flex">
                                                <div
                                                    class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                                    @if (File::exists('assets/image/' . $request->testify->profile_picture))
                                                        <img src="{{ asset('assets/image/' . $request->testify->profile_picture) }}"
                                                            alt="err"
                                                            class="rounded-circle
                                                            mb-3 mb-lg-0 shadow"
                                                            width="100" height="100">
                                                    @else
                                                        <img src="{{ asset('assets/image/User_icon.png') }}" alt="err"
                                                            class="rounded-circle
                                                        mb-3 mb-lg-0 shadow"
                                                            width="100" height="100">
                                                    @endif
                                                </div>
                                                <div class="ms-lg-4 text-lg-start text-center text-white">
                                                    <h4 class="mb-0 fw-bold">{{ $request->testify->name }}</h4>
                                                    <p class="mb-0 fs-6 fw-bolder">{{ $request->testify->role->role_name }}
                                                    </p>
                                                    <p>{{ $request->description }}
                                                    </p>
                                                    <form action="{{ route('admin.testimony.accept', $request) }}"
                                                        method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <button class="btn btn-success mb-3"
                                                            href="{{ route('admin.testimony.accept', $request) }}">
                                                            Terima Testimoni
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('admin.testimony.reject', $request) }}"
                                                        method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <button class="btn btn-danger mb-3"
                                                            href="{{ route('admin.testimony.reject', $request) }}">
                                                            Tolak Testimoni
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endauth
        </div>
        <div class="row p-lg-3 p-4 d-flex">
            @auth
                @if (Auth::user()->isMember())
                    <h1 class="mt-3 fw-bolder text-center mb-3">Testimoni Pelanggan</h1>
                @endif
            @endauth
            @foreach ($testimonies as $testimony)
                <div class="col-lg-4 col-md-6">
                    <div class="card mb-4">
                        <!-- Card Body -->
                        <div class="card-body rounded shadow" style="background-color: #ffa323">
                            <div class="d-lg-flex">
                                <div
                                    class="position-relative d-flex justify-content-center align-items-center align-items-lg-start">
                                    @if (File::exists('assets/image/' . $testimony->testify->profile_picture))
                                        <img src="{{ asset('assets/image/' . $testimony->testify->profile_picture) }}"
                                            alt="err"
                                            class="rounded-circle
                                        mb-3 mb-lg-0 shadow"
                                            width="100" height="100">
                                    @else
                                        <img src="{{ asset('assets/image/User_icon.png') }}" alt="err"
                                            class="rounded-circle
                                    mb-3 mb-lg-0 shadow"
                                            width="100" height="100">
                                    @endif
                                </div>
                                <div class="ms-lg-4 text-lg-start text-center text-white">
                                    <h4 class="mb-0 fw-bold">{{ $testimony->testify->name }}</h4>
                                    <p class="mb-0 fs-6 fw-bold">{{ $testimony->testify->role->role_name }}</p>
                                    <p>{{ $testimony->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
