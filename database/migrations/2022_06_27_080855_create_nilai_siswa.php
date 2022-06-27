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
        Schema::create('nilai_siswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('siswa_id');
            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('guru_id');
            $table->unsignedBigInteger('semester_id');
            $table->unsignedBigInteger('tahun_ajaran_id');
            $table->unsignedBigInteger('nilai_id');
            $table->unsignedBigInteger('nilai_huruf_id');
            $table->unsignedBigInteger('nilai_angka_id');
            $table->unsignedBigInteger('nilai_predikat_id');
            $table->unsignedBigInteger('nilai_keterangan_id');
            $table->unsignedBigInteger('nilai_keterangan_huruf_id');
            $table->unsignedBigInteger('nilai_keterangan_angka_id');
            $table->unsignedBigInteger('nilai_keterangan_predikat_id');
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
        Schema::dropIfExists('nilai_siswa');
    }
};
