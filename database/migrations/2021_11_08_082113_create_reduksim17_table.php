<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim17Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim17', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc17');
            $table->string('des_kon17');
            $table->string('model_reduksi17');
            $table->text('text_reduksi17');
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
        Schema::dropIfExists('reduksim17');
    }
}
