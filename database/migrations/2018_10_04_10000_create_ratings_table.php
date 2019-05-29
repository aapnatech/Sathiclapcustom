<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rating');
            $table->integer('booking_service_item_id');
            $table->integer('service_item_id');
            $table->enum('recommend', ['Yes', 'No']);
            $table->string('title');
            $table->string('body');
            $table->boolean('approved')->default(0);
            $table->morphs('reviewrateable');
            $table->morphs('author');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
