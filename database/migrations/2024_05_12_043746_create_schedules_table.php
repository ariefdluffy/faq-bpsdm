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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelatihan');
            $table->date('tanggal_buka');
            $table->string('link_regis');
            $table->enum('pic_kegiatan', ['Hidayat', 'Miftahul','Surmiati','Ramadhan']);
            $table->string('link_grup')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
