<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrakerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prakerjas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('no_ktp')->unique();
            $table->char('nama',50);
            $table->char('orang_tua',50);
            $table->bigInteger('nominal');
            $table->string('program');
            $table->string('foto');
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
        Schema::dropIfExists('prakerjas');
    }
}
