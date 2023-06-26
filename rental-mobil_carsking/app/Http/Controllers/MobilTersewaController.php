<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Http\Request;

class MobilTersewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtSewa = Sewa::all();
        return view('Daftar_sewa.daftar_mobil_tersewa', compact('dtSewa'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Daftar_sewa.create_sewa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sewa::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'no_ktp' => $request->no_ktp,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'tujuan' => $request->tujuan,
            'sopir' => $request->sopir,
            'mobil_id' => $request->mobil_id,
        ]);

        return redirect('daftar_mobil_tersewa')->with('toast_success', 'sewa mobil berhasil di tambahkan!');
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
        $se = Sewa::findorfail($id);
        return view('Daftar_sewa.edit_sewa', compact('se'));
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
        $se = Sewa::findorfail($id);
        $se->update($request->all());
        return redirect('daftar_mobil_tersewa')->with('toast_success', 'Sewa mobil berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $se = Sewa::findorfail($id);
        $se->delete();

        return back()->with('info', 'Sewa mobil berhasil di hapus!');
    }
}
