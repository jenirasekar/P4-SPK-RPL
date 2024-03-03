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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelanggan');
            $table->text('alamat');
            $table->string('no_tlp');
            $table->timestamps();
        });

        Schema::table('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
};
