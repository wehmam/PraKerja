@extends('layout.master')
@section('title','Tambah Data')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">
                    Form Tambah Data
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-3">
                <form action="{{ route('prakerja.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="no_ktp">No KTP</label>
                        <input type="text" name="no_ktp" id="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" value="{{ old('no_ktp') }}">
                        @error('no_ktp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="orang_tua">Orang Tua</label>
                        <input type="text" name="orang_tua" id="orang_tua" class="form-control @error('orang_tua') is-invalid @enderror" value="{{ old('orang_tua') }}">
                        @error('orang_tua')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="nominal">Nominal</label>
                        <input type="text" name="nominal" id="nominal" class="form-control @error('nominal') is-invalid @enderror" value="{{ old('nominal') }}">
                        @error('nominal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="program">Program</label>
                        <select name="program" id="program" class="form-control" {{ old('program') }}>
                            @foreach($program as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                        @error('program')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Upload Foto</label>
                        <input type="file" name="foto" class="form-control-file @error('foto') is-invalid @enderror" id="foto">
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection