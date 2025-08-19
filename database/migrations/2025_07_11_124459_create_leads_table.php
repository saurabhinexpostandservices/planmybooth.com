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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('service')->nullable();
            $table->string('show');
            $table->string('city');
            $table->string('stand_size');
            $table->string('budget');
            $table->json('attachments')->nullable();
            $table->string('message')->nullable();
            $table->string('page_url')->nullable();                         
            $table->string('ip')->nullable();
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
