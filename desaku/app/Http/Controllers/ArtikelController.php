<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class ArtikelController extends Controller
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
        $artikel = Artikel::all();
        return view('pages.web.artikel.main', ['artikel' => $artikel]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.artikel.input',  ['artikel' => new Artikel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { {
            $request->validate([
                'namakegiatan' => 'required|max:8000',
                'tanggal' => 'required',
                'hari' => 'required',
                'jam' => 'required',
                'tempatkegiatan' => 'required',
            ]);

            $artikel = new Artikel;
            $artikel->namakegiatan = $request->namakegiatan;
            $artikel->tanggal = $request->tanggal;
            $artikel->hari = $request->hari;
            $artikel->jam = $request->jam;
            $artikel->tempatkegiatan = $request->tempatkegiatan;

            $artikel->save();
            return redirect('artikel')->with('success', 'Data berhasil di tambahkan');
        }
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
    public function edit(Artikel $artikel)
    {
        return view('pages.web.artikel.input', ['artikel' => $artikel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Artikel $artikel)
    { {
            $request->validate([
                'namakegiatan' => 'required|max:8000',
                'tanggal' => 'required',
                'hari' => 'required',
                'jam' => 'required',
                'tempatkegiatan' => 'required',
            ]);

            $artikel->namakegiatan = $request->namakegiatan;
            $artikel->tanggal = $request->tanggal;
            $artikel->hari = $request->hari;
            $artikel->jam = $request->jam;
            $artikel->tempatkegiatan = $request->tempatkegiatan;

            $artikel->update();
            return redirect('artikel')->with('success', 'Update Data berhasil');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
