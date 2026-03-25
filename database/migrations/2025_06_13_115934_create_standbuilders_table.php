<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('standbuilders', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->string('founded_year')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('cascade');
            $table->foreignId('city_id')->nullable()->constrained('cities')->onDelete('cascade');
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('logo')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('twitter')->nullable();
            $table->json('gallery')->nullable();
            $table->string('video')->nullable();
            $table->string('cover_image')->nullable();
            $table->json('services')->nullable();
            $table->json('services_cities')->nullable();
            $table->string('priorty')->default('0');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('standbuilders');
    }
};