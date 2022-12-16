<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc');
            $table->string('sku');
            $table->decimal('price', 12,2);
            $table->foreignId('image_id')->constrained('images');
            $table->foreignId('category_id')->constrained('product_category');
            $table->foreignId('inventory_id')->constrained('product_inventory');
            $table->foreignId('discount_id')->constrained('discount');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
