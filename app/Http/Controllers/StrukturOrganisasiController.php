<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $struktur = StrukturOrganisasi::latest()->get();
        return view('admin.struktur.index', compact('struktur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (StrukturOrganisasi::get()->count() >= 1) {
            return redirect()->route('struktur.index');
        }
        return view('admin.struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (StrukturOrganisasi::get()->count() >= 1) {
            return redirect()->route('struktur.index');
        }

        $data = $request->validate([
            'foto' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        StrukturOrganisasi::create($data);

        return redirect()->route('struktur.index')->with('message', 'Struktur Organisasi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return redirect()->route('struktur.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        return view('admin.struktur.edit', compact('struktur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'foto' => 'nullable|image|max:2048'
        ]);

        $struktur = StrukturOrganisasi::findOrFail($id);

        if ($request->hasFile('foto')) {
            if ($struktur->foto) {
                Storage::disk('public')->delete($struktur->foto);
            }
            $data['foto'] = $request->file('foto')->store('images', 'public');
        }

        $struktur->update($data);

        return redirect()->route('struktur.index')->with('message', 'Struktur Organisasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $struktur = StrukturOrganisasi::findOrFail($id);
        if ($struktur->foto) {
            Storage::disk('public')->delete($struktur->foto);
        }
        $struktur->delete();
        return redirect()->route('struktur.index')->with('message', 'Struktur Organisasi berhasil dihapus');
    }
}
