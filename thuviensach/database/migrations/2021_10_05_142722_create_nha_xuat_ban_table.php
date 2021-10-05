<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhaXuatBanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nha_xuat_ban', function (Blueprint $table) {
            $table->increments('id_nhaxuatban')->unique();
            $table->string('tennhaxuatban')->unique();
            $table->unsignedInteger('id_Knhaxuatban');
            $table->foreign('id_Knhaxuatban')->references('id_sach')->on('sach');
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
        Schema::dropIfExists('nha_xuat_ban');
    }
}
