<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim18Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim18', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc18');
            $table->string('des_kon18');
            $table->string('model_reduksi18');
            $table->text('text_reduksi18');
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
        Schema::dropIfExists('reduksim18');
    }
}
