<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->softDeletes();
            $table->timestamps();
            //$table->integer('created_at');
            //$table->integer('updated_at');
        });

        Schema::create('dish_translations', function(Blueprint $table)
        {
            $table->increments('id');        
            $table->integer('dish_id')->unsigned();           
            $table->string('title');
            $table->string('description');
            $table->string('locale')->index();
            
            $table->unique(['dish_id', 'locale']);
            $table->foreign('dish_id')->references('id')->on('dishes')->onDelete('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes');
    }
}
