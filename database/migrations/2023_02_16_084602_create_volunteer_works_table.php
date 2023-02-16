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
        Schema::create('volunteer_works', function (Blueprint $table) {
            $table->id('vol_id')->autoIncrement();
            $table->unsignedBigInteger('user_id');
            $table->string('organization');
            $table->string('role',100);
            $table->date('start_date');
            $table->date('end_date');
            $table->text('description');
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
        Schema::dropIfExists('volunteer_works');
    }
};
