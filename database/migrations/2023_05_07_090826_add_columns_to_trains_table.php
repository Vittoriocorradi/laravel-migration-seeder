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
        Schema::table('trains', function (Blueprint $table) {
            $table->string('company', 50);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->mediumInteger('train_id')->unsigned();
            $table->tinyInteger('n_carriages')->unsigned();
            $table->tinyInteger('in_time')->unsigned()->default(1);
            $table->tinyInteger('cancelled')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('company');
            $table->dropColumn('departure_station');
            $table->dropColumn('arrival_station');
            $table->dropColumn('departure_time');
            $table->dropColumn('arrival_time');
            $table->dropColumn('train_id');
            $table->dropColumn('n_carriages');
            $table->dropColumn('in_time');
            $table->dropColumn('cancelled');
        });
    }
};
