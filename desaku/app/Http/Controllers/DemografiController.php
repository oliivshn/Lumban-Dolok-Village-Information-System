<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\Demografi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DataPenduduk;

class DemografiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demografi = Demografi::all();
        return view('pages.web.demografi.main', compact('demografi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dusun = Dusun::all();
        return view('pages.web.demografi.input',  ['demografi' => new Demografi, 'dusun' => $dusun]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dusun_id' => 'required',
            'jumlah_KK' => 'required',
        ]);

        $demografi = new Demografi;
        $demografi->dusun_id = $request->dusun_id;
        $demografi->jumlah_KK = $request->jumlah_KK;

        $demografi->save();
        return redirect('demografi')->with('success', 'Data berhasil di tambahkan');
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
    public function edit(Demografi $demografi)
    {
        $dusun = Dusun::all();
        return view('pages.web.demografi.input', ['demografi' => $demografi, 'dusun' => $dusun]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demografi $demografi)
    {
        $request->validate([
            'dusun_id' => 'required',
            'jumlah_KK' => 'required',
        ]);

        $demografi->dusun_id = $request->dusun_id;
        $demografi->jumlah_KK = $request->jumlah_KK;
        $demografi->update();

        return redirect('demografi')->with('success', 'Update Data berhasil');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demografi $demografi)
    {
        $demografi->delete();
        return response()->json(['success' => 'Data berhasil di hapus']);
    }
}
