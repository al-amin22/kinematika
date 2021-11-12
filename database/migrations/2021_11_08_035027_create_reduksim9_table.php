<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim9Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim9', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc9');
            $table->string('des_kon9');
            $table->string('model_reduksi9');
            $table->text('text_reduksi9');
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
        Schema::dropIfExists('reduksim9');
    }
}
