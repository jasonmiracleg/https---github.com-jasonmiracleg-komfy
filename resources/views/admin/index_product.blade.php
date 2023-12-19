@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $product)
                <tr>
                    <th scope="row"> {{ $product->id }}</th>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="/delete_product/{{ $product->id }}">
                            <button type="button" class="btn btn-danger"> Delete </button>
                        </a>
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="/create_product">
        <button type="button" class="btn btn-success"> Create new </button>
    </a>
    @include('layouts.footer')

@endsection
