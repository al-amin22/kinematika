<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim11', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc11');
            $table->string('des_kon11');
            $table->string('model_reduksi11');
            $table->text('text_reduksi11');
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
        Schema::dropIfExists('reduksim11');
    }
}
