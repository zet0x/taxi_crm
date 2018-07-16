<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrmAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crm_autos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mark_id');
            $table->integer('model_id');
            $table->string('number');
            $table->string('color');
            $table->integer('year');
            $table->string('city');
            $table->text('comment')->nullable();
            $table->boolean('brand');
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
        Schema::dropIfExists('crm_autos');
    }
}
