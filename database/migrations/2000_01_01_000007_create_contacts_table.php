<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('contacts'))
        {
            Schema::create('contacts', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('contacts_type_id')->unsigned();
                $table->string('value', 255);
                $table->boolean('validated');
                $table->boolean('active');
                $table->integer('created_by');
                $table->integer('updated_by')->nullable();
                $table->timestamps();
                $table->foreign('contacts_type_id')->references('id')->on('contacts_types');
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
        Schema::dropIfExists('contacts');
    }
}
