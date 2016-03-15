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
            $table->string('habitat');
            $table->string('cultivar');
            $table->string('geschiedenisfolklore');
            $table->string('onderhoud');
            $table->string('teeltoogst');
            $table->string('medicinaal');
            $table->string('recepten');
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
