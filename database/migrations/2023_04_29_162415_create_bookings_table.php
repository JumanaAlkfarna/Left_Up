<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingss', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('modeel')->nullable();
            $table->string('year')->nullable();
            $table->string('cylinder')->nullable();
            $table->date('date');
            // $table->string('time');
            $table->string('location');
            $table->foreignId('user_id');
            $table->foreign('user_id')->on('users')->references('id')->cascadeOnDelete();
            $table->foreignId('car_id');
            $table->foreign('car_id')->on('cars')->references('id')->cascadeOnDelete();
            $table->enum('status' , ['wait' , 'finish'])->default('wait');
            $table->unsignedBigInteger('time_id');
            $table->foreign('time_id')->on('times')->references('id')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('bookings', function (Blueprint $table) {
            $table->unique(['time_id', 'date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingss');
    }
}