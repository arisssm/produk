@extends('layout.app')
@section('content')
    <div class="container mt-5">
        <h2 class="text-center mb-4">Toko Online</h2>
        <div class="row">
            <!-- Card Menu untuk Produk -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h5 class="card-title text-white">Menu Produk</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Ini adalah list daftar produk
                        </p>
                        <a href="{{url('/produk')}}" class="btn btn-sm btn-primary">Lihat Produk</a>
                    </div>
                </div>
            </div>

            <!-- Card Menu untuk Supplier -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h5 class="card-title text-white">Menu Supplier</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            Ini adalah list data supplier
                        </p>
                        <a href="{{url('/supplier')}}" class="btn btn-sm btn-danger">Lihat Supplier</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
