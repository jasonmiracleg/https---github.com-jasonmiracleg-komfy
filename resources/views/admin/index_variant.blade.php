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
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Variant ID</th>
                <th scope="col">Variant Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Product Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($variants as $variant)
                <tr>
                    <th scope="row"> {{ $variant->id }} </th>
                    <td> {{ $variant->variant_name }} </td>

                    @foreach ($categories as $category)
                        @if ($category->id == $variant->category_id)
                            <td> {{ $category->category_name }} </td>
                        @endif
                    @endforeach

                    @foreach ($products as $product)
                        @if ($product->id == $variant->product_id)
                            <td> {{ $product->product_name }} </td>
                        @endif
                    @endforeach

                    <td>
                        <a href="/delete_variant/{{ $variant->id }}">
                            <button type="button" class="btn btn-danger"> Delete </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form method="POST" action="/create_variant">
        @csrf
        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Variant Name </label>
            <input type="text" id="textInput" class="form-control" placeholder="Variant Name" name="variant_name">
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Category</span></label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Product</span></label>
            <select class="form-select" name="product_id" aria-label="Default select example">
                <option selected>Open this select menu</option>
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>
</body>

</html>
