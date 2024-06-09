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
        Schema::create('dosens', function (Blueprint $table) {
            $table->id();
            // $table->increments('id');
            $table->string('nid', 8);
            $table->foreignId('status_id')->constrained();
            $table->string('nama_dosen', 255);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('alamat_dosen', 255);
            $table->string('email_dosen');
            $table->string('nomor_telepon', 14);
            $table->timestamps();

        });

        // Schema::table('dosens', function($table) {
        //     $table->foreign('status_id')->references('id')->on('status');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosens');
    }
};
