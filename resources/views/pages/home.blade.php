@extends('layout.master')
@section('title','Home')
@section('content')

<section style="background: url({{ Storage::url('assets/PraKerja/background.png') }});background-size:400px;background-repeat:no-repeat;;background-position-x:900px;">
    <div class="container mt-5">
        <div class="row mx-4">
            <div class="col-md-5 offset-1">
                <h2 class="text-primary font-weight-bold">Tingkatkan Kompetensi Kerja
                    dengan Kartu Prakerja</h2>
                <h5 class="mt-5" class="" style="line-height: 1.5em">Galau cari kerja? Pengen lebih kompeten?
                    Mau ngembangin diri tanpa pusing mikirin biaya?
                    Bekali dirimu dengan Kartu Prakerja dan
                    <b class="text-primary">#SiapDariSekarang</b></h5>
            </div>
        </div>
        <div class="row mx-4">
            <div class="col-md-6 offset-1">
                <a href="{{ route('prakerja.create') }}" class="btn btn-primary my-1">Daftar</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12 text-center">
                <h4 class="text-primary font-weight-bold">APA ITU KARTU PRAKERJA?</h4>
                <hr class="" style="border: 1px solid yellow;width:150px">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mt-3 text-center offset-2">
                <h6 class="">Kartu Prakerja adalah program <b>pengembangan kompetensi berupa bantuan biaya</b>
                    yang ditujukan untuk pencari kerja, pekerja ter-PHK atau pekerja yang membutuhkan peningkatan kompetensi.</h6>
            </div>
        </div>
    </div>
</section>
@endsection