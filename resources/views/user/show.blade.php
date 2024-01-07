@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3 d-flex justify-content-center">
                        <img src="/assets/image/{{ $product_picture[0]->picture }}"
                            style="max-width: 100%; max-height: 60vh; margin: auto;" />
                    </div>
                    <div class="d-flex justify-content-center mb-3">
                        @foreach ($product_picture as $pict)
                            <img style="padding-left: 6px" width="60" height="80"
                                src="/assets/image/{{ $pict->picture }}" />
                        @endforeach
                    </div>
                </div>

                <div class="col-md-6">
                    <form action="{{ route('member.cart') }}" method="POST" enctype="multipart/form-data" id="cartForm">
                        @csrf
                        <div class="main-content">
                            @php($quantity = 0)
                            <h4 class="title text-dark fw-bold mb-3">{{ $product->product_name }} -
                                {{ $variant->variant_name }}</h4>
                            <h5 name="product_price" class="h5 mb-3"> Rp. {{ $variant->price }} /item</h5>

                            <div class="mb-3">
                                <label>Kategori : {{ $category->category_name }}</label>
                            </div>

                            <div class="mb-3">
                                <label>Deskripsi : {{ $product->description }}</label>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="textInput">Jumlah : </label>
                                <div class="d-flex gap-3">
                                    <button type="button" class="btn btn-outline-secondary" id="decrement">-</button>
                                    <h1 id="quantity">1</h1>
                                    <button type="button" class="btn btn-outline-secondary" id="increment">+</button>
                                </div>
                                <input type="hidden" name="quantity" id="hiddenQuantity">
                            </div>
                            <br>
                            {{-- <div class="col-md-6">
                                <label class="form-label" for="textInput">Jumlah : </label>
                                <livewire:counter />
                                <input type="hidden" name="quantity" wire:model="count" required>
                                <input type="number" name="quantity" min="1" class="form-control mb-3" required
                                    placeholder="Input Jumlah">
                            </div> --}}
                            <input type="hidden" name="product_id" value="{{ $product->id }}">
                            <input type="hidden" name="variant_id" value="{{ $variant->id }}">
                            <input type="hidden" name="price" value="{{ $variant->price }}">
                            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::id() }}">
                            <button class="btn btn-success border border-secondary icon-hover px-3" type="submit">
                                Tambah ke Keranjang
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            // Initial quantity value
            var quantity = 1;

            // Update the quantity text
            function updateQuantity() {
                $('#quantity').text(quantity);
                $('#hiddenQuantity').val(quantity)
            }

            // Increment button click event
            $('#increment').on('click', function() {
                quantity++;
                updateQuantity();
            });

            // Decrement button click event
            $('#decrement').on('click', function() {
                quantity = Math.max(1, quantity - 1);
                updateQuantity();
            });
        });
    </script>
    @include('layouts.footer')
@endsection
