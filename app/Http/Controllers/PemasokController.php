<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    // Menampilkan daftar pemasok
    public function index()
    {
        $pemasoks = Pemasok::all();
        return view('pemasok.index', compact('pemasoks'));
    }

    // Menampilkan form untuk membuat pemasok baru
    public function create()
    {
        return view('pemasok.create');
    }

    // Menyimpan pemasok baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'Nama_pemasok' => 'required|string|max:255',
            'Alamat' => 'nullable|string',
            'No_telp' => 'nullable|string|max:20',
            'Email' => 'nullable|email|max:100',
            'Kontak_person' => 'nullable|string|max:255',
        ]);

        Pemasok::create($request->all());

        return redirect()->route('pemasok.index')->with('success', 'Pemasok berhasil dibuat.');
    }

    // Menampilkan detail pemasok
    public function show(Pemasok $pemasok)
    {
        return view('pemasok.show', compact('pemasok'));
    }

    // Menampilkan form untuk mengedit pemasok
    public function edit(Pemasok $pemasok)
    {
        return view('pemasok.update', compact('pemasok'));
    }

    // Memperbarui pemasok di database
    public function update(Request $request, Pemasok $pemasok)
    {
        // Validasi data yang diterima

        $pemasok->update($request->all());
        $request->validate([
            'Nama_pemasok' => 'required|string|max:255',
            'Alamat' => 'nullable|string',
            'No_telp' => 'nullable|string|max:20',
            'Email' => 'nullable|email|max:100',
            'Kontak_person' => 'nullable|string|max:255',
        ]);
    
        // Update data pemasok
        $pemasok->update($request->all());
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pemasok.index')->with('success', 'Pemasok berhasil diperbarui.');
    }

    // Menghapus pemasok dari database
    public function destroy(Pemasok $pemasok)
    {
        $pemasok->delete();
        return redirect()->route('pemasok.index')->with('success', 'Pemasok berhasil dihapus.');
    }
}