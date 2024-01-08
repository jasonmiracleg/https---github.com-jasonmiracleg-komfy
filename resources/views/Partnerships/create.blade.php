@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="card">
            <div class="card-header">
                <h1 class="mt-3 fw-bolder text-center mb-3">Buat Partnership</h1>
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
                <form action="{{ route('admin.partnership.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Partnership Name</label>
                        <input type="text" class="form-control" id="partnership_name" name="partnership_name"
                            placeholder="Partnership Name" required value="{{ old('partnership_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" rows="3" name="description" required>{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Link Partnership</label>
                        <input type="url" class="form-control" id="url" name="url"
                            required>{{ old('url') }}
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                            placeholder="Nomor Telepon" required value="{{ old('phone_number') }}">
                    </div>
                    <div class="mb-3">
                        <label for="partnership_picture" class="form-label">{{ __('Partnership Picture') }}</label>
                        <input type="file" name="partnership_picture" id="partnership_picture"
                            class="form-control @error('partnership_picture') is-invalid @enderror"
                            accept="image/jpg, image/png, image.jpeg" onchange="previewImage()" required>
                        @error('profile_picture')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <img class="img-preview img-fluid mt-3 col-sm-5">
                    </div>
                    <button type="submit" class="btn btn-primary">Buat Partnership</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#partnership_picture'); // Getting the id
            const imgPreview = document.querySelector('.img-preview'); // Getting the class

            imgPreview.style.display = 'block';

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);

            ofReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
