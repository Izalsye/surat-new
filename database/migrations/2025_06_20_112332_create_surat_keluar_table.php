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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('no_surat');
            $table->string('no_agenda');
            $table->date('tgl_surat');
            $table->string('penerima');
            $table->text('instansi');
            $table->text('perihal');
            $table->text('isi');
            $table->string('summary');
            $table->string('file');
            $table->string('status');
            $table->foreignId('kategori_umum_id')->constrained('kategori_umum');
            $table->foreignId('created_by_id')->constrained('users');
            $table->foreignId('disposisi_id')->nullable()->constrained('disposisi');
            $table->foreignId('surat_masuk_id')->nullable()->constrained('surat_masuk');
            $table->foreignId('memo_internal_id')->nullable()->constrained('memo_internal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluar');
    }
};
