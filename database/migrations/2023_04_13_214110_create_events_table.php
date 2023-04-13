<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event');
            // $table->string('nama_event')->references('nama_event')->on('tikets');
            $table->string('lokasi_event');
            $table->string('stadium_event');
            $table->datetime('open_gate');
            $table->integer('kursi_terisi');
            $table->integer('kursi_kosong');
            // $table->date('tanggal_acara');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
