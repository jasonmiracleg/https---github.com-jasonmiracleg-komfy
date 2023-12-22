@extends('layouts.app')

@section('content')
    <div class="container pt-5">

        <form method="POST" action="/create_variant" enctype="multipart/form-data">
            @csrf

            <!-- Select Option -->
            <div class="mb-3">
                <label class="form-label" for="selectOne">Pilih Produk : </label>
                <select required class="form-select" name="product_id" aria-label="Default select example">
                    <option selected>Pilih</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Nama Varian : </label>
                <input required type="text" id="textInput" class="form-control" placeholder="Nama Varian Baru"
                    name="variant_name">
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Harga : </label>
                <input required type="number" id="textInput" class="form-control" placeholder="Harga Baru" name="price">
            </div>

            <!-- Select Option -->
            <div class="mb-3">
                <label class="form-label" for="selectOne">Pilih Kategori : </label>
                <select required class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>Pilih</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>



            <!-- Input -->
            <div class="mb-3">
                <label class="form-label">Gambar : </label>
                <input required type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple
                    accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Buat</button>

        </form>
    </div>

    @include('layouts.footer')
@endsection
