<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('remise_reprises', function (Blueprint $table) {
            $table->id();
            $table->integer("relevant");
            $table->integer("releve");
            $table->text("indexdepart")->nullable();
            $table->text("indexfin")->nullable();
            $table->text("commentaire");
            $table->timestamps();
            $table->softDeletes();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remise_reprises');
    }
};
