<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WargaTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIK', 20)->unique();
            $table->string('no_KK', 20)->index();
            $table->string('nama', 200);
            $table->enum('jk', ['Laki-Laki', 'Perempuan'])->default('Laki-Laki');
            $table->date('tgl_lahir')->nullable();
            $table->enum('SHDK', ['Kepala Keluarga', 'Istri', 'Anak', 'Famili Lain'])->default('Anak');
            $table->enum('status', ['Kawin', 'Belum'])->default('Belum');
            $table->enum('agama', ['Islam', 'Kristen', 'Katholik', 'Budha', 'Hindu'])->default('Islam');
            $table->string('goldar', 10)->default('-');
            $table->string('pddk_akhir', 100)->default('-');
            $table->string('pekerjaan', 150)->default('-');
            $table->string('akta_lhr', 150)->default('-');
            $table->string('no_akta_lhr', 150)->nullable();
            $table->string('no_akta_kwn', 150)->nullable();
            $table->string('no_akta_cerai', 150)->nullable();
            $table->enum('cacat', ['Ada', 'Tidak Ada'])->default('Tidak Ada');
            $table->string('tgl_rekam', 100)->nullable();
            $table->string('nama_ayah', 200)->default('-');
            $table->string('nama_ibu', 200)->default('-');
            $table->string('foto', 255)->default('-');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wargas');
    }
}
