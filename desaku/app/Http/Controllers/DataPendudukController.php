<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DataPendudukController extends Controller
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
        $datapenduduk = DataPenduduk::all();
        return view('pages.web.datapenduduk.main', ['datapenduduk' => $datapenduduk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dusun = Dusun::all();
        return view('pages.web.datapenduduk.input',  ['datapenduduk' => new DataPenduduk, 'dusun' => $dusun]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDataPendudukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dusun_id' => 'required',
            'nama' => 'required|max:8000',
            'alamat' => 'required',
            'nomortelepon' => 'required',
            'jeniskelamin' => 'required',
        ], [
            'dusun_id.required' => 'Dusun tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'nomortelepon.required' => 'Nomor telepon tidak boleh kosong',
            'jeniskelamin.required' => 'Jenis kelamin tidak boleh kosong',
        ]);

        $datapenduduk = new DataPenduduk;
        $datapenduduk->dusun_id = $request->dusun_id;
        $datapenduduk->nama = $request->nama;
        $datapenduduk->alamat = $request->alamat;
        $datapenduduk->nomortelepon = $request->nomortelepon;
        $datapenduduk->jeniskelamin = $request->jeniskelamin;
        $datapenduduk->save();

        return redirect('datapenduduk')->with('success', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function show(DataPenduduk $dataPenduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPenduduk $datapenduduk)
    {
        $dusun = Dusun::all();
        return view('pages.web.datapenduduk.input', ['datapenduduk' => $datapenduduk, 'dusun' => $dusun]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDataPendudukRequest  $request
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPenduduk $datapenduduk)
    {
        $request->validate([
            'dusun_id' => 'required',
            'nama' => 'required|max:8000',
            'alamat' => 'required',
            'nomortelepon' => 'required',
            'jeniskelamin' => 'required',
        ], [
            'dusun_id.required' => 'Dusun tidak boleh kosong',
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'nomortelepon.required' => 'Nomor telepon tidak boleh kosong',
            'jeniskelamin.required' => 'Jenis kelamin tidak boleh kosong',
        ]);


        $datapenduduk->dusun_id = $request->dusun_id;
        $datapenduduk->nama = $request->nama;
        $datapenduduk->alamat = $request->alamat;
        $datapenduduk->nomortelepon = $request->nomortelepon;
        $datapenduduk->jeniskelamin = $request->jeniskelamin;
        $datapenduduk->update();

        return redirect('datapenduduk')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPenduduk  $dataPenduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPenduduk $datapenduduk)
    {
        $datapenduduk->delete();
        return response()->json(['success' => 'Data berhasil di hapus']);
    }
}
