@extends('layouts.app')

@section('content')
    <div class="mx-5">
        <form method="POST" action="/add">
            @csrf
            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Nama Produk : </label>
                <input required type="text" id="textInput" class="form-control" placeholder="Nama Produk Baru" name="product_name">
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Deskripsi Produk : </label>
                <input required type="text" id="textInput" class="form-control" placeholder="Deskripsi Produk Baru"
                    name="description">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Buat</button>

        </form>

    </div>

    @include('layouts.footer')
@endsection
