<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestasi = Prestasi::latest()->get();
        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_lomba' => 'required',
            'nama_siswa' => 'required',
            'juara' => 'required',
            'kelas' => 'required',
        ]);

        Prestasi::create($data);

        return redirect()->route('prestasi.index')->with('message', 'Prestasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prestasiTerbaru = Prestasi::latest()->limit(3)->get();
        $prestasi = Prestasi::findOrFail($id);
        return view('user.prestasi.show', compact('prestasiTerbaru', 'prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama_lomba' => 'required',
            'nama_siswa' => 'required',
            'juara' => 'required',
            'kelas' => 'required',
        ]);

        $prestasi = Prestasi::findOrFail($id);

        $prestasi->update($data);

        return redirect()->route('prestasi.index')->with('message', 'Prestasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();
        return redirect()->route('prestasi.index')->with('message', 'Prestasi berhasil dihapus');
    }

    public function guest()
    {
        $prestasi = Prestasi::latest()->get();
        return view('user.prestasi.index', compact('prestasi'));
    }
}
