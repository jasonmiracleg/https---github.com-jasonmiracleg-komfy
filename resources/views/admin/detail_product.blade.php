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
    <form method="POST" action="/edit_product">
        @csrf
        <input type="hidden" value="{{ $recent_product_id }}" name="recent_product_id">
        <input type="hidden" value="{{ $recent_variant_id }}" name="recent_variant_id">
        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Product Name : {{ $product->product_name }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="New Product Name" name="product_name">
        </div>

        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Product Price : {{ $product->price }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="New Product Price" name="price">
        </div>

        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Product Description : {{ $product->description }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="New Product Description" name="description">
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Variant</span></label>
            <select class="form-select" name="variant_id" aria-label="Default select example">
                <option selected>Recent variant : {{ $variant->variant_name }} </option>
                @foreach ($selectable_variant as $var)
                    <option value="{{ $var->id }}">{{ $var->variant_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Category</span></label>
            @php
                $index_category = 0;
            @endphp

            @foreach ($categories as $category)
                @if ($category->id == $variant->category_id)
                    @php
                        $index_category = $category->id;
                    @endphp
                @endif
            @endforeach
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                    @if ($category->id == $index_category)
                        <option selected>Recent Category : {{ $category->category_name }}</option>
                    @endif
                @endforeach
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary mb-2">Save edit</button>

    </form>
</body>

</html>
