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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->date('date');
            $table->string('location');
            $table->integer('capacity');
            $table->integer('availableSeats')->nullable();
            $table->enum('status', ['pending', 'active', 'cancelled']);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('organizer_id');
            $table->foreign('organizer_id')->references('user_id')->on('organizers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
