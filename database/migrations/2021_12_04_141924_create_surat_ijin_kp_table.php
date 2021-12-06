<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratIjinKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_ijin_kp', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('name');
            $table->date('tujuanSurat');
            $table->string('namaMitra');
            $table->string('alamatMitra');
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
        Schema::dropIfExists('surat_ijin_kp');
    }
}
