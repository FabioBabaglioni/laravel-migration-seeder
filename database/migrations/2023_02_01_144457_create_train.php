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
        Schema::create('train', function (Blueprint $table) {
            $table->id();

            $table -> char('code', 10) -> unique();
            $table -> char('departureStation', 40);
            $table -> char('arrivalStation', 40);
            $table -> dateTime('departureTime');
            $table -> dateTime('arrivalTime');
            $table -> smallInteger('numberOfCarriage');
            $table -> boolean('deleted');
            
            
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
        Schema::dropIfExists('train');
    }
};
