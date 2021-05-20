<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotficationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notfication_models', function (Blueprint $table) {
            $table->id();
            $table->string('scholarship');
            $table->string('notboard');
            $table->string('acheivements');
            $table->string('admission');
            $table->string('successstory');
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
        Schema::dropIfExists('notfication_models');
    }
}
