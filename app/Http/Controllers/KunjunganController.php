<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $data = \App\Models\Kunjungan::latest()->get();
    return view('kunjungan.index', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kunjungan.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'instansi' => 'required|string|max:255',
        'tujuan' => 'required|string|max:255',
        'catatan' => 'nullable|string',
    ]);

    \App\Models\Kunjungan::create($validated);

    return redirect()->route('kunjungan.index')->with('success', 'Data berhasil disimpan!');
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
    $kunjungan = \App\Models\Kunjungan::findOrFail($id);
    return view('kunjungan.edit', compact('kunjungan'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'instansi' => 'required|string|max:255',
        'tujuan' => 'required|string|max:255',
        'catatan' => 'nullable|string',
    ]);

    $kunjungan = \App\Models\Kunjungan::findOrFail($id);
    $kunjungan->update($validated);

    return redirect()->route('kunjungan.index')->with('success', 'Data berhasil diupdate!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $kunjungan = \App\Models\Kunjungan::findOrFail($id);
    $kunjungan->delete();

    return redirect()->route('kunjungan.index')->with('success', 'Data berhasil dihapus!');
}

}
