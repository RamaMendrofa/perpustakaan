<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanbukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjamanbukus', function (Blueprint $table) {
            $table->id();
            $table->string('id_peminjaman');
            $table->string('id_pengembalian');
            $table->string('tanggal_peminjaman');
            $table->string('tanggal_pengembalian');

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
        Schema::dropIfExists('peminjamanbukus');
    }
}
