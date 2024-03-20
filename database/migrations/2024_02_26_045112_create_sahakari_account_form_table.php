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
        Schema::create('sahakari_account_form', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('name_nepali');
            $table->date('date_of_birth_nepali');
            $table->enum('material_status', ['MARRIED', 'UN-MARRIED', 'DIVORCED'])->default('UN-MARRIED');
            $table->enum('sex', ['MALE', 'FEMALE', 'OTHER'])->default('MALE');
            $table->string('occupation')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sahakari_account_form');
    }
};
