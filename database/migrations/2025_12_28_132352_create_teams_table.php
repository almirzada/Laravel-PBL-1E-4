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
       Schema::create('teams', function (Blueprint $table): void {
    $table->id();
    $table->string('name'); // nama tim
    $table->foreignId('competition_id')->constrained('competitions')->onDelete('cascade');

    // Data ketua tim
    $table->string('leader_nim')->unique();
    $table->string('leader_name');
    $table->string('leader_program_study');
    $table->string('leader_whatsapp');

    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
