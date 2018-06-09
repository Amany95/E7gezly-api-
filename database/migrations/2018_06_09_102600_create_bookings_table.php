<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('book_id');
            $table->integer('doctor_id')->unsigned()->index();
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');

            $table->integer('patient_id')->unsigned()->index();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->enum('status', ['1', '2','3']);
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
        Schema::dropIfExists('bookings');
    }
}
