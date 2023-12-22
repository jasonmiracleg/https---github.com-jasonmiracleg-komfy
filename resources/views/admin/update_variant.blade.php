@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <form method="POST" action="/update_admin_variant" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $variant->id }}" name="variant_id">

            <!-- Select Option -->
            <div class="mb-3">
                <label class="form-label" for="selectOne">Pilih Produk : </label>
                <select required class="form-select" name="product_id" aria-label="Default select example">
                    @foreach ($products as $product)
                        @if ($product->id == $variant->product_id)
                            <option selected>Produk Lama : {{ $product->product_name }}</option>
                        @endif
                    @endforeach
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Masukkan nama varian : </label>
                <input required type="text" id="textInput" class="form-control"
                    placeholder="Varian Lama : {{ $variant->variant_name }}" name="variant_name">
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput"> Harga Baru : </label>
                <input required type="number" id="textInput" class="form-control"
                    placeholder="Harga Lama : {{ $variant->price }}" name="price">
            </div>

            <!-- Select Option -->
            <div class="mb-3">
                <label class="form-label" for="selectOne"> Pilih Kategori : </label>
                <select required class="form-select" name="category_id" aria-label="Default select example">
                    @foreach ($categories as $category)
                        @if ($category->id == $variant->category_id)
                            <option selected>Kategori Lama : {{ $category->category_name }}</option>
                        @endif
                    @endforeach
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label">Gambar : </label>
                @foreach ($images as $image)
                    @if ($image->variant_id == $variant->id)
                        <img src="/assets/image/{{ $image->picture }}" style="max-height: 100px; max-width:100px;"
                            alt="">
                        <a href="/delete_single_image/{{ $image->id }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                    @endif
                @endforeach
                <input required type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple
                    accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Simpan</button>

        </form>
    </div>

    @include('layouts.footer')
@endsection
