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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->bigInteger('numberVolunteerNiceToHave');
            $table->bigInteger('numberVolunteerNeedToHave');
            $table->longText('description');
            $table->text('meetingPoint');
            $table->bigInteger('udvalg');
            $table->bigInteger('createdBy');
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
        Schema::dropIfExists('tasks');
    }
};
