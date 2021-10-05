<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->increments('id_sach');
            $table->string('ten_sach')->unique();
            $table->integer('id_tacgia')->nullable(true);
            $table->integer('id_theloai');
            $table-> integer('id_nhaxuatban');
            $table->dateTime('ngayxuatban');
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
        Schema::dropIfExists('sach');
    }
}
