<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_tugas', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('name');
            $table->date('tglTugas');
            $table->string('tugas');
            $table->string('namaMitra');
            $table->string('alamatMitra');
            $table->string('keterangan');
            $table->enum('status', ['Sedang Diproses', 'Surat Ditolak', 'Surat Disetujui']);
            $table->enum('jenis', ['Kelompok', 'Individu', 'Kegiatan']);
            $table->string('ttd')->nullable();
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
        Schema::dropIfExists('surat_tugas');
    }
}
