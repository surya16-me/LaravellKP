<?php

namespace App\Http\Controllers;

use App\Models\Bengkels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BengkelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bengkels = DB::table('bengkels')->paginate(4);

        return view('bengkels.index', ['bengkels' => $bengkels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bengkels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'ket' => 'required',
        ]);

        Bengkels::create($request->all());

        return redirect()->route('bengkels.index')->with('success', 'Data Bengkel Sukses Diinput');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bengkels  $bengkels
     * @return \Illuminate\Http\Response
     */
    public function show(Bengkels $bengkel)
    {
        //
        return view('bengkels.show', compact('bengkel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bengkels  $bengkels
     * @return \Illuminate\Http\Response
     */
    public function edit(Bengkels $bengkel)
    {
        //
        return view('bengkels.edit',compact('bengkel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bengkels  $bengkels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bengkels $bengkels)
    {
        //
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'ket' => 'required',
        ]);

        $bengkels->update($request->all());

        return redirect()->route('bengkels.index')
                        ->with('success', 'Data bengkel telah di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bengkels  $bengkels
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bengkels $bengkel)
    {
        //
        $bengkel->delete();

        return redirect()->route('bengkels.index')
                        ->with('success','Data berhasil dihapus');
    }
}
