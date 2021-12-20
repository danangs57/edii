<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->id();
            $table->string('posisi');
            $table->string('nama');
            $table->string('no_ktp');
            $table->string('ttl');
            $table->string('kelamin');
            $table->string('agama');
            $table->string('darah');
            $table->string('status');
            $table->string('alamat');
            $table->string('email');
            $table->string('link');
            $table->string('pendidikan_terakhir');
            $table->string('riwayat_pelatihan');
            $table->string('riwayat_pekerjaan');
            $table->string('kemampuan');
            $table->string('penempatan');
            $table->string('upah');
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
        Schema::dropIfExists('pelamars');
    }
}
