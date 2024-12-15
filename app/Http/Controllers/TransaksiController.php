<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\pemasok;
use App\Models\customer;

class TransaksiController extends Controller
{
    // Menampilkan daftar transaksi
    public function index()
    {
        $transaksis = Transaksi::all(); // Mengambil semua data transaksi
        return view('transaksi.index', compact('transaksis')); // Mengirim data ke view
    }

    // Menampilkan form untuk membuat transaksi baru
    public function create()
    {
        $barangs = Barang::all();
        $pemasoks = Pemasok::all();
        $customers = Customer::all();
    
        return view('transaksi.create', compact('barangs', 'pemasoks', 'customers'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'Tanggal_transaksi' => 'required|date',
            'Jenis_transaksi' => 'required|in:masuk,keluar',
            'ID_barang' => 'required|exists:barang,ID_barang',
            'Jumlah' => 'required|integer|min:1',
            'Harga_satuan' => 'required|numeric|min:0',
            'Total_harga' => 'required|numeric|min:0',
            'ID_pemasok' => 'nullable|exists:pemasok,ID_pemasok',
            'ID_customer' => 'nullable|exists:customer,ID_customer',
        ]);
    
        Transaksi::create([
            'Tanggal_transaksi' => $request->Tanggal_transaksi,
            'Jenis_transaksi' => $request->Jenis_transaksi,
            'ID_barang' => $request->ID_barang,
            'Jumlah' => $request->Jumlah,
            'Harga_satuan' => $request->Harga_satuan,
            'Total_harga' => $request->Jumlah * $request->Harga_satuan,
            'ID_pemasok' => $request->ID_pemasok,
            'ID_customer' => 'nullable|exists:customers,ID_customer',

        ]);
    
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dibuat.');
    }
    

    // Menampilkan form untuk mengedit transaksi
    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id); // Mencari transaksi berdasarkan ID
        return view('transaksi.edit', compact('transaksi')); // Mengembalikan view untuk mengedit transaksi
    }

    // Memperbarui transaksi yang ada
    public function update(Request $request, $id)
    {
        $request->validate([
            'Tanggal_transaksi' => 'required|date',
            'Jenis_transaksi' => 'required|in:masuk,keluar',
            'ID_barang' => 'required|exists:barang,ID_barang',
            'Jumlah' => 'required|integer',
            'Harga_satuan' => 'required|numeric',
            'Total_harga' => 'required|numeric',
            'ID_pemasok' => 'nullable|exists:pemasok,ID_pemasok',
            'ID_customer' => 'nullable|integer',
        ]);

        $transaksi = Transaksi::findOrFail($id); // Mencari transaksi berdasarkan ID
        $transaksi->update($request->all()); // Memperbarui data transaksi
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.'); // Redirect ke index dengan pesan sukses
    }

    // Menghapus transaksi
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id); // Mencari transaksi berdasarkan ID
        $transaksi->delete(); // Menghapus transaksi
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.'); // Redirect ke index dengan pesan sukses
    }
}