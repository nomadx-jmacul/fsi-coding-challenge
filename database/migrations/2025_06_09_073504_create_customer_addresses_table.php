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
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')
                ->constrained(
                    table: 'customers'
                )
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('street_no');
            $table->string('street_name');
            $table->string('city');
            $table->string('state', 100);
            $table->string('country');
            $table->string('postcode', 50);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->string('timezone_offset', 100);
            $table->string('timezone_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_addresses', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
        });

        Schema::dropIfExists('customer_addresses');
    }
};
