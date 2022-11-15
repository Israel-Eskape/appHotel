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
        Schema::create('hotelReservations', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->date('arrival');
            $table->date('departure');
            $table->integer('amountPeople');
            $table->unsignedBigInteger('hotelRoom_id');
            $table->unsignedBigInteger('hotelCheckIn_id');
            $table->unsignedBigInteger('hotelCheckOut_id');
            $table->unsignedBigInteger('hotelReservationStatu_id');
            $table->unsignedBigInteger('hotelPay_id');
            $table->unsignedBigInteger('hotelStatusEntity_id');
            $table->foreign('hotelRoom_id')
                            ->references('id')
                            ->on('hotelRooms')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelCheckIn_id')
                            ->references('id')
                            ->on('hotelCheckIns')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelCheckOut_id')
                            ->references('id')
                            ->on('hotelCheckOuts')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelReservationStatu_id')
                            ->references('id')
                            ->on('hotelReservationStatus')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelPay_id')
                            ->references('id')
                            ->on('hotelPays')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelStatusEntity_id')
                            ->references('id')
                            ->on('hotelStatusEntitys')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
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
        Schema::dropIfExists('hotelReservations');
    }
};
