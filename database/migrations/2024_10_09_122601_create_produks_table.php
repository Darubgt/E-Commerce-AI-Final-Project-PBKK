<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produkS', function (Blueprint $table) {
            $table->char('id_produk', 4)->primary();
            $table->string('nama_produk', 255);
            $table->string('deskripsi_produk', 1000);
            $table->integer('harga_produk');
            $table->integer('stok_produk');
            $table->string('gambar_produk', 255);
            $table->string('tag_gambar', 255)->nullable();
            $table->char('item_id_item', 4);
            $table->char('ruangan_id_ruangan', 4);
            $table->foreign('item_id_item')->references('id_item')->on('items');
            $table->foreign('ruangan_id_ruangan')->references('id_ruangan')->on('ruangans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
