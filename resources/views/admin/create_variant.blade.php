@extends('layouts.app')

@section('content')
    <div class="mx-5">

        <form method="POST" action="/create_variant" enctype="multipart/form-data">
            @csrf
            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Variant Name </label>
                <input required type="text" id="textInput" class="form-control" placeholder="Variant Name" name="variant_name">
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Price </label>
                <input required type="number" id="textInput" class="form-control" placeholder="Price" name="price">
            </div>

            <!-- Select Option -->
            <div class="mb-3">
                <label class="form-label" for="selectOne">Select <span class="text-secondary">Category</span></label>
                <select required class="form-select" name="category_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Select Option -->
            <div class="mb-3">
                <label class="form-label" for="selectOne">Select <span class="text-secondary">Product</span></label>
                <select required class="form-select" name="product_id" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->product_name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label">Image </label>
                <input required type="file" id="input-file-now-custom-3" class="form-control" name="images[]" multiple
                    accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Submit</button>

        </form>
    </div>

    @include('layouts.footer')
@endsection
