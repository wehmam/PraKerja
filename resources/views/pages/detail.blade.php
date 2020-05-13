@extends('layout.master')
@section('title','Detail')
@section('index','active')
@section('content')

<div class="container">
    <div class="row mt-5 text-center">
        <div class="col-md-6">
            <h1>{{ $prakerja->nama }}</h1>
        </div>
        <div class="col-md-6">
            <a href="{{ route('prakerja.edit',$prakerja->id,'edit') }}" class="btn btn-warning">Edit</a>
            <a href="{{ route('prakerja.index') }}" class="mr-3 btn btn-secondary">Home</a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6 offset-3">
            @if(session()->has('tambah'))
            <div class="alert alert-success">{{ session()->get('tambah') }}</div>
             @elseif(session()->has('edit'))
            <div class="alert alert-warning">{{ session()->get('edit') }}</div>
             @elseif(session()->has('hapus'))
            <div class="alert alert-danger">{{ session()->get('hapus') }}</div>
             @endif
            <ul class="list-group">
                <li class="list-group-item">No KTP : {{ $prakerja->no_ktp }}</li>
                <li class="list-group-item">Nama : {{ $prakerja->nama }}</li>
                <li class="list-group-item">Orang Tua : {{ $prakerja->orang_tua }}</li>
                <li class="list-group-item">Program : {{ $prakerja->program }}</li>
                <img src="{{ Storage::url($prakerja->foto) }}" class="img-thumbnail mx-auto mt-3" width="250" alt="">
            </ul>
        </div>
    </div>
</div>

@endsection