@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="/edit_product">
            @csrf
            <input type="hidden" value="{{ $recent_product_id }}" name="recent_product_id">
            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput"> Nama Produk Baru : </label>
                <input required type="text" id="textInput" class="form-control"
                    placeholder="Nama Produk Lama : {{ $product->product_name }}" name="product_name">
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput"> Deskripsi Produk Baru : </label>
                <input required type="text" id="textInput" class="form-control"
                    placeholder="Deskripsi Produk Lama : {{ $product->description }}" name="description">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Simpan</button>

        </form>
    </div>
    @include('layouts.footer')
@endsection
