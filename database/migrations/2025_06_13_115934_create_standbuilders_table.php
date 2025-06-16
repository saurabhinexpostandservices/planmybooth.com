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
        Schema::create('standbuilders', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('title');
            $table->lognText('description');
            $table->string('founded_year');
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->string('website')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();
            $table->json('services')->nullable();
            $table->json('services_countries')->nullable();
            $table->string('priorty')->default('0');
            $table->enum('status', ['draft', 'published'])->default('published');
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('standbuilders');
    }
};
