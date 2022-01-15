<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
            $table->increments('pid');
            $table->integer('uid');
            $table->integer('views')->default(0);
            $table->string('slug');
            $table->string('title');
            $table->string('image',1000)->nullable();
            $table->string('content',5000);
            $table->timestamps();
        });

        Schema::create('post_images', function(Blueprint $table){
            $table->increments('pimid');
            $table->integer('pid');
            $table->string('url',1000);
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
}
