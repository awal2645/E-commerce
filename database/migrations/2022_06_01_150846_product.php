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
        $table->bigIncrements('id');
        $table->integer('subcat_id');
        $table->string('name');
        $table->string('price');
        $table->string('discount_price');
        $table->string('img1');
        $table->string('img2');
        $table->string('img3');
        $table->string('color');
        $table->string('size');
        $table->boolean('status')->default(1);
        $table->string('discription');
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
        //
    }
};
