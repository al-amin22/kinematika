<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim10Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim10', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc10');
            $table->string('des_kon10');
            $table->string('model_reduksi10');
            $table->text('text_reduksi10');
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
        Schema::dropIfExists('reduksim10');
    }
}
