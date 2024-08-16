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
        Schema::create('kym_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('depositor_id')->constrained()->onDelete('cascade');
            $table->string('member_photo')->nullable();
            $table->string('full_name')->nullable();
            $table->string('full_name_nepali')->nullable();
            $table->string('nationality')->nullable();
            $table->date('date_of_birth_nepali')->nullable();
            $table->date('date_of_birth_english')->nullable();
            $table->string('citizenship_number')->nullable();
            $table->string('place_of_issue')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_place_of_issue')->nullable();
            $table->date('passport_date_of_issue')->nullable();
            $table->enum('marital_status', ['MARRIED', 'UNMARRIED', 'DIVORCED'])->nullable();
            $table->enum('sex', ['MALE', 'FEMALE', 'OTHER'])->nullable();
            $table->integer('age')->nullable();
            $table->string('name_of_guardian')->nullable();
            $table->string('relation')->nullable();
            $table->string('permanent_address');
            $table->string('temporary_address')->nullable();

            // Relatives Information
            $table->string('spouse_name')->nullable();
            $table->string('spouse_citizenship')->nullable();
            $table->string('spouse_place_of_issue')->nullable();
            $table->date('spouse_date_of_issue')->nullable();

            $table->string('grandfather_name')->nullable();
            $table->string('grandfather_citizenship')->nullable();
            $table->string('grandfather_place_of_issue')->nullable();
            $table->date('grandfather_date_of_issue')->nullable();

            $table->string('father_name')->nullable();
            $table->string('father_citizenship')->nullable();
            $table->string('father_place_of_issue')->nullable();
            $table->date('father_date_of_issue')->nullable();

            $table->string('mother_name')->nullable();
            $table->string('mother_citizenship')->nullable();
            $table->string('mother_place_of_issue')->nullable();
            $table->date('mother_date_of_issue')->nullable();

            $table->string('son_name')->nullable();
            $table->string('son_citizenship')->nullable();
            $table->string('son_place_of_issue')->nullable();
            $table->date('son_date_of_issue')->nullable();

            $table->string('daughter_name')->nullable();
            $table->string('daughter_citizenship')->nullable();
            $table->string('daughter_place_of_issue')->nullable();
            $table->date('daughter_date_of_issue')->nullable();

            $table->string('daughter_in_law_name')->nullable();
            $table->string('daughter_in_law_citizenship')->nullable();
            $table->string('daughter_in_law_place_of_issue')->nullable();
            $table->date('daughter_in_law_date_of_issue')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kym_details');
    }
};
