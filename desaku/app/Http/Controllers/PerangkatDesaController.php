<?php

namespace App\Http\Controllers;

use App\Models\PerangkatDesa;
use Illuminate\Http\Request;

class PerangkatDesaController extends Controller
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
        $perangkatDesa = PerangkatDesa::get();
        return view('pages.web.perangkatdesa.main', ['perangkatDesa' => $perangkatDesa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.perangkatdesa.input',  ['perangkatDesa' => new PerangkatDesa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerangkatDesaRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    { {
            $request->validate([
                'nama' => 'required',
                'jabatan' => 'required',
                'tanggal_lahir' => 'required',
                'nohp' => 'required',
                'email' => 'required',
                'gambar' => 'required',

            ]);
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'asset/gambar';

            $file->move($tujuanFile, $namaFile);

            $perangkatdesa = new perangkatdesa;
            $perangkatdesa->nama = $request->nama;
            $perangkatdesa->jabatan = $request->jabatan;
            $perangkatdesa->tanggal_lahir = $request->tanggal_lahir;
            $perangkatdesa->nohp = $request->nohp;
            $perangkatdesa->email = $request->email;
            $perangkatdesa->gambar = $namaFile;
            $perangkatdesa->save();
            return redirect('perangkatdesa')->with('success', 'Data berhasil di tambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function show(PerangkatDesa $perangkatdesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function edit(PerangkatDesa $perangkatdesa)
    {
        return view('pages.web.perangkatdesa.input', ['perangkatDesa' => $perangkatdesa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerangkatDesaRequest  $request
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PerangkatDesa $perangkatdesa)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tanggal_lahir' => 'required',
            'nohp' => 'required',
            'email' => 'required',
            'gambar' => 'required',

        ]);
        $file = $request->file('gambar');
        $namaFile = $file->getClientOriginalName();
        $tujuanFile = 'asset/gambar';

        $file->move($tujuanFile, $namaFile);

        $perangkatdesa->nama = $request->nama;
        $perangkatdesa->jabatan = $request->jabatan;
        $perangkatdesa->tanggal_lahir = $request->tanggal_lahir;
        $perangkatdesa->nohp = $request->nohp;
        $perangkatdesa->email = $request->email;
        $perangkatdesa->gambar = $namaFile;
        $perangkatdesa->update();

        return redirect('perangkatdesa')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PerangkatDesa  $perangkatDesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(PerangkatDesa $perangkatdesa)
    {

        $perangkatdesa->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
