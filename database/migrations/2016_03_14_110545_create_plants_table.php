<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('latijnsenaam');
            $table->string('beschrijving');
            $table->string('familie');
            $table->string('geslacht');
            $table->string('plantensoort');
            $table->string('gebruik');
            $table->string('habitat');
            $table->string('hoogte');
            $table->string('bloemkleur');
            $table->string('bloeiperiode');
            $table->string('bloemen');
            $table->string('bladkleur');
            $table->string('bladeren');
            $table->string('bladhoudendverliezend');
            $table->string('shaduw');
            $table->string('vochtigheid');
            $table->string('zuurtegraad');
            $table->string('winterhard');
            $table->string('plantdichtheid');
            $table->string('cultivar');
            $table->string('geschiedenisfolklore');
            $table->string('onderhoud');
            $table->string('teeltoogst');
            $table->string('medicinaal');
            $table->string('bloemschikken');
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
        Schema::drop('plants');
    }
}
