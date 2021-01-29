<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_prices', function (Blueprint $table) {
            $table->id();        
            $table->double('price');
            $table->foreignId('item_id');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
            $table->foreignId('ce_id');
            $table->foreign('ce_id')->references('id')->on('commodity_exchanges')->onDelete('cascade');
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
        Schema::dropIfExists('item_prices');
    }
}
