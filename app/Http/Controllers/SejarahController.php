<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sejarah = Sejarah::latest()->get();
        return view('admin.sejarah.index', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Sejarah::get()->count() >= 1) {
            return redirect()->route('sejarah.index');
        }
        return view('admin.sejarah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if (Sejarah::get()->count() >= 1) {
            return redirect()->route('sejarah.index');
        }

        $data = $request->validate([
            'isi' => 'required',
        ]);

        Sejarah::create($data);

        return redirect()->route('sejarah.index')->with('message', 'Sejarah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return redirect()->route('sejarah.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        return view('admin.sejarah.edit', compact('sejarah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'isi' => 'required',
        ]);

        $sejarah = Sejarah::findOrFail($id);

        $sejarah->update($data);

        return redirect()->route('sejarah.index')->with('message', 'Sejarah berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sejarah = Sejarah::findOrFail($id);
        $sejarah->delete();
        return redirect()->route('sejarah.index')->with('message', 'Sejarah berhasil dihapus');
    }
}
