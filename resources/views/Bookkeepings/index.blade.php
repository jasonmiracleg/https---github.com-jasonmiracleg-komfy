@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <div class="row d-flex justify-content-between">
            @foreach ($accounts as $account)
                <div class="col-lg-3 col-sm-6">
                    <a class="card border-0 text-decoration-none rounded-7 shadow mb-4" style="background-color: #fff3cd">
                        <div class="card-body">
                            <h2 class="fw-bolder">{{ $account->account_type }}</h2>
                            <h3 class="fw-semibold">{{ 'Rp ' . $totalsByType[$account->account_type] }}</h3>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div>
            @auth
                @if (Auth::user()->isAdmin())
                    <div>
                        <form action="{{ route('admin.bookkeeping.create') }}" method="GET">
                            <button class="btn btn-warning mb-3 text-white fw-bold"
                                href="{{ route('admin.bookkeeping.create') }}">
                                Tambah Pembukuan
                            </button>
                        </form>
                    </div>
                @endif
            @endauth
            <table class="table table-warning table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col" class="col-1">Tanggal Pembuatan</th>
                        <th scope="col">Tipe Akun</th>
                        <th scope="col" class="col-2">Judul</th>
                        <th scope="col" class="col-4">Deskripsi</th>
                        <th scope="col" class="col-2">Jumlah Nominal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookkeepings as $bookkeeping)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $bookkeeping->created_at }}</td>
                            <td>{{ $bookkeeping->bookkeeping->account_type }}</td>
                            <td>{{ $bookkeeping->title }}</td>
                            <td class="text-start">{{ $bookkeeping->description }}</td>
                            <td class="text-start">{{ 'Rp ' . number_format($bookkeeping->amount, 2, '.', ',') }}</td>
                            <td>
                                <div class="d-flex flex-lg-row flex-column gap-2">
                                    <form action="{{ route('admin.bookkeeping.edit', $bookkeeping) }}" method="GET">
                                        <button class="btn btn-primary fw-bold"
                                            href="{{ route('admin.bookkeeping.edit', $bookkeeping) }}">Edit
                                            Pembukuan</button>
                                    </form>
                                    <form action="{{ route('admin.bookkeeping.destroy', $bookkeeping) }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger fw-bold"
                                            href="{{ route('admin.bookkeeping.destroy', $bookkeeping) }}">
                                            Hapus Pembukuan
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div>
                {{ $bookkeepings->links() }}
            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
