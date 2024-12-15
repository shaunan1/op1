<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi
    protected $table = 'customers';

    // Menentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'Nama_customer',
    ];

    // Jika Anda ingin menambahkan relasi atau metode lain, Anda bisa melakukannya di sini
}