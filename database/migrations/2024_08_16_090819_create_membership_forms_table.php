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
        Schema::create('membership_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('depositor_id')->constrained()->onDelete('cascade');
            $table->string('member_photo')->nullable();
            $table->string('name_of_member')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('temporary_address')->nullable();
            $table->date('date_of_birth_nepali')->nullable();
            $table->enum('marital_status', ['MARRIED', 'UNMARRIED', 'DIVORCED'])->nullable();
            $table->enum('sex', ['MALE', 'FEMALE', 'OTHER'])->nullable();
            $table->string('name_of_father_husband')->nullable();
            $table->string('name_of_guardian')->nullable();
            $table->string('resident_number')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('office_number')->nullable();
            $table->string('citizenship_number')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('driving_license_number')->nullable();
            $table->string('nominee_name')->nullable();
            $table->string('relation')->nullable();
            $table->string('nominee_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_forms');
    }
};
