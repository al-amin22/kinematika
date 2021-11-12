<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksi8Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksi8', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc8');
            $table->string('des_kon8');
            $table->string('model_reduksi8');
            $table->text('text_reduksi8');
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
        Schema::dropIfExists('reduksi8');
    }
}
