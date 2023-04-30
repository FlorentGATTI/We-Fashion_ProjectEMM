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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_description', 100);
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->string('image');
            $table->enum('size', ['XS', 'S', 'M', 'L', 'XL']);
            $table->string('sizes_available')->nullable();
            $table->boolean('is_published');
            $table->enum('state', ['standard', 'en solde']);
            $table->string('reference', 16);
            $table->foreignId('category_id')->constrained('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
