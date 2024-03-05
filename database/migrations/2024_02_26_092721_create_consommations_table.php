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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('pompe_id')->constrained()->onDelete('cascade');
            // $table->foreignId('vehicule_id')->constrained()->onDelete('cascade');
            $table->string("companie")->nullable();
            $table->string("littre")->nullable();
            $table->string("index")->nullable();
            $table->string("chauffeur")->nullable();
            $table->string("plaque")->nullable();
            $table->string("pompiste")->nullable();
            $table->string("department")->nullable();
            $table->string("engin")->nullable();
            $table->string("indexdepart")->nullable();
            $table->string("indexcloture")->nullable();
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
