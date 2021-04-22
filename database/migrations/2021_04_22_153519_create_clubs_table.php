<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('club_name', 100);
            $table->string('club_img', 100);
            $table->string('club_theme', 100);
            $table->integer('club_dep')->unsigned();
            $table->integer('clubs_admin')->unsigned();
            $table->foreign('club_dep')->references('id')->on('departments')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('clubs_admin')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('clubs');
    }
}
