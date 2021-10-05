<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuonSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('muon_sach', function (Blueprint $table) {
            $table->increments('id_muon');
            $table->integer('id_nguoidung')->unique();
            $table->integer('id_sach');
            $table->dateTime('ngaymuon');
            $table->unsignedInteger('id_K_Mmuonsach');
            $table->foreign('id_K_Mmuonsach')->references('id_sach')->on('sach');
            $table->unsignedInteger('id_K_Mnguoidung');
            $table->foreign('id_K_Mnguoidung')->references('id_nguoidung')->on('nguoi_dung');
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
        Schema::dropIfExists('muon_sach');
    }
}
