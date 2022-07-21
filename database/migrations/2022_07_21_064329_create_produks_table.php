<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->increments('id_produk');
            $table->bigInteger('kode_produk')->unsigned();
            $table->integer('id_kategori')->unsigned();
            $table->string('nama_produk', 100);
            $table->string('merk', 50);
            $table->bigInteger('harga_beli')->unsigned();
            $table->integer('diskon')->unsigned();
            $table->bigInteger('harga_jual')->unsigned();
            $table->integer('stok');
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
        Schema::dropIfExists('produks');
    }
}
