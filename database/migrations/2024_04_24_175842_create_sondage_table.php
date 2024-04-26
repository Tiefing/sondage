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
        Schema::create('sondages', function (Blueprint $table) {
            $table->id();
            $table->string('title')->uniqid();
            $table->longText('description');
            $table->string('question')->uniqid();
            $table->string('reponse1')->nullable();
            $table->string('reponse2')->nullable();
            $table->string('reponse3')->nullable();
            $table->string('reponse4')->nullable();
            $table->string('reponse5')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sondages');
    }
};
