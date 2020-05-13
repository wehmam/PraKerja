<?php

namespace App\Http\Controllers;

use App\Prakerja;
use App\Http\Requests\PraKerjaRequest;
use Illuminate\Http\Request;

class PrakerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar = Prakerja::all();
        return view('pages.index',compact('daftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $program = ['Otomotif','Elektronik','Kecantikan','IT','Pembangunan'];
        return view('pages.formCreate',['program'=>$program]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PraKerjaRequest $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('assets/foto','public');
        Prakerja::create($data);

        session()->flash('tambah',"Data Berhasil {$data['nama']} Disimpan!");
        return redirect()->route('prakerja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function show(Prakerja $prakerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Prakerja $prakerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prakerja $prakerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prakerja $prakerja)
    {
        //
    }
}
