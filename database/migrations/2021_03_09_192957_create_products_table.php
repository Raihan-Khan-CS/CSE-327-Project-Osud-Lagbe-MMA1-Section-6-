<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('subsubcategory_id');
            $table->string('product_name_en');
            $table->string('product_name_bn');
            $table->string('product_slug_en');
            $table->string('product_slug_bn');
            $table->string('product_code');
            $table->string('product_qty');
            $table->string('product_tags_en');
            $table->string('product_tags_bn');
            $table->string('product_size_en')->nullable();
            $table->string('product_size_bn')->nullable();
            $table->string('product_color_en');
            $table->string('product_color_bn');
            $table->string('selling_price');
            $table->string('discount_price')->nullable();
            $table->longText('short_descp_en');
            $table->longText('short_descp_bn');
            $table->longText('long_descp_en');
            $table->longText('long_descp_bn');
            $table->string('product_thambnail');
            $table->string('secound_image');
            $table->integer('best_seller')->nullable();
            $table->integer('featured')->nullable();
            $table->integer('hot_deals')->nullable();
            $table->integer('new_arrivals')->nullable();
            $table->integer('status')->default(1);
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
}
