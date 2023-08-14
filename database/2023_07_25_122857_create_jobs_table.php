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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provider_id')->constrained();
            $table->foreignId('vacancy_role_id')->constrained();
            $table->foreignId('vacancy_experience_type_id')->constrained();
            $table->foreignId('education_type_id')->constrained();
            $table->foreignId('currency_id')->constrained();
            $table->string('title');
            $table->text('description');
            $table->enum('number_of_open_positions', ['One', 'Multiple'])->default('one');
            $table->double('salary_amount')->default(0);
            $table->string('salary_description')->nullable();
            $table->string('address')->nullable();
            $table->string('coordinates')->nullable();
            $table->boolean('medical_benefits')->default(false);
            $table->boolean('other_benefits')->default(false);
            $table->enum('pay_period', ['Hourly', 'Weekly', 'Monthly', 'Yearly'])->default('Hourly');
            $table->boolean('is_permanent')->default(false);
            $table->boolean('is_full_time')->default(true);
            $table->date('opening_date');
            $table->date('closing_date');
            $table->boolean('is_posted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
