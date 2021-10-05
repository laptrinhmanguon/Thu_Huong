<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_loai', function (Blueprint $table) {
            $table->increments('id_theloai');
            $table->string('tentheloai')->unique();
            $table->unsignedInteger('id_Ktheloai');
            $table->foreign('id_Ktheloai')->references('id_sach')->on('sach');
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
        Schema::dropIfExists('the_loai');
    }
}
