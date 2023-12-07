@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card my-5">
                <div class="card-header bg-primary">
                    <h5 class="fw-semibold text-white"> Data Supplier</h5>
                </div>
                <form class="" action="{{ url('/supplier') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama
                                        Supplier</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"
                                                aria-hidden="true"></i></span>
                                        <input name="nama" type="text"
                                            class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="input nama-supplier" aria-label="Nama Supplier"
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
                                    <textarea type="text" name="deskripsi" id="" class="form-control @error('deskripsi') is-invalid @enderror"
                                        cols="20" rows="4">
                                    </textarea>
                                    <div class="invalid-feedback">
                                        @error('deskripsi')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary" name="submit">
                                    <i class="fas fa-save" aria-hidden="true"></i> Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
