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
        Schema::create('emploi_temps', function (Blueprint $table) {
    $table->id();
    $table->string('titre');
    $table->string('fichier_path'); 
    $table->foreignId('professeur_id')->nullable()->constrained('users')->onDelete('cascade');
    $table->foreignId('classe_id')->nullable()->constrained('classes')->onDelete('cascade');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emploi_temps');
    }
};
