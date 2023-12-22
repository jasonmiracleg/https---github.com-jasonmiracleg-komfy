@extends('layouts.app')

@section('content')
    <div class="container pt-5">
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
                <form action="{{ route('testimony.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
                    <div class="mb-3">
                        <label for="description" class="form-label">Testimoni</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Testimoni</button>
                </form>
            </div>
        </div>
    </div>
@endsection
