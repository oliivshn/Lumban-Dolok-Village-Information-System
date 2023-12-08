<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
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
        $berita = Berita::all();
        return view('pages.web.berita.main', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.berita.input',  ['berita' => new Berita]);
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
                'judulberita' => 'required|max:8000',
                'deskripsi' => 'required',

            ]);

            $berita = new Berita;
            $berita->judulberita = $request->judulberita;
            $berita->deskripsi = $request->deskripsi;
            $berita->save();
            return redirect('berita')->with('success', 'Data berhasil di tambahkan');
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
    public function edit(Berita $beritum)
    {
        return view('pages.web.berita.input', ['berita' => $beritum]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $beritum)
    { {
            $request->validate([
                'judulberita' => 'required|max:8000',
                'deskripsi' => 'required',
            ]);
            $beritum->judulberita = $request->judulberita;
            $beritum->deskripsi = $request->deskripsi;
            $beritum->update();
            return redirect('berita')->with('success', 'Update Data berhasil');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $beritum)
    {
        $beritum->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
