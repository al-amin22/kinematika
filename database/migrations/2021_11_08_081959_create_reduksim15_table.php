<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim15Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim15', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc15');
            $table->string('des_kon15');
            $table->string('model_reduksi15');
            $table->text('text_reduksi15');
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
        Schema::dropIfExists('reduksim15');
    }
}
