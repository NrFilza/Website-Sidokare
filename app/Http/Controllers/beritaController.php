<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = berita::all();
        return view('index', compact('beritas'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required',
            'tanggal_publikasi' => 'required',
            'id_kategori' => 'required',
            'isi_berita' => 'required',
            'foto' => 'nullable',
            'unggah_file_lain' => 'nullable',
        ]);

        berita::create($validatedData);

        return redirect()->route('berita.index')->with('success', 'Berita created successfully.');
    }

    public function edit($id)
    {
        $berita = berita::findOrFail($id);
        return view('edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul_berita' => 'required',
            'tanggal_publikasi' => 'required',
            'id_kategori' => 'required',
            'isi_berita' => 'required',
            'foto' => 'nullable',
            'unggah_file_lain' => 'nullable',
        ]);

        $berita = Berita::findOrFail($id);
        $berita->update($validatedData);

        return redirect()->route('berita.index')->with('success', 'Berita updated successfully.');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
    
        return redirect()->route('berita.index')->with('success', 'Berita deleted successfully.');
    }
}    