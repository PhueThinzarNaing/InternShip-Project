<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateByusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');            
            $table->string('description');
            $table->double('price');          
            $table->double('weight');
            $table->double('total_price');
            $table->foreignId('commodity_exchanges_id');
            $table->foreign('commodity_exchanges_id')->references('id')->on('commodity_exchanges')->onDelete('cascade');          
            $table->foreignId('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('byus');
    }
}
