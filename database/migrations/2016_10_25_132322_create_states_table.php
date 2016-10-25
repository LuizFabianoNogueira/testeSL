<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('states')) 
        {
            Schema::create('states', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('country_id')->unsigned();
                $table->integer('code');
                $table->char('uf', 2);
                $table->string('name', 50);
                $table->boolean('active');
                $table->foreign('country_id')->references('id')->on('countries');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
