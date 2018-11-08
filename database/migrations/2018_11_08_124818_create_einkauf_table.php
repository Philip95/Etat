<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEinkaufTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('einkauf', function (Blueprint $table) {
            $table->increments('ek_id');
            $table->integer('p_id');
            $table->integer('e_id');
            $table->integer('l_id');
            $table->integer('a_id');
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
        Schema::dropIfExists('einkauf');
    }
}
