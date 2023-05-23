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
        Schema::create('episodios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('temporada_id');
            $table->integer('numero');
            $table->timestamps();

            $table->foreign('temporada_id')->references('id')->on('temporadas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodios');
    }
};
