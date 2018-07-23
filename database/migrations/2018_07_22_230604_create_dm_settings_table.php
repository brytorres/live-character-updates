<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDmSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dm_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_title');
            $table->string('site_subtitle');
            $table->boolean('site_active');
            $table->integer('max_players');
            $table->boolean('registrations_allowed');
            $table->string('campaigns_all');
            $table->string('campaigns_active');
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
        Schema::dropIfExists('dm_settings');
    }
}
