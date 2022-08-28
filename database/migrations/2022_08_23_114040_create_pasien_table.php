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
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('no_reg')->nullable();
            $table->date('ttl')->nullable();
            $table->string('alamat')->nullable();
            $table->string('pekerjaan', 100)->nullable();
            $table->enum('jenis_pembayaran', ['UMUM', 'BPJS'])->nullable();
            $table->enum('status_pelayanan', ['DONE', 'PROGRESS', 'CANCELLED'])->default('PROGRESS');
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
        Schema::dropIfExists('pasien');
    }
};
