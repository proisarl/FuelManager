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
        Schema::create('pompes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('poste_id')->constrained()->onDelete('cascade');
            $table->string("designation");
            $table->string("quantite");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pompes');
    }
};
