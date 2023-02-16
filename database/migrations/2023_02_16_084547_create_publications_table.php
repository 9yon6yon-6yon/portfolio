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
        Schema::create('publications', function (Blueprint $table) {
            $table->id('pub_id')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('publisher');
            $table->date('publication_date');
            $table->string('link');
            $table->text('citation');
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
        Schema::dropIfExists('publications');
    }
};
