<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('brand_id')->nullable();
            $table->unsignedInteger('uom_id')->nullable();
            $table->unsignedInteger('kategori_id')->nullable();
            $table->string('nama_suplier');
            $table->string('email');
            $table->string('name');
            $table->string('kode');
            $table->string('price');
            $table->string('status')->nullable();
            $table->string('stok');
            $table->string('image')->nullable();
            $table->string('telp');
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
        Schema::dropIfExists('barangs');
    }
}
