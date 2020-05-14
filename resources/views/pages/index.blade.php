@extends('layout.master')
@section('title','Home')
@section('index','active')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h1 class="font-weight-bold  text-center">Pendaftar Prakerja</h1>                
                <hr>
                <a href="{{ route('prakerja.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('tambah'))
                    <div class="alert alert-success">{{ session()->get('tambah') }}</div>
                @elseif(session()->has('edit'))
                    <div class="alert alert-warning">{{ session()->get('edit') }}</div>
                @elseif(session()->has('hapus'))
                    <div class="alert alert-danger">{{ session()->get('hapus') }}</div>
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
                                <td>
                                    <a href="{{ route('prakerja.show',$item->id) }}">{{ $item->nama }}</a>
                                </td>
                                <td>
                                    <img src="{{ Storage::url($item->foto) }}" width="150" alt="">
                                </td>
                                <td>
                                    <form action="{{ route('prakerja.destroy',$item->id) }}"  method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin Ingin Menghapus Data {{ $item->nama }} ini!')">Hapus</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection