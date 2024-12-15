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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('ID_transaksi');
            $table->dateTime('Tanggal_transaksi');
            $table->enum('Jenis_transaksi', ['masuk', 'keluar']);
            $table->foreignId('ID_barang')->constrained('barang', 'ID_barang')->onDelete('cascade');
            $table->integer('Jumlah');
            $table->decimal('Harga_satuan', 15, 2);
            $table->decimal('Total_harga', 15, 2);
            $table->foreignId('ID_pemasok')->nullable()->constrained('pemasok', 'ID_pemasok')->onDelete('set null');
            $table->unsignedBigInteger('ID_customer')->nullable();
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
        Schema::dropIfExists('transaksi');
    }
};
