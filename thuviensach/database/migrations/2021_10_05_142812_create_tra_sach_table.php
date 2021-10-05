<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tra_sach', function (Blueprint $table) {
            $table->increments('id_tra');
            $table->integer('id_sach')->unique();
            $table->boolean("datra");
            $table->dateTime('ngaytra');
            $table->unsignedInteger('id_Ktrasach');
            $table->foreign('id_Ktrasach')->references('id_sach')->on('sach');
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
        Schema::dropIfExists('tra_sach');
    }
}
