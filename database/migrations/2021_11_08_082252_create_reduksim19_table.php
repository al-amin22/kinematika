<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim19Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim19', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->string('des_msc19');
            $table->string('des_kon19');
            $table->string('model_reduksi19');
            $table->text('text_reduksi19');
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
        Schema::dropIfExists('reduksim19');
    }
}
