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
                <th scope="col">Bill ID</th>
                <th scope="col">Order ID</th>
                <th scope="col">Buyer Name</th>
                <th scope="col">Product</th>
                <th scope="col">Variant</th>
                <th scope="col">Quantity</th>
                <th scope="col">Order Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($bills as $bill)

                

                @foreach ($orders as $order)
                    <tr>

                        <th scope="row"> {{ $bill->id }} </th>
                        <td> {{ $order->id }}</td>

                        @foreach ($users as $user)
                            @if ($bill->user_id == $user->id)
                                <td> {{ $user->name }} </td>
                            @endif
                        @endforeach

                        @foreach ($products as $product)
                            @if ($order->product_id == $product->id)
                                <td> {{ $product->product_name }} </td>
                            @endif
                        @endforeach

                        @foreach ($variants as $variant)
                            @if ($order->variant_id == $variant->id)
                                <td> {{ $variant->variant_name }} </td>
                            @endif
                        @endforeach

                        @if ($is_access == false)

                        @endif

                    </tr>
                @endforeach
            @endforeach

        </tbody>
    </table>
</body>

</html>
