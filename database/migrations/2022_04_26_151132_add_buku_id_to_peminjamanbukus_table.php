<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBukuIdToPeminjamanbukusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('peminjamanbukus', function (Blueprint $table) {
            $table->foreignId('buku_id')->after('tanggal_pengembalian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('peminjamanbukus', function (Blueprint $table) {
            $table->dropColumn('buku_id');

        });
    }
}
