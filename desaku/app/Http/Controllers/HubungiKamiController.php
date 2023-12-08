<?php

namespace App\Http\Controllers;

use App\Models\HubungiKami;
use Illuminate\Http\Request;

class HubungiKamiController extends Controller
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
        $data = HubungiKami::all();
        return view('pages.web.hubungikami.main', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.hubungikami.input', ['hubungiKami' => new HubungiKami]);
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
            'jabatan' => 'required',
            'nomortelepon' => 'required|max:16',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);
        if ($request->hasfile('gambar')) {

            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'image';
            $file->move($tujuanFile, $namaFile);
        }
        // $nomor= $request->input('nomortelepon');
        // $format="62".$nomor;

        $hubungikami = new HubungiKami();
        $hubungikami->nama = $request->nama;
        $hubungikami->jabatan = $request->jabatan;
        $hubungikami->nomortelepon = $request->nomortelepon;
        $hubungikami->gambar = $namaFile;
        $hubungikami->save();
        return redirect('hubungikami')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HubungiKami  $hubungiKami
     * @return \Illuminate\Http\Response
     */
    public function show(HubungiKami $hubungiKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HubungiKami  $hubungiKami
     * @return \Illuminate\Http\Response
     */
    public function edit($hubungiKami)
    {
        $hubungiKami = HubungiKami::find($hubungiKami);
        return view('pages.web.hubungikami.input', compact('hubungiKami'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HubungiKami  $hubungiKami
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HubungiKami $hubungikami)
    {

        $request->validate([
            'nama' => 'required|max:8000',
            'jabatan' => 'required',
            'nomortelepon' => 'required',
        ]);

        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'image';

            $file->move($tujuanFile, $namaFile);
            $hubungikami->gambar = $namaFile;
        }

        $hubungikami->nama = $request->nama;
        $hubungikami->jabatan = $request->jabatan;
        $hubungikami->nomortelepon = $request->nomortelepon;
        $hubungikami->save();

        return redirect('hubungikami')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HubungiKami  $hubungiKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(HubungiKami $hubungikami)
    {
        $hubungikami->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
