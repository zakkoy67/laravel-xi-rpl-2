<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // fetching data dari tabel genres
        $spp = DB::table('spp')->get();
        // return ke view dan kirirmkan data $spp
        return view('spp.index', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $query = DB::table('spp')->insert([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
    ]);

        return redirect()->route('spp.index')->with(['success'=>'data telah di tambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $spp = DB::table('spp')->where('tahun', $tahun)->first();
        $spp = DB::table('spp')->where('nominal', $nominal)->first();
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = DB::table('spp')->where('id_spp', $id)->update([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
    ]);

        return redirect()->route('spp.index')->with(['success'=>'data telah di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('spp')->where('tahun', $id)->delete();
        $query = DB::table('spp')->where('nominal', $id)->delete();

        return redirect()->route('spp.index')->with(['success'=>'data telah di hapus']);
    }
}