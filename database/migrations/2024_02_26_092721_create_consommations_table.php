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
        Schema::create('consommations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affectation_id')->constrained()->onDelete('cascade');
            // $table->foreignId('vehicule_id')->constrained()->onDelete('cascade');
            $table->string("companie");
            $table->string("littre");
            $table->string("index");
            $table->string("chauffeur");
            $table->string("plaque");
            $table->string("pompiste");
            $table->string("department");
            $table->string("engin");
            $table->string("indexdepart");
            $table->string("indexcloture");
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consommations');
    }
};
