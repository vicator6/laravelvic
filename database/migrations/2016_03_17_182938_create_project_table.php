<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('projets', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nomduprojet', 255);
            $table->string('nom');
            $table->string('fonction', 255);
            $table->string('adresse', 255);
            $table->string('email', 255);
            $table->longText('tel');

            $table->string('nom', 255);
            $table->string('fonction', 255);

            $table->string('adresse', 255);
            $table->string('email', 255);
            $table->longText('tel');
            $table->longText('contexte');
            $table->longText('demande');
            $table->longText('objectif');
            $table->longText('contrainte');
            $table->timestamps();
            $table->integer('validation');
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
