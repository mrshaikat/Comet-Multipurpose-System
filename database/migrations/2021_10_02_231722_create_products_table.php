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
            $table->string('name');
            $table->string('slug');
            $table->integer('regular_price');
            $table->integer('sale_price')->nullable();
            $table->integer('stock')->default(0);
            $table->text('desc')->nullable();
            $table->text('short_desc')->nullable();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->integer('trending')->nullable();
            $table->text('image')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('trash')->default(0);
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
