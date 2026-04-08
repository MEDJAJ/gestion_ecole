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
       Schema::create('matieres', function (Blueprint $table) {
    $table->id();
    $table->string('nom_matiere', 100); 
    $table->string('code_matiere', 20)->unique(); 
    $table->decimal('coefficient', 8, 2)->default(1.00); 
    $table->text('description')->nullable(); 
    $table->string('niveau', 50)->nullable();

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matieres');
    }
};
