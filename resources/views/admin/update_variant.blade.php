@extends('layouts.app')

@section('content')
    <form method="POST" action="/update_admin_variant" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{ $variant->id }}" name="variant_id">
        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Recent Variant Name : {{ $variant->variant_name }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="Variant Name" name="variant_name">
        </div>

        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Recent Price : {{ $variant->price }} </label>
            <input type="number" id="textInput" class="form-control" placeholder="Price" name="price">
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Category</span></label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                    @if ($category->id == $variant->category_id)
                        <option selected>Recent Category : {{ $category->category_name }}</option>
                    @endif
                @endforeach
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Product</span></label>
            <select class="form-select" name="product_id" aria-label="Default select example">
                @foreach ($products as $product)
                    @if ($product->id == $variant->product_id)
                        <option selected>Recent Product : {{ $product->product_name }}</option>
                    @endif
                @endforeach
                @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Input -->
        <div class="mb-3">
            <label class="form-label">Image : </label>
            @foreach ($images as $image)
                @if ($image->variant_id == $variant->id)
                    <img src="/assets/image/{{ $image->picture }}" style="max-height: 100px; max-width:100px;"
                        alt="">
                    <a href="/delete_single_image/{{ $image->id }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                @endif
            @endforeach
            <input type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple
                accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary mb-2">Submit</button>

    </form>
    @include('layouts.footer')

@endsection

