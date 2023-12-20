@extends('layouts.app')

@section('content')
    <div class="mx-5">
        <a href="/create_new_var">
            <button type="button" class="btn btn-success"> Create new </button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No </th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Varian</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($variants as $variant)
                    <tr>
                        <th scope="row"> {{ $loop->index + 1 }} </th>

                        @foreach ($products as $product)
                            @if ($product->id == $variant->product_id)
                                <td> {{ $product->product_name }} </td>
                            @endif
                        @endforeach

                        <td> {{ $variant->variant_name }} </td>

                        @foreach ($categories as $category)
                            @if ($category->id == $variant->category_id)
                                <td> {{ $category->category_name }} </td>
                            @endif
                        @endforeach

                        <td> {{ $variant->price }} </td>


                        <td>
                            <a href="/update_variant/{{ $variant->id }}">
                                <button type="button" class="btn btn-warning"> Update </button>
                            </a>
                            <a href="/delete_variant/{{ $variant->id }}">
                                <button type="button" class="btn btn-danger"> Hapus </button>
                            </a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('layouts.footer')
@endsection
