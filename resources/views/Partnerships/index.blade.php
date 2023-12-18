@extends('layouts.app')

@section('content')
    <div style="background-color: #ff9500">
        <div class="container py-5 text-white">
            <h1 class="display-2 fw-semibold">Partnership Komfy</h1>
            <p class="fs-3">Partner kami memiliki dampak besar pada perkembangan bisnis Komfy. Menjaga kepercayaan dan
                memperlakukan partner bisnis dengan baik merupakan visi kami. Siapa saja partner yang telah andil bagian
                dalam perkembangan bisnis Komfy?</p>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Card -->
                <div class="card card-hover">
                    <div class="d-flex justify-content-center">
                        <a href="#">
                            <img src="{{ asset('assets/image/grape_1.JPG') }}" alt=""
                                class="img-fluid rounded-top-md" style="object-fit:cover">
                        </a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">An Ultimate
                                Guide for
                                Beginners Bootstrap 5</a>
                        </h3>
                        <ul class="mb-3  list-inline">
                            <li class="list-inline-item"><i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>3h
                                56m
                            </li>
                            <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                    </rect>
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                    </rect>
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                    </rect>
                                </svg>Beginner </li>
                        </ul>
                        <div>
                            <span>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning"></i>
                            </span>
                            <span class="text-warning">4.5</span>
                            <span class="fs-6 text-muted">(9,300)</span>

                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row align-items-center g-0">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs"
                                    alt="">
                            </div>
                            <div class="col ms-2">
                                <span>Morris Mccoy</span>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="text-muted bookmark">
                                    <i class="fe fe-bookmark  "></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Card -->
                <div class="card card-hover">
                    <a href="#"><img src="{{ asset('assets/image/grape_1.JPG') }}" alt=""
                            class="img-square rounded-top-md" style="object-fit:cover" width="50%" height="50%"></a>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">An Ultimate
                                Guide for
                                Beginners Bootstrap 5</a>
                        </h3>
                        <ul class="mb-3  list-inline">
                            <li class="list-inline-item"><i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>3h
                                56m
                            </li>
                            <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                    </rect>
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                    </rect>
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                    </rect>
                                </svg>Beginner </li>
                        </ul>
                        <div>
                            <span>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning"></i>
                            </span>
                            <span class="text-warning">4.5</span>
                            <span class="fs-6 text-muted">(9,300)</span>

                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row align-items-center g-0">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs"
                                    alt="">
                            </div>
                            <div class="col ms-2">
                                <span>Morris Mccoy</span>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="text-muted bookmark">
                                    <i class="fe fe-bookmark  "></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Card -->
                <div class="card card-hover">
                    <a href="#"><img src="{{ asset('assets/image/grape_1.JPG') }}" alt=""
                            class="img-square rounded-top-md" style="object-fit:cover" width="50%"
                            height="50%"></a>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">An Ultimate
                                Guide for
                                Beginners Bootstrap 5</a>
                        </h3>
                        <ul class="mb-3  list-inline">
                            <li class="list-inline-item"><i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>3h
                                56m
                            </li>
                            <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                    </rect>
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                    </rect>
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                    </rect>
                                </svg>Beginner </li>
                        </ul>
                        <div>
                            <span>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning"></i>
                            </span>
                            <span class="text-warning">4.5</span>
                            <span class="fs-6 text-muted">(9,300)</span>

                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row align-items-center g-0">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs"
                                    alt="">
                            </div>
                            <div class="col ms-2">
                                <span>Morris Mccoy</span>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="text-muted bookmark">
                                    <i class="fe fe-bookmark  "></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <!-- Card -->
                <div class="card card-hover">
                    <a href="#"><img src="{{ asset('assets/image/grape_1.JPG') }}" alt=""
                            class="img-square rounded-top-md" style="object-fit:cover" width="50%"
                            height="50%"></a>
                    <!-- Card Body -->
                    <div class="card-body">
                        <h3 class="h4 mb-2 text-truncate-line-2 "><a href="#" class="text-inherit">An Ultimate
                                Guide for
                                Beginners Bootstrap 5</a>
                        </h3>
                        <ul class="mb-3  list-inline">
                            <li class="list-inline-item"><i class="mdi mdi-clock-time-four-outline text-muted me-1"></i>3h
                                56m
                            </li>
                            <li class="list-inline-item"><svg class="me-1 mt-n1" width="16" height="16"
                                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="8" width="2" height="6" rx="1" fill="#754FFE">
                                    </rect>
                                    <rect x="7" y="5" width="2" height="9" rx="1" fill="#DBD8E9">
                                    </rect>
                                    <rect x="11" y="2" width="2" height="12" rx="1" fill="#DBD8E9">
                                    </rect>
                                </svg>Beginner </li>
                        </ul>
                        <div>
                            <span>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning me-n1"></i>
                                <i class="mdi mdi-star text-warning"></i>
                            </span>
                            <span class="text-warning">4.5</span>
                            <span class="fs-6 text-muted">(9,300)</span>

                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <div class="row align-items-center g-0">
                            <div class="col-auto">
                                <img src="../assets/images/avatar/avatar-3.jpg" class="rounded-circle avatar-xs"
                                    alt="">
                            </div>
                            <div class="col ms-2">
                                <span>Morris Mccoy</span>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="text-muted bookmark">
                                    <i class="fe fe-bookmark  "></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4 order-md-2 order-1 text-center d-md-block d-none">
                <img src="{{ asset('image/Testimony.JPG') }}" class="rounded img-fluid">
            </div> --}}

        {{-- <div class="p-lg-3 p-4">
            @auth
                @if (Auth::user()->isMember())
                    <div class="border-top border-bottom">
                        <h1 class="mt-3 fw-bolder text-center mb-3">Testimoni Anda</h1>
                        <form action="{{ route('testimony.create') }}" method="GET">
                            <button class="btn btn-warning mb-3" href="{{ route('testimony.create') }}">
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
                                                    <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                                        class="rounded-circle
                                     mb-3 mb-lg-0 shadow"
                                                        width="100" height="100">
                                                </div>
                                                <div class="ms-lg-4 text-lg-start text-center text-white">
                                                    <h4 class="mb-0 fw-bold">{{ $testimony->testify->name }}</h4>
                                                    <p class="mb-0 fs-6 fw-bolder">{{ $testimony->testify->role->role_name }}
                                                    </p>
                                                    <p>{{ $testimony->description }}
                                                    </p>
                                                    <form action="{{ route('testimony.edit', $testimony) }}" method="GET">
                                                        <button class="btn btn-primary mb-3"
                                                            href="{{ route('testimony.edit', $testimony) }}">
                                                            Edit Testimoni
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('testimony.destroy', $testimony) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger mb-3"
                                                            href="{{ route('testimony.destroy', $testimony) }}">
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
                                                    <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                                        class="rounded-circle
                                     mb-3 mb-lg-0 shadow"
                                                        width="100" height="100">
                                                </div>
                                                <div class="ms-lg-4 text-lg-start text-center text-white">
                                                    <h4 class="mb-0 fw-bold">{{ $request->testify->name }}</h4>
                                                    <p class="mb-0 fs-6 fw-bolder">{{ $request->testify->role->role_name }}
                                                    </p>
                                                    <p>{{ $request->description }}
                                                    </p>
                                                    <form action="{{ route('testimony.accept', $request) }}" method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <button class="btn btn-success mb-3"
                                                            href="{{ route('testimony.accept', $request) }}">
                                                            Terima Testimoni
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('testimony.reject', $request) }}" method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <button class="btn btn-danger mb-3"
                                                            href="{{ route('testimony.reject', $request) }}">
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
                                    <img src="{{ asset('image/Testimony.JPG') }}" alt=""
                                        class="rounded-circle
                         mb-3 mb-lg-0 shadow" width="100"
                                        height="100">
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
        </div> --}}
    </div>
    @include('layouts.footer')
@endsection
