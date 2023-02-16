<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personalinfos', function (Blueprint $table) {
            $table->id('pinfo_id')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->string('fathersName', 50);
            $table->string('mothersName', 50);
            $table->string('image_path', 255);
            $table->date('dob');
            $table->string('nationalId', 100);
            $table->text('address');
            $table->timestamps();
            $table->foreign('user_id')->references('u_id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personalinfos');
    }
};
