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
        Schema::create('riwayat_medis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasien')->onUpdate('cascade')->onDelete('cascade');
            $table->string('keluhan')->nullable();
            $table->string('tingkat_kesadaran')->nullable();
            // $table->date('gcs')->nullable();
            $table->string('respirasi')->nullable();
            $table->integer('tensi')->nullable();
            $table->integer('nadi')->nullable();
            // $table->integer('rr')->nullable();
            $table->integer('suhu')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->string('alergi', 50)->nullable();
            $table->integer('kadar_oksigen')->nullable();
            $table->integer('jml_imunisasi')->nullable();
            $table->string('diagnosis', 250)->nullable();
            $table->string('tindak_perawatan', 50)->nullable();
            $table->string('plan', 250)->nullable();
            $table->string('catatan_dokter', 250)->nullable();
            $table->string('instruksi', 250)->nullable();
            $table->string('evaluasi', 250)->nullable();
            $table->string('status_pelayanan', 30)->nullable();
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
        Schema::dropIfExists('riwayat_medis');
    }
};
