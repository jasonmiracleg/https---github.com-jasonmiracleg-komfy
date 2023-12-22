@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <section class="py-lg-16 py-6">
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

                            <img src="{{ asset('assets/image/about_us.png') }}" alt="online course"
                                class="img-fluid rounded-4 z-1 position-relative d-lg-block d-none">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid px-4 py-8 my-4 mx-auto gap-4 lg:py-16">
            <div class="row">
                <div class="col-lg-5 d-flex">
                    <img src="{{ asset('assets/image/vision.png') }}" alt="mockup" class="img-fluid">
                </div>

                <div class="col-lg-7">
                    <h1 class="fw-bold mb-3">Visi <u class="text-warning"><span class="text-primary">Perusahaan</span></u>
                    </h1>
                    <p class="mb-6 font-light md:text-lg lg:text-xl">
                        Menciptakan sekaligus mengenalkan kepada masyarakat mengenai kombucha
                        yaitu minuman sehat dengan kualitas tinggi yang merupakan hasil fermentasi
                        dari jamur scoby yang dicampurkan dengan seduhan teh. Komfy menyediakan
                        varian rasa kombucha dengan rasa yang unik dan memiliki banyak sekali
                        manfaat dan khasiat yang luar biasa yang mampu menyehatkan tubuh. Dengan
                        munculnya bisnis kami ini, kami bertekad untuk mempromosikan atau menarik
                        masyarakat untuk menerapkan pola hidup sehat. </p>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid px-4 py-8 my-4 mx-auto gap-4 lg:py-16">
            <div class="row">


                <div class="col-lg-6">
                    <h1 class="fw-bold mb-3">Misi <u class="text-warning"><span class="text-primary">Perusahaan</span></u>
                    </h1>
                    <ul>
                        <li class="mb-6 font-light md:text-lg lg:text-xl">
                            Sejak awal bisnis ini didirikan, kami telah berkomitmen untuk menciptakan
                            kombucha yang berkualitas dengan menggunakan bahan-bahan alami tanpa
                            perasa buatan, dan proses fermentasi yang sangat higienis dan teliti agar
                            kombucha tidak terkontaminasi.
                        </li>
                        <li class="mb-6 font-light md:text-lg lg:text-xl">
                            Kami membuka bisnis kombucha dengan tujuan untuk meningkatkan kesehatan
                            dan kesadaran pelanggan akan pentingnya menjalankan pola hidup sehat
                            dengan menyediakan minuman yang sehat dan baik untuk melancarkan
                            pencernaan.
                        </li>
                        <li class="mb-6 font-light md:text-lg lg:text-xl">
                            Kami akan terus berinovasi dan mengembangkan minuman kombucha dengan
                            menciptakan berbagai varian rasa yang menarik dan unik.
                        </li>
                        <li class="mb-6 font-light md:text-lg lg:text-xl">
                            Menjaga hubungan kerja sama dengan pelanggan dengan tetap
                            mempertahankan kualitas minuman kombucha dan harga yang stabil dan cukup
                            terjangkau.
                        </li>
                        <li class="mb-6 font-light md:text-lg lg:text-xl">
                            Mempertahankan kualitas dari segi rasa , harga, dan porsi yang stabil dengan
                            cara menjual produk yang layak dengan membeli bahan baku yang berkualitas.

                        </li>
                    </ul>


                </div>

                <div class="col-lg-6 d-flex">
                    <img src="{{ asset('assets/image/mission.png') }}" alt="mockup" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="container-fluid px-4 my-4 py-8 mx-auto gap-4 lg:py-16">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="fw-bold mb-3">Kontak <u class="text-warning"><span class="text-primary">Perusahaan</span></u>
                    </h1>
                    <div class="mb-3">
                        <h3 class="font-bold md:text-lg lg:text-xl">Instagram:</h3>
                        <a href="https://instagram.com/kombucha.fy?igshid=NzZlODBkYWE4Ng=="
                            class=" text-decoration-none md:text-lg lg:text-xl">
                            @kombucha.fy
                        </a>
                    </div>
                    <div class="mb-3">
                        <h3 class="font-bold md:text-lg lg:text-xl">WhatsApp:</h3>
                        <a href="https://wa.me/6285108929000" class=" text-decoration-none md:text-lg lg:text-xl">
                            +62 851-0892-9000
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 d-flex">
                    <img src="{{ asset('assets/image/contact.png') }}" alt="mockup" class="img-fluid">
                </div>
            </div>
        </div>

        <div class="py-8  bg-light-gradient-top ">
            <div class="container">
                <div class="row mb-8 justify-content-center">
                    <!-- caption -->
                    <div class="col-lg-8 col-md-12 col-12 text-center">

                        <h1 class="fw-bold mb-3">Tim <u class="text-warning"><span
                                    class="text-primary">Kami</span></u>
                        </h1>
                        <p class="lead">Inilah wajah-wajah dibalik bisnis KOMFY</p>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12" style="height:82vh">
                        <!-- card -->
                        <div class="card mb-4 card-hover">
                            <!-- img -->
                            <div class="card-img-top">
                                <img src="{{ asset('assets/image/ivana.jpg') }}" alt=""
                                    class="rounded-top-md img-fluid">
                            </div>
                            <!-- card body -->
                            <div class="card-body">
                                <h4 class="mb-0 fw-semibold text-center"> Ivana Ardelia </h4>
                                <p class="mb-3 text-center"> CEO </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <!-- card -->
                        <div class="card mb-4 card-hover">
                            <!-- img -->
                            <div class="card-img-top">
                                <img src="{{ asset('assets/image/ricky.jpg') }}" alt=""
                                    class="rounded-top-md img-fluid">
                            </div>
                            <!-- card body -->
                            <div class="card-body">
                                <h4 class="mb-0 fw-semibold text-center"> Alexander Ricky </h4>
                                <p class="mb-3 text-center"> CTO </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <!-- card -->
                        <div class="card mb-4 card-hover">
                            <!-- img -->
                            <div class="card-img-top">
                                <img src="{{ asset('assets/image/elysia.jpg') }}" alt=""
                                    class="rounded-top-md img-fluid">
                            </div>
                            <!-- card body -->
                            <div class="card-body">
                                <h4 class="mb-0 fw-semibold text-center"> Elysia Vianna </h4>
                                <p class="mb-3 text-center"> COO </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <!-- card -->
                        <div class="card mb-4 card-hover">
                            <!-- img -->
                            <div class="card-img-top">
                                <img src="{{ asset('assets/image/darren.jpg') }}" alt=""
                                    class="rounded-top-md img-fluid">
                            </div>
                            <!-- card body -->
                            <div class="card-body">
                                <h4 class="mb-0 fw-semibold text-center"> Darren Christopher </h4>
                                <p class="mb-3 text-center"> CFO </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <!-- card -->
                        <div class="card mb-4 card-hover">
                            <!-- img -->
                            <div class="card-img-top">
                                <img src="{{ asset('assets/image/evan.jpg') }}" alt=""
                                    class="rounded-top-md img-fluid">
                            </div>
                            <!-- card body -->
                            <div class="card-body">
                                <h4 class="mb-0 fw-semibold text-center"> Evan Febiyanto </h4>
                                <p class="mb-3 text-center"> CMO </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    @include('layouts.footer')
@endsection
