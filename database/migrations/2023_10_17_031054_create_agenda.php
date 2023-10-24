<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktu_awal');
            $table->time('waktu_akhir');
            $table->string('nidn');
            $table->string('nama');
            $table->string('mapel');
            $table->string('kelas');
            $table->string('materi');
            $table->string('jumlah_siswa');
            $table->string('hadir');
            $table->string('sakit');
            $table->string('izin');
            $table->string('tanpa_ket');
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
        Schema::dropIfExists('agenda');
    }
}
