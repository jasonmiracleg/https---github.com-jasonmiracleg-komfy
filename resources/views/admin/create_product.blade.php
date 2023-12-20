@extends('layouts.app')

@section('content')
    <div class="mx-5">
        <form method="POST" action="/add">
            @csrf

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Product Name : </label>
                <input required type="text" id="textInput" class="form-control" placeholder="New Product Name" name="product_name">
            </div>

            <!-- Input -->
            <div class="mb-3">
                <label class="form-label" for="textInput">Product Description : </label>
                <input required type="text" id="textInput" class="form-control" placeholder="New Product Description"
                    name="description">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Create</button>

        </form>

    </div>

    @include('layouts.footer')
@endsection
