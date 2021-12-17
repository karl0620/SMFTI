<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarHadirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hadir', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->date('tglKegiatan');
            $table->time('time');
            $table->string('tempat');
            $table->string('pembicara');
            $table->longtext('nim');
            $table->longtext('name');
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
        Schema::dropIfExists('daftar_hadir');
    }
}
