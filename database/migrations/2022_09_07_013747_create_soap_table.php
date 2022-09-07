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
        Schema::create('soap', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('keluhan');
            $table->string('pemeriksaan_objective');
            $table->integer('gcs');
            $table->float('tensi');
            $table->float('nadi');
            $table->integer('rr');
            $table->float('suhu');
            $table->float('tinggi');
            $table->float('berat');
            $table->string('alergi');
            $table->float('spo2');
            $table->integer('imunisasi');
            $table->string('pemeriksaan_assessment');
            $table->enum('tindakan', ['Tindakan Observasi', 'Tindakan Terapeutik', 'Tindakan Edukasi', 'Tindakan Kolaborasi']);
            $table->string('plan');
            $table->string('catatan');
            $table->string('instruksi');
            $table->string('evaluasi');
            $table->enum('status', ['Sudah Terlayani', 'Belum Terlayani']);
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
        Schema::dropIfExists('soap');
    }
};
