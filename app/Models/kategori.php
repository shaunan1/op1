<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; // Nama tabel di database
    protected $primaryKey = 'ID_kategori'; // Primary key
    public $timestamps = true; // Menggunakan timestamps

    // Kolom yang dapat diisi massal
    protected $fillable = [
        'Nama_kategori',
        'Deskripsi',
    ];
}