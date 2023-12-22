@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu Checkout</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Nomor HP </th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Varian</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @php
                    $latest_bill_id = 0;
                @endphp

                @foreach ($orders as $order)
                    @if ($order->bill_id != null)
                        <tr>

                            <th scope="row"> {{ $loop->index + 1 }} </th>

                            <td> {{ $order->updated_at }} </td>

                            @foreach ($users as $user)
                                @if ($order->user_id == $user->id)
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->telephone }} </td>
                                @endif
                            @endforeach

                            @foreach ($variants as $variant)
                                @if ($variant->id == $order->variant_id)
                                    @foreach ($products as $product)
                                        @if ($product->id == $variant->product_id)
                                            <td> {{ $product->product_name }} </td>
                                        @endif
                                    @endforeach
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
                                                    <button type="button" class="btn btn-success">
                                                        Akan dibayar cash
                                                    </button>
                                                @else
                                                    <button type="button" class="btn btn-warning">
                                                        Sudah dibayar
                                                    </button>
                                                @endif
                                            @else
                                                <a href="/verify_is_paid/{{ $order->bill_id }}">
                                                    <button type="button" class="btn btn-warning"> Pembayaran Transfer
                                                    </button>
                                                </a>
                                                <a href="/verify_is_cash/{{ $order->bill_id }}">
                                                    <button type="button" class="btn btn-success"> Pembayaran Cash
                                                    </button>
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
    </div>

    @include('layouts.footer')

@endsection
