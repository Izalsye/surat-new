<?php

use App\Enums\DocumentTimelineAction;
use App\Enums\DocumentTypeEnum;
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
        Schema::create('dokumen_timeline', function (Blueprint $table) {
            $table->id();
            $table->enum('document_type', DocumentTypeEnum::Values());
            $table->bigInteger('document_id');
            $table->foreignId('user_id')->constrained('users');
            $table->enum('action', DocumentTimelineAction::Values());
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokumen_timeline');
    }
};
