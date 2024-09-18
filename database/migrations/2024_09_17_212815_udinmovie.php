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
        Schema::create('udinmovie', function (Blueprint $udan) {
            $udan->id();
            $udan->string('title');
            $udan->string('image');
            $udan->string('director');
            $udan->string('description');
            $udan->string('category');
            $udan->string('genre');
            $udan->integer('rate');
            $udan->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('udinmovie');
    }
};
