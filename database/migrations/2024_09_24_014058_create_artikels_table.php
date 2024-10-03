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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('deskripsi');
            $table->string('gambar')->nullable();
            $table->text('tinjauan');
            $table->unsignedBigInteger('category_id');
            // $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('kategoris')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }
};
