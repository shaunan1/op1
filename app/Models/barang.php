<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $table = 'barang'; // Nama tabel

    protected $primaryKey = 'ID_barang'; // Menentukan kolom primary key

    protected $fillable = [
        'Nama_barang',
        'Kode_barang',
        'Kategori_id',
        'Stok',
        'Harga_beli',
        'Harga_jual',
        'Deskripsi',
    ];

    // Relasi banyak ke satu dengan Kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'Kategori_id', 'ID_kategori');
    }
}