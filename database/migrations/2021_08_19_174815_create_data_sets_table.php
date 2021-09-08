<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_sets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('event_state')->nullable();
            $table->string('event_lga')->nullable();
            $table->string('event_local')->nullable();
            $table->string('event_fatalities')->nullable();
            $table->string('event_latitude')->nullable();
            $table->string('event_longitude')->nullable();
            $table->string('event_zone')->nullable();
            $table->string('event_state_slug')->nullable();
            $table->string('event_year')->nullable();
            $table->date('event_date')->nullable();
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
        Schema::dropIfExists('data_sets');
    }
}
