<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// HINT: Defines a new migration class.
return new class extends Migration
{
    /**
     * Run the migrations.
     * HINT: The 'up' method creates the table.
     */
    public function up(): void
    {
        // HINT: Creates the 'products' table.
        Schema::create('products', function (Blueprint $table) {
            // HINT: Auto-incrementing primary key.
            $table->id();

            // HINT: String column for product name.
            $table->string('name');

            // HINT: Text column for description, can be null.
            $table->text('description')->nullable();

            // HINT: Decimal column for price, with 2 decimal places.
            $table->decimal('price', 10, 2);

            // HINT: Adds 'created_at' and 'updated_at' timestamps.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * HINT: The 'down' method drops the table.
     */
    public function down(): void
    {
        // HINT: Deletes the 'products' table if it exists.
        Schema::dropIfExists('products');
    }
};