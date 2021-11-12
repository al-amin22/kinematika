<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim20Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim20', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc20');
            $table->string('des_kon20');
            $table->string('model_reduksi20');
            $table->text('text_reduksi20');
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
        Schema::dropIfExists('reduksim20');
    }
}
