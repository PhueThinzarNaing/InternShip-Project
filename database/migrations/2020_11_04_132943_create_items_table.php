<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('description');
            $table->String('photopath');
            $table->bigInteger('Status');
            $table->foreignId('ce_Id');
            $table->foreign('ce_Id')->references('id')->on('commodity_exchanges')->onDelete('cascade');
            $table->foreignId('cat_Id');
            $table->foreign('cat_Id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('items');
    }
}
