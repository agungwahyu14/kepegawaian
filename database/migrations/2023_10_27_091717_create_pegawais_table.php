<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->bigInteger('np')->primary();
            $table->string('nama');
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->date('tanggal_lahir');
            $table->date('tanggal_masuk');
            $table->string('umur');
            $table->string('telepon');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawai');
    }
};
