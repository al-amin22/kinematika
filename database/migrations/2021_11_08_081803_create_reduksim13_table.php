<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim13Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim13', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc13');
            $table->string('des_kon13');
            $table->string('model_reduksi13');
            $table->text('text_reduksi13');
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
        Schema::dropIfExists('reduksim13');
    }
}
