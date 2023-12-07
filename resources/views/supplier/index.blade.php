@extends('layout.app');
@section('content')
    <div class="row">
        <div class="card-header ms-3">
            <a style="text-decoration: none" href="{{ url('/') }}">
                <span><i class="fa fa-arrow-circle-left text-primary me-3" aria-hidden="true"></i></span>
            </a>
            <h4 class="fw-bold text-secondary d-inline">List Data Supplier</h4>
        </div>
        <div class="col-lg-12 mb-5">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible show fade" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $item)
                    <div class="alert alert-danger alert-dismissible show fade" role="alert">
                        {{ $item }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="pb-3" style="">
                    <form class="d-flex" action="" method="get">
                        <input class="form-control me-1" type="search" name="katakunci" value=""
                            placeholder="Masukkan kata kunci" aria-label="Search">
                        <button class="btn btn-sm btn-danger" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <div class="pb-3" style="text-align: end">
                    <a href='{{ url('supplier/create') }}' class="btn btn-sm btn-primary">
                        <i class="fas fa-plus" aria-hidden="true"></i> Tambah Data</a>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md">Nama</th>
                            <th class="col-md">Deskripsi</th>
                            <th class="col-md">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->deskripsi }}</td>
                                <td class="">
                                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                                    <a href='' class="btn btn-danger btn-sm d-inline">Del</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
