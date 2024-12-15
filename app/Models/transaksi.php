<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan
    protected $table = 'transaksi';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'Tanggal_transaksi',
        'Jenis_transaksi',
        'ID_barang',
        'Jumlah',
        'Harga_satuan',
        'Total_harga',
        'ID_pemasok',
        'ID_customer',
    ];

    // Relasi dengan model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'ID_barang', 'ID_barang');
    }

    // Relasi dengan model Pemasok
    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class, 'ID_pemasok', 'ID_pemasok');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'ID_customer', 'ID_customer');
    }
}