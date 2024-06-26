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
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('namaPerusahaan')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('tanggalBekerja')->nullable();
            $table->string('statusPegawai')->nullable();
            $table->text('peranTanggungJawab')->nullable();
            $table->string('fotoPerusahaan')->nullable();

            $table->string('namaOrganisasi')->nullable();
            $table->string('levelOrganisasi')->nullable();
            $table->string('posisi')->nullable();
            $table->string('tanggalAwalMenjabat')->nullable();
            $table->string('tanggalAkhirMenjabat')->nullable();
            $table->string('peranTanggungJawabOrganisasi')->nullable();
            $table->string('fotoOrganisasi')->nullable();

            $table->string('namaPelatihan')->nullable();
            $table->string('penyelenggara')->nullable();
            $table->integer('tahunSertifikasi')->nullable();
            $table->integer('tahunAkhir')->nullable();

            $table->string('namaPrestasi')->nullable();
            $table->string('level')->nullable();
            $table->integer('tahun')->nullable();
            $table->string('pencapaian')->nullable();
            $table->string('kategori')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portofolios');
    }
};
