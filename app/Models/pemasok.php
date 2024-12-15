<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemasok extends Model
{
    // Nama tabel yang digunakan oleh model ini
    protected $table = 'pemasok';

    protected $primaryKey = 'ID_pemasok'; // Primary key
    // Atribut yang dapat diisi
    protected $fillable = [
        'Nama_pemasok',
        'Alamat',
        'No_telp',
        'Email',
        'Kontak_person',
    ];

    // Jika Anda ingin menambahkan relasi atau metode lain, Anda bisa melakukannya di sini
}