<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
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
        $galeri = Galeri::get();
        return view('pages.web.galeri.main', ['galeri' => $galeri]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.galeri.input',  ['galeri' => new Galeri]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGaleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $request->validate([
                'nama' => 'required',
                'deskripsi' => 'required',
                'gambar' => 'required',
            ]);
            $file = $request->file('gambar');
            $namaFile = $file->getClientOriginalName();
            $tujuanFile = 'asset/gambar';

            $file->move($tujuanFile, $namaFile);

            $galeri = new Galeri;
            $galeri->nama = $request->nama;
            $galeri->deskripsi = $request->deskripsi;
            $galeri->gambar = $namaFile;
            $galeri->save();
            return redirect('galeri')->with('success', 'Data berhasil di tambahkan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('pages.web.galeri.input', ['galeri' => $galeri]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGaleriRequest  $request
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $galeri)
    { {
            $request->validate([
                'nama' => 'required|max:8000',
                'deskripsi' => 'required',
            ]);
            if ($request->hasfile('gambar')) {
                $file = $request->file('gambar');
                $namaFile = $file->getClientOriginalName();
                $tujuanFile = 'asset/gambar';

                $file->move($tujuanFile, $namaFile);

                Galeri::where('id', $galeri)->update([
                    'nama' => $request->nama,
                    'gambar' =>  $namaFile,
                    'deskripsi' =>  $request->deskripsi
                ]);
            } else {
                Galeri::where('id', $galeri)->update([
                    'nama' => $request->nama,
                    'deskripsi' =>  $request->deskripsi
                ]);
            }

            return redirect('galeri')->with('success', 'Update Data berhasil');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $galeri->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
