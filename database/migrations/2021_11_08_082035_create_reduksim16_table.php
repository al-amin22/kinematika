<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim16Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim16', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc16');
            $table->string('des_kon16');
            $table->string('model_reduksi16');
            $table->text('text_reduksi16');
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
        Schema::dropIfExists('reduksim16');
    }
}
