@extends('layout.master')
@section('title','Home')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1 class="font-weight-bold  text-center">Home</h1>                
                <hr>
                <a href="{{ route('prakerja.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('tambah'))
                    <div class="alert alert-danger">{{ session()->get('tambah') }}</div>
                @endif
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">foto</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($daftar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>
                                    <img src="{{ Storage::url($item->foto) }}" width="150" alt="">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection