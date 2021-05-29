<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('event_name');
            $table->string('slug_link');
            $table->date('start_from');
            $table->time('door_open');
            $table->time('show_start');
            $table->string('event_location');
            $table->longText('event_desctiption');
            $table->string('ticket_price');
            $table->string('event_photo')->default('default.jpg');
            $table->string('event_status')->default(1);
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
        Schema::dropIfExists('events');
    }
}
