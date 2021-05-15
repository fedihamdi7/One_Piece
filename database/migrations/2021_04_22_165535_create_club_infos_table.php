<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('about_us');
            $table->string('event_description');
            $table->integer('club_id')->unsigned();
            $table->timestamps();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_infos');
    }
}
