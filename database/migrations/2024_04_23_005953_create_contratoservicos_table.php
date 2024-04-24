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
        Schema::create('contratoservicos', function (Blueprint $table) {
            $table->id();
            $table->string("tipo");
            $table->string("caminhao");
            $table->string("localsaida");
            $table->string("localchegada");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratoservicos');
    }
};
