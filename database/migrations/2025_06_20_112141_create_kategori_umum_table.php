<?php

use App\Enums\KategoriUmumTypeEnum;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategori_umum', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->text('deskripsi');
            $table->enum('type', KategoriUmumTypeEnum::values()); // pakai enum reusable
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori_umum');
    }
};
