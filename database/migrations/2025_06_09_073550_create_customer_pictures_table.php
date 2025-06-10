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
        Schema::create('customer_pictures', function (Blueprint $table) {
            $table->id();

            $table->foreignId('customer_id')
                ->constrained(
                    table: 'customers'
                )
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->text('large');
            $table->text('medium');
            $table->text('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customer_pictures', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
        });

        Schema::dropIfExists('customer_pictures');
    }
};
