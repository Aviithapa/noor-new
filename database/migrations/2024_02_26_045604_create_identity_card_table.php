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
        Schema::create('identity_cards', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['CITIZENSHIP', 'DRIVING-LICENSE', 'PASSPORT'])->default('CITIZENSHIP');
            $table->string('number');
            $table->string('issued_district');
            $table->date('issued_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('identity_cards');
    }
};
