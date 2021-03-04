<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id();
              $table->string('name_product');
              $table->float('price');
              $table->unsignedBigInteger('user_id');
              $table->integer('quantity_unit')->default(0);
              $table->integer('quantity_buy');
            $table->timestamps();
        });
        Schema::table('cart', function (Blueprint $table){
          $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
