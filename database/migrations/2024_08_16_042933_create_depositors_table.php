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
        Schema::create('depositors', function (Blueprint $table) {
            $table->id();
            $table->string('depositor_photo')->nullable();
            $table->string('name_of_depositor')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('temporary_address')->nullable();
            $table->string('date_of_birth_nepali')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('sex')->nullable();
            $table->string('name_of_father_husband')->nullable();
            $table->string('name_of_guardian')->nullable();
            $table->string('resident_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('office_number')->nullable();
            $table->string('citizenship_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('driving_license_number')->nullable();
            $table->string('type_of_account')->nullable();
            $table->string('period')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('relation')->nullable();
            $table->string('nominee_address')->nullable();
            $table->string('name_of_minor')->nullable();
            $table->string('age_of_minor')->nullable();
            $table->string('name_of_minor_guardian')->nullable();
            $table->string('relation_with_minor')->nullable();
            $table->string('address_of_minor_guardian')->nullable();
            $table->string('contact_number_of_guardian')->nullable();
            $table->string('name_of_nominee')->nullable();
            $table->string('relation_with_nominee')->nullable();
            $table->string('nominee_guardian_name')->nullable();
            $table->string('nominee_dob')->nullable();
            $table->string('nominee_contact')->nullable();
            $table->string('nominee_citizenship')->nullable();
            $table->string('citizenship_issued_date')->nullable();
            $table->string('citizenship_issue_place')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected', 'reviewing'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('depositors');
    }
};
