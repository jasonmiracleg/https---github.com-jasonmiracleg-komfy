@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="py-lg-16 py-6">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xxl-5 col-xl-6 col-lg-6 col-12">
                        <div>
                            <h1 class="display-2 fw-bold mb-3">Learn today’s most in-<u class="text-warning"><span
                                        class="text-primary">demand-skills</span></u></h1>
                            <p class="lead mb-4">Classes &amp; Courses website template to start creating your stunning
                                website. All
                                templates
                                are fully customizable.</p>
                            <ul class="list-unstyled mb-5">
                                <li class="mb-2">
                                    <img src="assets/image/verified_icon.png" alt=""
                                        style="width:24px; height:24px">
                                    <span class="ms-2">Sehat</span>
                                </li>
                                <li class="mb-2">
                                    <img src="assets/image/verified_icon.png" alt=""
                                        style="width:24px; height:24px">
                                    <span class="ms-2">Menyegarkan</span>
                                </li>
                                <li class="mb-2">
                                    <img src="assets/image/verified_icon.png" alt=""
                                        style="width:24px; height:24px">
                                    <span class="ms-2">Harga terjangkau</span>
                                </li>
                            </ul>
                            <a href="#!" class="btn btn-dark btn-lg">Check Our Product</a>
                        </div>
                    </div>
                    <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6 col-12 d-lg-flex justify-content-end">
                        <div class="mt-12 mt-lg-0 position-relative">

                            <img src="../assets/image/kombucha.JPG" alt="online course"
                                class="img-fluid rounded-4 z-1 position-relative" style="width: 26vw">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid px-4 py-8 mx-auto gap-4 lg:py-16">
            <div class="row">
                <div class="col-lg-5 d-flex">
                    <img src="image/vision_illustration.png" alt="mockup" class="img-fluid">
                </div>

                <div class="col-lg-7">
                    <h1 class="mb-6 text-xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl"
                        style="color: #5a4ae2">
                        Tujuan Perusahaan
                    </h1>
                    <h2 class="font-bold text-gray-500 md:text-lg lg:text-xl" style="color: #5a4ae2">Visi Kami</h2>
                    <p class="mb-6 font-light text-gray-700 md:text-lg lg:text-xl">
                        Membantu konsumen untuk membuat mobil selalu bersih dan membantu UMKM carwash untuk berkembang
                    </p>
                    <h2 class="font-bold text-gray-500 md:text-lg lg:text-xl">Misi Kami</h2>
                    <p class="mb-6 font-light text-gray-700 md:text-lg lg:text-xl">
                        Membuat aplikasi yang interaktif serta produk yang lebih murah dan efisien untuk carwash
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid px-4 py-8 mx-auto gap-4 lg:py-16">
            <div class="row">
                <div class="col-lg-7">
                    <h1 class="mb-6 text-xl font-bold tracking-tight leading-none md:text-5xl xl:text-6xl"
                        style="color: #5a4ae2">
                        Kontak Perusahaan
                    </h1>
                    <h2 class="font-bold text-gray-500 md:text-lg lg:text-xl">Email:</h2>
                    <p class="mb-3 font-light text-gray-700 md:text-lg lg:text-xl">
                        autogleam19@gmail.com
                    </p>
                    <div class="mb-3">
                        <h2 class="font-bold text-gray-500 md:text-lg lg:text-xl">Instagram:</h2>
                        <a href="https://instagram.com/autogleam_id?igshid=dWpiNnJwNGNwN2cy"
                            class="font-light text-gray-700 md:text-lg lg:text-xl">
                            @autogleam_id
                        </a>
                    </div>
                    <div class="mb-3">
                        <h2 class="font-bold text-gray-500 md:text-lg lg:text-xl">WhatsApp:</h2>
                        <a href="https://wa.me/6281336183669" class="font-light text-gray-700 md:text-lg lg:text-xl">
                            (+62) 813-3618-3669
                        </a>
                    </div>
                </div>

                <div class="col-lg-5 d-flex">
                    <img src="image/contact_us_illustration.png" alt="mockup" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
