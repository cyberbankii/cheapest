<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromotionTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotion_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('promotion_id')->index()->unsigned();
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');
            $table->integer('tag_id')->index()->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
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
        Schema::drop('promotion_tag');
    }
}
