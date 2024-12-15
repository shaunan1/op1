<?php

namespace App\Http\Controllers;

use App\Models\Kategori; // Pastikan nama model sesuai dengan konvensi penamaan
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all(); 
        return view('kategori.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create'); // Mengarahkan ke view create
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_kategori' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
        ]);
    
        Kategori::create([
            'Nama_kategori' => $request->Nama_kategori,
            'Deskripsi' => $request->Deskripsi,
        ]);
    
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategori.show', compact('kategori')); // Menampilkan detail kategori
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori)
    {
        return view('kategori.update', compact('kategori')); // Mengirimkan variabel $kategori ke tampilan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'Nama_kategori' => 'required|string|max:255',
            'Deskripsi' => 'nullable|string',
        ]);

        $kategori->update([
            'Nama_kategori' => $request->Nama_kategori,
            'Deskripsi' => $request->Deskripsi,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori)
    {
        $kategori->delete(); // Menghapus kategori
        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus.');
    }
}