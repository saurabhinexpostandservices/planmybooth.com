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
            $table->foreignId('show_id')->constrained('shows')->onDelete('cascade');
            $table->foreignId('city_id')->constrained('cities')->onDelete('cascade');
            $table->string('stand_size');
            $table->enum('services', ['design_and_construction','construction', 'other']);
            $table->string('company_name');
            $table->string('price_range');
            $table->json('design_attachments')->nullable();
            $table->json('require_elements')->nullable();
            $table->string('employee_onsite_avilable')->nullable();
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
