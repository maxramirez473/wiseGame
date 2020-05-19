<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rankings', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('id');
            $table->integer('total')->unsigned()->default(0);
            $table->integer('arte')->unsigned()->default(0);
            $table->integer('ciencia')->unsigned()->default(0);
            $table->integer('cultura')->unsigned()->default(0);
            $table->integer('deporte')->unsigned()->default(0);
            $table->integer('entretenimiento')->unsigned()->default(0);
            $table->integer('farandula')->unsigned()->default(0);
            $table->integer('gastronomia')->unsigned()->default(0);
            $table->integer('historia')->unsigned()->default(0);
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
        Schema::dropIfExists('rankings');
    }
}
