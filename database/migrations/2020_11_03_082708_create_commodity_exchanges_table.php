<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommodityExchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodity_exchanges', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('email');
            $table->String('address');
            $table->String('phno1');
            $table->String('phno2');
            $table->String('photopath');
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('commodity_exchanges');
    }
}
