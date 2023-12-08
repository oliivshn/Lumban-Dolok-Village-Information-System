<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class KritikSaranController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kritik = KritikSaran::all();
        return view('pages.web.kritik.main', ['kritik' => $kritik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.kritik.input',  ['kritik' => new KritikSaran]);
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
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'kritik_saran' => 'required|max:8000',
        ]);

        $kritik = new KritikSaran;
        $kritik->nama = $request->nama;
        $kritik->alamat = $request->alamat;
        $kritik->nomor_telepon = $request->nomor_telepon;
        $kritik->kritik_saran = $request->kritik_saran;

        $kritik->save();
        return redirect()->route('kritik_saran.create')->with('success', 'Kritik dan saran berhasil dikirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(KritikSaran $kritik_saran)
    {
        $kritik_saran->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
