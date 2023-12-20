@extends('layouts.app')

@section('content')
    <div class="mx-5">
        <a href="/create_product">
            <button type="button" class="btn btn-success"> Buat Baru </button>
        </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                    <tr>
                        <th scope="row"> {{ $loop->index + 1 }}</th>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>

                            <a href="/update_product/{{ $product->id }}">
                                <button type="button" class="btn btn-warning"> Edit </button>
                            </a>
                            <a href="/delete_product/{{ $product->id }}">
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
