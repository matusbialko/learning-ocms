<?php namespace App\Arrival\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('app_arrival_arrivals', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('arrived_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_arrival_arrivals');
    }
}