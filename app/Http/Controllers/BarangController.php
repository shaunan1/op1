<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Pastikan nama model sesuai dengan konvensi penamaan
use App\Models\Kategori; // Untuk mengambil kategori saat membuat atau mengedit barang
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::with('kategori')->get(); // Mengambil semua barang beserta kategori
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all(); // Mengambil semua kategori untuk dropdown
        return view('barang.create', compact('kategoris')); // Mengarahkan ke view create
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_barang' => 'required|string|max:255',
            'Kode_barang' => 'required|string|max:50|unique:barang,Kode_barang',
            'Kategori_id' => 'required|exists:kategori,ID_kategori',
            'Stok' => 'required|integer|min:0',
            'Harga_beli' => 'required|numeric|min:0',
            'Harga_jual' => 'required|numeric|min:0',
            'Deskripsi' => 'nullable|string',
        ]);

        Barang::create($request->all()); // Menyimpan barang baru

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dibuat.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang')); // Menampilkan detail barang
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        $kategoris = Kategori::all(); // Mengambil semua kategori untuk dropdown
        return view('barang.update', compact('barang', 'kategoris')); // Mengarahkan ke view edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'Nama_barang' => 'required|string|max:255',
            'Kode_barang' => 'required|string|max:50|unique:barang,Kode_barang,' . $barang->ID_barang . ',ID_barang',
            'Kategori_id' => 'required|exists:kategori,ID_kategori',
            'Stok' => 'required|integer|min:0',
            'Harga_beli' => 'required|numeric|min:0',
            'Harga_jual' => 'required|numeric|min:0',
            'Deskripsi' => 'nullable|string',
        ]);

        $barang->update($request->all()); // Memperbarui barang yang ada

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete(); // Menghapus barang
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}