<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sarana;

class SaranaController extends Controller
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
        $sarana = Sarana::all();
        return view('pages.web.sarana.main', ['sarana' => $sarana]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.web.sarana.input',  ['sarana' => new Sarana]);
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
            'jenis' => 'required|max:8000',
            'jumlah' => 'required',
        ]);

        $sarana = new Sarana;
        $sarana->jenis = $request->jenis;
        $sarana->jumlah = $request->jumlah;
        $sarana->save();

        return redirect('sarana')->with('success', 'Data berhasil di tambahkan');
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
    public function edit(Sarana $sarana)
    {
        return view('pages.web.sarana.input', ['sarana' => $sarana]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sarana $sarana)
    {
        $request->validate([
            'jenis' => 'required|max:8000',
            'jumlah' => 'required',
        ]);

        $sarana->jenis = $request->jenis;
        $sarana->jumlah = $request->jumlah;
        $sarana->update();

        return redirect('sarana')->with('success', 'Update Data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sarana $sarana)
    {
        $sarana->delete();
        return response()->json(['success' => 'Data berhasil dihapus']);
    }
}
