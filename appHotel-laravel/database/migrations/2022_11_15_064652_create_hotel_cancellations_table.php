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
        Schema::create('hotelCancellations', function (Blueprint $table) {
            $table->id();
            $table->text('reason');
            $table->float('refound');
            $table->unsignedBigInteger('hotelReservation_id');
            $table->unsignedBigInteger('hotelStatusEntity_id');
            $table->foreign('hotelReservation_id')
                            ->references('id')
                            ->on('hotelReservations')
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
        Schema::dropIfExists('hotelCancellations');
    }
};
