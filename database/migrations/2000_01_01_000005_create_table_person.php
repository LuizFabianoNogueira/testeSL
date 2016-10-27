<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('persons')) 
        {
            Schema::create('persons', function (Blueprint $table) {
                $table->increments('id');
                $table->char('type_person', 1);
                $table->string('name', 50);
                $table->string('last_name', 50);
                $table->string('cpf_cnpj', 50);
                $table->char('sex', 1);
                $table->date('date_of_birth');
                $table->boolean('active');
                $table->integer('created_by');
                $table->integer('updated_by')->nullable();
                $table->timestamps();
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
        Schema::dropIfExists('persons');
    }
}
