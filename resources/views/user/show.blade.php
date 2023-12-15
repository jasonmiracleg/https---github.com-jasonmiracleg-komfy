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
                                <img style="padding-left: 6px" width="60" height="80" src="/assets/image/{{ $pict->picture }}" />
                            @endif
                        @endforeach

                    </div>

                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            {{ $product->product_name }}
                        </h4>
                        <div class="d-flex flex-row my-3"></span>
                            <span class="text-success">In stock</span>
                        </div>

                        <div class="mb-3">
                            <span class="h5"> {{ $product->price }} </span>
                            <span class="text-muted">/per item</span>
                        </div>

                        <p>
                            {{ $product->description }}
                        </p>

                        <div class="row mb-4">
                            <div class="col-md-4 col-6">
                                <label class="mb-2">Category</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                </select>
                            </div>

                            <div class="col-md-4 col-6">
                                <label class="mb-2">Variant</label>
                                <select class="form-select border border-secondary" style="height: 35px;">
                                    <option>Small</option>
                                    <option>Medium</option>
                                    <option>Large</option>
                                </select>
                            </div>

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

                        <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i>
                            Add to cart </a>
                        <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i
                                class="me-1 fa fa-heart fa-lg"></i> Back </a>
                    </div>
                </main>
            </div>
        </div>
    </section>
    <!-- content -->

</body>

</html>
