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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori', ['anime', 'donghua'])->default('anime');
            $table->string('title');
            $table->string('genre');
            $table->text('deskripsi');
            $table->integer('episode');
            $table->enum('status', ['watching', 'completed', 'dropped', 'on-hold', 'plan-to-watch'])->default('watching');
            $table->date('tahun_rilis')->nullable();
            $table->string('studio')->nullable();
            $table->decimal('rating', 3, 1);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
