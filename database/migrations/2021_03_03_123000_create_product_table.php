<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('title');
            $table->float('price');
            $table->integer('quantity_stock');
            $table->mediumtext('description');
            $table->string('image');
            $table->BigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('set null');
            $table->BigInteger('cart_id')->unsigned()->nullable();
            $table->foreign('cart_id')->references('id')->on('cart')->onDelete('set null');
            $table->BigInteger('catalog_id')->unsigned()->nullable();
            $table->foreign('catalog_id')->references('id')->on('catalog')->onDelete('set null');
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
        Schema::dropIfExists('product');
    }
}
