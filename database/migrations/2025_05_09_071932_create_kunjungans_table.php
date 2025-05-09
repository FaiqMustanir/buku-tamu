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
    Schema::create('kunjungans', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('instansi');
        $table->string('tujuan');
        $table->text('catatan')->nullable();
        $table->timestamp('waktu_kunjungan')->useCurrent();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungans');
    }
};
