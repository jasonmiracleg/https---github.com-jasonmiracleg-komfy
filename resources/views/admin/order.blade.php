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
                <th scope="col">Buyer Name</th>
                <th scope="col">Product</th>
                <th scope="col">Variant</th>
                <th scope="col">Quantity</th>
                <th scope="col">Order Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @php
                $latest_bill_id = 0;
            @endphp

            @foreach ($orders as $order)
                @if ($order->bill_id != null)
                    <tr>

                        <th scope="row"> {{ $order->bill_id }} </th>

                        @foreach ($users as $user)
                            @if ($order->user_id == $user->id)
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

                        <td> {{ $order->quantity }} </td>
                        <td> {{ $order->order_price }} </td>

                        <td>
                            @if ($latest_bill_id != $order->bill_id)
                                @foreach ($bills as $bill)
                                    @if ($bill->id == $order->bill_id)
                                        @if ($bill->is_cash == '1' || $bill->is_paid == '1')
                                            @if ($bill->is_cash == '1')
                                                <button type="button" class="btn btn-warning">
                                                    Akan dibayar cash
                                                </button>
                                            @else
                                                <button type="button" class="btn btn-warning">
                                                    Sudah dibayar
                                                </button>
                                            @endif
                                        @else
                                            <a href="/verify_is_paid/{{ $order->bill_id }}">
                                                <button type="button" class="btn btn-warning"> Pembayaran Transfer </button>
                                            </a>
                                            <a href="/verify_is_cash/{{ $order->bill_id }}">
                                                <button type="button" class="btn btn-success"> Pembayaran Cash </button>
                                            </a>
                                        @endif
                                    @endif
                                @endforeach
                                @php
                                    $latest_bill_id = $order->bill_id;
                                @endphp
                            @endif
                        </td>

                    </tr>
                @endif
            @endforeach

        </tbody>
    </table>
</body>

</html>
