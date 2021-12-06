<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateSuratTugasDosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas_dosen', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('name');
            $table->date('tglPelaksanaan');
            $table->string('lksKegiatan');
            $table->string('namaMitra');
            $table->string('keterangan');
            $table->enum('status', ['Sedang Diproses', 'Surat Ditolak', 'Surat Disetujui']);
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
        Schema::dropIfExists('surat_tugas_dosen');
    }
}
