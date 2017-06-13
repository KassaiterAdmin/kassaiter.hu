<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonyvekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konyvek', function (Blueprint $table) {
            $table->increments('id');
            $table->text('ssz');
            $table->text('cim');
            $table->text('szerzo');
            $table->text('kiado');
            $table->text('ev');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('konyvek');
    }
}