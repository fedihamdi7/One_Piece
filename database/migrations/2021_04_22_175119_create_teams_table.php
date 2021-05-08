<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name');
            $table->string('team_img');
            $table->string('team_titre');
            $table->string('team_fb');
            $table->string('team_insta');
            $table->string('team_twitter');
            $table->string('team_linkedin');
            $table->integer('club_id')->unsigned();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('teams');
    }
}
