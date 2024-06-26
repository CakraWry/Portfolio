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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('namaDepan');
            $table->string('namaBelakang');
            $table->string('instagram');
            $table->string('linkedin');
            $table->string('github');
            $table->string('glints');
            $table->string('judulIntroduction');
            $table->text('introduction');
            $table->string('image');
            $table->text('service');
            $table->text('project');
            $table->text('portofolio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};

