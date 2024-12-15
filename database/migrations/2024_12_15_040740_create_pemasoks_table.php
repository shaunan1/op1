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
        Schema::create('pemasok', function (Blueprint $table) {
            $table->id('ID_pemasok');
            $table->string('Nama_pemasok', 255);
            $table->text('Alamat')->nullable();
            $table->string('No_telp', 20)->nullable();
            $table->string('Email', 100)->nullable();
            $table->string('Kontak_person', 255)->nullable();
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
        Schema::dropIfExists('pemasok');
    }
};
