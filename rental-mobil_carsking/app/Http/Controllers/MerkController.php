<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtMerk = Merk::all();
        return view('Merk_mobil.merk_mobil', compact('dtMerk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Merk_mobil.create_merk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Merk::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'tipe' => $request->tipe,
        ]);

        return redirect('merk_mobil')->with('toast_success', 'Merk mobil berhasil di tambahkan!');
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
        $me = Merk::findorfail($id);
        return view('Merk_mobil.edit_merk', compact('me'));
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
        $me = Merk::findorfail($id);
        $me->update($request->all());
        return redirect('merk_mobil')->with('toast_success', 'Merk mobil berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $me = Merk::findorfail($id);
        $me->delete();

        return back()->with('info', 'Merk mobil berhasil di hapus!');
    }
}
