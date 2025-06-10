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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 10);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('birthdate');
            $table->integer('age');
            $table->string('telephone_no', 50);
            $table->string('cellular_no', 50);
            $table->string('nationality');
            $table->string('registration_date');
            $table->integer('registration_age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
