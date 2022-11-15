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
        Schema::create('hotelHotels', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('description');
            $table->string('addres',100);
            $table->string('phone',20);
            $table->string('email',50);
            $table->unsignedBigInteger('hotelIddtec_id');
            $table->unsignedBigInteger('hotelEmployee_id');
            $table->unsignedBigInteger('hotelRoom_id');
            $table->unsignedBigInteger('hotelStatusEntity_id');
            $table->foreign('hotelIddtec_id')
                            ->references('id')
                            ->on('hotelIddtecs')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelEmployee_id')
                            ->references('id')
                            ->on('hotelEmployees')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelRoom_id')
                            ->references('id')
                            ->on('hotelRooms')
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
        Schema::dropIfExists('hotelHotels');
    }
};
