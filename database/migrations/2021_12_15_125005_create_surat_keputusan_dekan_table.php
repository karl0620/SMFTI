<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeputusanDekanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_keputusan_dekan', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->longtext('menimbang')->nullable();
            $table->longtext('mengingat')->nullable();
            $table->longtext('menetapkan')->nullable();
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
        Schema::dropIfExists('surat_keputusan_dekan');
    }
}
