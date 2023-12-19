@extends('layouts.app')

@section('content')
    <form method="POST" action="/edit_product">
        @csrf
        <input type="hidden" value="{{ $recent_product_id }}" name="recent_product_id">
        <input type="hidden" value="{{ $recent_variant_id }}" name="recent_variant_id">
        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Product Name : {{ $product->product_name }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="New Product Name" name="product_name">
        </div>

        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Product Price : {{ $product->price }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="New Product Price" name="price">
        </div>

        <!-- Input -->
        <div class="mb-3">
            <label class="form-label" for="textInput">Product Description : {{ $product->description }} </label>
            <input type="text" id="textInput" class="form-control" placeholder="New Product Description"
                name="description">
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Variant</span></label>
            <select class="form-select" name="variant_id" aria-label="Default select example">
                <option selected>Recent variant : {{ $variant->variant_name }} </option>
                @foreach ($selectable_variant as $var)
                    <option value="{{ $var->id }}">{{ $var->variant_name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Option -->
        <div class="mb-3">
            <label class="form-label" for="selectOne">Select <span class="text-secondary">Category</span></label>
            @php
                $index_category = 0;
            @endphp

            @foreach ($categories as $category)
                @if ($category->id == $variant->category_id)
                    @php
                        $index_category = $category->id;
                    @endphp
                @endif
            @endforeach
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                    @if ($category->id == $index_category)
                        <option selected>Recent Category : {{ $category->category_name }}</option>
                    @endif
                @endforeach
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach
            </select>
        </div>


        <button type="submit" class="btn btn-primary mb-2">Save edit</button>

    </form>
    @include('layouts.footer')

@endsection

