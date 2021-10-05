<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTacGiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tac_gia', function (Blueprint $table) {
            $table->increments('id_tacgia');
            $table->string('tentacgia')->unique();
            $table->unsignedInteger('id_Ktacgia');
            $table->foreign('id_Ktacgia')->references('id_sach')->on('sach');
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
        Schema::dropIfExists('tac_gia');
    }
}
