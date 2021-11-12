<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim14Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim14', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc14');
            $table->string('des_kon14');
            $table->string('model_reduksi14');
            $table->text('text_reduksi14');
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
        Schema::dropIfExists('reduksim14');
    }
}
