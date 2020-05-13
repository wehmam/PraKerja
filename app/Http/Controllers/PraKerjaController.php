<?php

namespace App\Http\Controllers;

use App\model\Prakerja;
use App\Http\Requests\PraKerjaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PrakerjaController extends Controller
{
    public function landingPage()
    {
        return view('pages.home');
    }
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

        session()->flash('tambah',"Data {$data['nama']} Berhasil Disimpan!");
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
        $prakerja->find($prakerja->id);
        // dd($prakerja);
        return view('pages.detail',compact('prakerja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function edit(Prakerja $prakerja)
    {
        $prakerja->find($prakerja->id)->all();
        $program = ['Otomotif','Elektronik','Kecantikan','IT','Pembangunan'];
        return view('pages.formEdit',compact('prakerja','program'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function update(PraKerjaRequest $request, Prakerja $prakerja)
    {
       $dataId = $prakerja->find($prakerja->id);

       $data = $request->all();
       if($request->foto){
           Storage::delete('public/'.$dataId->foto);
           $data['foto'] = $request->file('foto')->store('assets/foto','public');
       }
       $dataId->update($data);
       session()->flash('edit',"Data {$data['nama']} Berhasil Di Edit!");
       return redirect()->route('prakerja.show',['prakerja' =>$prakerja->id]);
      
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prakerja  $prakerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prakerja $prakerja)
    {
        $prakerja->find($prakerja->id)->delete();
        Storage::delete('public/'.$prakerja->foto);
        session()->flash('hapus',"Data {$prakerja->nama} Berhasil Dihapus!");
        return redirect()->route('prakerja.index');
    }
}
