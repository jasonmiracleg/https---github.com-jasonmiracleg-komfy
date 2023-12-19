@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Variant ID</th>
                <th scope="col">Variant Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category Name</th>
                <th scope="col">Product Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($variants as $variant)
                <tr>
                    <th scope="row"> {{ $variant->id }} </th>
                    <td> {{ $variant->variant_name }} </td>

                    <td> {{ $variant->price }} </td>

                    @foreach ($categories as $category)
                        @if ($category->id == $variant->category_id)
                            <td> {{ $category->category_name }} </td>
                        @endif
                    @endforeach

                    @foreach ($products as $product)
                        @if ($product->id == $variant->product_id)
                            <td> {{ $product->product_name }} </td>
                        @endif
                    @endforeach

                    <td>
                        <a href="/update_variant/{{ $variant->id }}">
                            <button type="button" class="btn btn-warning"> Update </button>
                        </a>
                    </td>

                    <td>
                        <a href="/delete_variant/{{ $variant->id }}">
                            <button type="button" class="btn btn-danger"> Delete </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/create_new_var">
        <button type="button" class="btn btn-success"> Create new </button>
    </a>
    @include('layouts.footer')

@endsection

