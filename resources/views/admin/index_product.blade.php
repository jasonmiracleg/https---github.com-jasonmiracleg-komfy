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
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Variant Name</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($variants as $variant)
                <tr>

                    <th scope="row"> {{ $variant->product_id }} </th>

                    @foreach ($products as $product)
                        @if ($product->id == $variant->product_id)
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->price }}</td>

                        @endif
                    @endforeach

                    <td> {{ $variant->variant_name }} </td>

                    @foreach ($categories as $category)
                        @if ($category->id == $variant->category_id)
                            <td>{{ $category->category_name }}</td>
                        @endif
                    @endforeach

                    <td>
                        <a href="/show_product/{{ $variant->product_id }}/{{ $variant->id }}">
                            <button type="button" class="btn btn-primary"> Show </button>
                        </a>
                    </td>
                    <td>
                        <a href="/delete_product/{{ $variant->product_id }}/{{ $variant->id }}">
                            <button type="button" class="btn btn-danger"> Delete </button>
                        </a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="/create_product">
        <button type="button" class="btn btn-danger"> Create new </button>
    </a>

</body>

</html>
