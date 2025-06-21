<?php

use App\Enums\DisposisiSifatEnum;
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
        Schema::create('disposisi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('surat_masuk_id')->constrained('surat_masuk');
            $table->foreignId('pengirim_id')->constrained('users');
            $table->foreignId('penerima_id')->constrained('users');
            $table->text('pesan');
            $table->string('status');
            $table->enum('sifat', DisposisiSifatEnum::Values());
            $table->boolean('balasan');
            $table->date('tenggat');
            $table->foreignId('parent_id')->nullable()->constrained('disposisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disposisi');
    }
};
