<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Menampilkan daftar pelanggan
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    // Menampilkan form untuk membuat pelanggan baru
    public function create()
    {
        return view('customer.create');
    }

    // Menyimpan pelanggan baru
    public function store(Request $request)
    {
        $request->validate([
            'Nama_customer' => 'required|string|max:255',
        ]);

        Customer::create([
            'Nama_customer' => $request->Nama_customer,
        ]);

        return redirect()->route('customer.index')->with('success', 'Pelanggan berhasil dibuat.');
    }

    // Menampilkan form untuk mengedit pelanggan
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.update', compact('customer'));
    }

    // Memperbarui pelanggan
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_customer' => 'required|string|max:255',
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update([
            'Nama_customer' => $request->Nama_customer,
        ]);

        return redirect()->route('customer.index')->with('success', 'Pelanggan berhasil diperbarui.');
    }

    // Menghapus pelanggan
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Pelanggan berhasil dihapus.');
    }
}