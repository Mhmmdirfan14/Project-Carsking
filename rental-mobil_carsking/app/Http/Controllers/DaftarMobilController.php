<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class DaftarMobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMobil = mobil::all();
        return view('Daftar_mobil.daftar_mobil', compact('dtMobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Daftar_mobil.create_mobil');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mobil::create([
            'id' => $request->id,
            'nopol' => $request->nopol,
            'warna' => $request->warna,
            'harga_sewa' => $request->harga_sewa,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun,
            'sopir' => $request->sopir,
            'merk_id' => $request->merk_id,
        ]);

    
        return redirect('daftar_mobil')->with('toast_success', 'Data mobil berhasil di tambahkan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mo = Mobil::findorfail($id);
        return view('Daftar_mobil.edit_mobil', compact('mo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mo = Mobil::findorfail($id);
        $mo->update($request->all());
        return redirect('daftar_mobil')->with('toast_success', 'Data mobil berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mo = Mobil::findorfail($id);
        $mo->delete();

        return back();
        return redirect('daftar_mobil')->with('info', 'Data mobil berhasil di hapus!');
    }
}
