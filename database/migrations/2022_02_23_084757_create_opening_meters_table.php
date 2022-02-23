<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpeningMetersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opening_meters', function (Blueprint $table) {
            $table->id('open_id');
            $table->date('opening_date');
            //shift
            $table->unsignedBigInteger('shift_id');
            $table->foreign('shift_id')->references('shift_id')->on('shifts');
            //pump
            $table->unsignedBigInteger('pump_id');
            $table->foreign('pump_id')->references('pump_id')->on('pumps');
            //meter count
            $table->double('opening_meter',10,2);

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
        Schema::dropIfExists('opening_meters');
    }
}
