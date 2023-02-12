<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TahunAjaran;

class TahunAjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor = 1;
        $tahun_ajaran = TahunAjaran::all();
        return view('tahun_ajaran.index',compact('nomor','tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tahun_ajaran.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tahun_ajaran = new TahunAjaran;

        $tahun_ajaran->tahun_ajaran = $request->tahun_ajaran;
        $tahun_ajaran->save();

        return redirect('/tahun_ajaran');
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
        $tahun_ajaran = TahunAjaran::find($id);
        return view('tahun_ajaran.edit',compact('tahun_ajaran'));
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
        $tahun_ajaran = TahunAjaran::find($id);

        $tahun_ajaran->tahun_ajaran = $request->tahun_ajaran;
        $tahun_ajaran->save();

        return redirect('/tahun_ajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tahun_ajaran = TahunAjaran::find($id);
        $tahun_ajaran->delete();

        return redirect('/tahun_ajaran');
    }
}
