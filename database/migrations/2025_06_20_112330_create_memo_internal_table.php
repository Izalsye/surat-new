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
        Schema::create('memo_internal', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('no_agenda');
            $table->date('tgl_surat');
            $table->string('pengirim');
            $table->string('instansi');
            $table->text('perihal');
            $table->text('isi');
            $table->string('summary');
            $table->string('file');
            $table->string('status');
            $table->foreignId('kategori_umum_id')->constrained('kategori_umum');
            $table->foreignId('created_by_id')->constrained('users');
            $table->foreignId('parent_id')->nullable()->constrained('memo_internal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memo_internal');
    }
};
