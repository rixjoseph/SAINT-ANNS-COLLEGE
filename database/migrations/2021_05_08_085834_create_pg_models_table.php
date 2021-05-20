<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePgModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pg_models', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('fathername');
            $table->string('mothername');
            $table->string('gender');
            $table->string('dob');
            $table->string('hname');
            $table->string('street');
            $table->string('district');
            $table->string('state');
            $table->string('mobileno');
            $table->string('email');
            $table->string('sslcboard');
            $table->string('sslcmarks');
            $table->string('sslcyear');
            $table->string('hsboard');
            $table->string('hsmarks');
            $table->string('hsyear');
            $table->string('ugboard');
            $table->string('ugmarks');
            $table->string('ugyear');
            $table->string('photo')->nullable();
            $table->string('sslc')->nullable();
            $table->string('hs')->nullable();
            $table->string('ug')->nullable();
            $table->string('course');
            $table->string('status');
            $table->string('paystatus');
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
        Schema::dropIfExists('pg_models');
    }
}
