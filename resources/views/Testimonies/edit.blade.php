@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="mt-3 fw-bolder text-center mb-3">Buat Testimoni Anda</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('testimony.update', $testimonyEdit) }}" method="POST">
                    @method('put')
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
                    <div class="mb-3">
                        <label for="description" class="form-label">Testimoni</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $testimonyEdit->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Testimoni</button>
                </form>
            </div>
        </div>
    </div>
@endsection