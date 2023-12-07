@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card my-5">
                <div class="card-header bg-primary">
                    <div class="">
                        <a href='{{ url('produk/') }}'>
                            <i class="fa fa-arrow-circle-left text-white" aria-hidden="true"></i>
                        </a>
                        <h5 class="d-inline fw-semibold text-white"> Data Produk</h5>
                    </div>
                </div>
                <form class="" action="{{ url('/produk') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Produk</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"
                                                aria-hidden="true"></i></span>
                                        <input name="nama" id="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="input nama-produk" aria-label="Nama Produk"
                                            aria-describedby="basic-addon1">
                                        <div class="invalid-feedback">
                                            @error('nama')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Deskripsi</label>
                                    <textarea type="text" name="deskripsi" id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror"
                                        cols="20" rows="4">
                                    </textarea>
                                    <div class="invalid-feedback">
                                        @error('deskripsi')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="" class="fw-semibold mb-3">Supplier</label>
                                        <select class="form-select @error('supplier_id') is-invalid @enderror"
                                            name="supplier_id" id="supplier_id">
                                            <option value="">--Pilih Supplier--</option>
                                            @foreach ($supplier as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">
                                            @error('supplier_id')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-tags"
                                                aria-hidden="true"></i></span>
                                        <input name="harga" id="harga" type="number" min="0" max="999999999"
                                            class="form-control text-secondary @error('harga') is-invalid @enderror"
                                            placeholder="input harga" aria-label="Harga" aria-describedby="basic-addon1">
                                        <div class="invalid-feedback">
                                            @error('harga')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Total Stok</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-bookmark"
                                                aria-hidden="true"></i></span>
                                        <input name=total_stok id="total_stok" type="number" min="0" max="99"
                                            class="form-control @error('total_stok') is-invalid @enderror"
                                            placeholder="input total-stok" aria-label="Total Stok"
                                            aria-describedby="basic-addon1">
                                        <div class="invalid-feedback">
                                            @error('total_stok')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Status</label>
                                    <select class="form-select @error('status') is-invalid @enderror" name="status">
                                        <option value="aktif">Aktif</option>
                                        <option value="nonaktif">Non Aktif</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-sm btn-primary" name="submit">
                                    <i class="fas fa-save" aria-hidden="true"></i> Simpan
                                </button>
                                <button type="reset" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-refresh" aria-hidden="true"></i> Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
