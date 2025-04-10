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
                $table->id(); // id INT PRIMARY KEY AUTO_INCREMENT
                $table->string('name', 50);
                $table->text('description')->nullable();
                $table->decimal('price', 10, 2);
                $table->string('image', 255)->nullable();
                $table->unsignedBigInteger('category_id')->nullable();
                $table->timestamps(); // tạo 2 cột created_at và updated_at
        
                // Khóa ngoại
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
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
