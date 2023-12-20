@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="mt-3 fw-bolder text-center mb-3">Buat Pembukuan</h1>
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
                <form action="{{ route('admin.bookkeeping.update', $bookkeepingEdit) }}" method="POST">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="account_type" class="form-label">Tipe Akun</label>
                        <select name="account_type" id="account_type" class="form-select" required>
                            @foreach ($accounts as $account)
                                @if (old('account_type') == $account->id)
                                    <option value="{{ $account->id }}" selected>{{ $account->account_type }}</option>
                                @else
                                    <option value="{{ $account->id }}">{{ $account->account_type }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Judul Pembukuan</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Judul Pembukan" required value="{{ $bookkeepingEdit->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" rows="3" name="description" required>{{ $bookkeepingEdit->description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Jumlah Nominal</label>
                        <input type="number" class="form-control" id="amount" name="amount" required
                            value="{{ $bookkeepingEdit->amount }}" placeholder="Jumlah Nominal">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Pembukuan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
