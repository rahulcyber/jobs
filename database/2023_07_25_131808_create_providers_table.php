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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->foreignId('industry_type_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->string('company_name')->nullable();
            $table->string('number_of_employees')->nullable();
            $table->string('address')->nullable();
            $table->string('coordinates')->nullable();
            $table->string('contact_number');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
