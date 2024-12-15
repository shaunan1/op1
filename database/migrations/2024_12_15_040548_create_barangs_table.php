<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('ID_barang');
            $table->string('Nama_barang', 255);
            $table->string('Kode_barang', 50)->unique();
            $table->foreignId('Kategori_id')->constrained('kategori', 'ID_kategori')->onDelete('cascade');
            $table->integer('Stok')->default(0);
            $table->decimal('Harga_beli', 15, 2);
            $table->decimal('Harga_jual', 15, 2);
            $table->text('Deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};