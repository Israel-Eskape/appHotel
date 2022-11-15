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
        Schema::create('hotelRooms', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->text('description');
            $table->tinyInteger('available');
            $table->unsignedBigInteger('hotelCost_id');
            $table->unsignedBigInteger('hotelTypeRoom_id');
            $table->unsignedBigInteger('hotelRoomCategory_id');
            $table->unsignedBigInteger('hotelStatusEntity_id');
            $table->foreign('hotelCost_id')
                            ->references('id')
                            ->on('hotelCosts')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelTypeRoom_id')
                            ->references('id')
                            ->on('hotelTypeRooms')
                            ->onUpdate('cascade')
                            ->onDelete('cascade');
            $table->foreign('hotelRoomCategory_id')
                            ->references('id')
                            ->on('hotelRoomCategorys')
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
        Schema::dropIfExists('hotelRooms');
    }
};
