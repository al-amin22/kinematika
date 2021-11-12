<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim7Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim7', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc7');
            $table->string('des_kon7');
            $table->string('model_reduksi7');
            $table->text('text_reduksi7');
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
        Schema::dropIfExists('reduksim7');
    }
}
