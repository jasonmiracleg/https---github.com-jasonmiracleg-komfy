<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>

<body>
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

        <div class="py-8 bg-light-gradient-top ">
            <div class="container">
                <div class="row mb-8 justify-content-center">
                    <!-- caption -->
                    <div class="col-lg-8 col-md-12 col-12 text-center">
                        <h2 class="mb-2 display-4 fw-bold">Our <u class="text-warning"><span
                                    class="text-primary">Product</span></u></h2>
                    </div>
                </div>
                <!-- row -->
                <div class="row">

                    @foreach ($products as $product)

                        <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                            <!-- card -->
                            <div class="card mb-4 card-hover">

                                @foreach ($product_picture as $product_pict)
                                   
                                    @if ($product_pict->product_id == $product->id)

                                        <!-- img -->
                                        <div class="card-img-top">
                                            <img src="/assets/image/{{ $product_pict->picture }}" alt=""
                                                class="rounded-top-md img-fluid" style="height56vh; width:100%">
                                        </div>
                                        @break

                                    @endif

                                @endforeach

                                <!-- card body -->
                                <div class="card-body">
                                    <h3 class="mb-0 fw-semibold text-center"> <a href="#"
                                            class="text-inherit">{{ $product->product_name }}</a></h3>

                                    <h5 class="mb-0 fw-semibold text-center"> {{ $product->price }} </h5>
                                    <!-- Button Block -->
                                    <div class="d-flex justify-content-center">
                                        <a href="/show/{{ $product->id }}">
                                            <button class="btn btn-primary" type="button">View Product</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>

        @include('layouts/footer')
    </div>

</body>

</html>
