@extends('layouts.app')

@section('content')
    <div class="mx-5">

        <form method="POST" action="/create_category">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="category_name" placeholder="Category Name"
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-success" type="submit" id="button-addon2">Buat</button>
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $category)
                    <tr>
                        <th scope="row"> {{ $loop->index + 1 }} </th>
                        <td> {{ $category->category_name }} </td>
                        <td>
                            <a href="/delete_category/{{ $category->id }}">
                                <button type="button" class="btn btn-danger"> Hapus </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    @include('layouts.footer')
@endsection
