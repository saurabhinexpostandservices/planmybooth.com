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
        Schema::create('shows', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->string('meta_description');
            $table->json('markup_schema')->nullable();
            $table->string('slug');
            $table->string('logo');
            $table->string('title');
            $table->string('content');
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->foreignId('country_id')->nullable()->constrained('countries')->onDelete('set null');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade')->nullable();
            $table->DateTime('start_date')->nullable();
            $table->DateTime('end_date')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shows');
    }
};
