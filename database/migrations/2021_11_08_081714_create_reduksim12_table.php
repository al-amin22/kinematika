<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReduksim12Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reduksim12', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('des_msc12');
            $table->string('des_kon12');
            $table->string('model_reduksi12');
            $table->text('text_reduksi12');
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
        Schema::dropIfExists('reduksim12');
    }
}
