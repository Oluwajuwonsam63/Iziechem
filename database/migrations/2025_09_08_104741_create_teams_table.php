<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->id('team_id');
            $table->string('name');
            $table->string('role');
            $table->text('bio');
            $table->string('image');
            $table->string('sign')->nullable('null');
            $table->integer('phone', 20)->nullable('null');
            $table->text('email');
            $table->text('location')->nullable('null');
        // Three fixed social media links
            $table->string('facebook')->nullable('#');
            $table->string('instagram')->nullable('#');
            $table->string('youtube')->nullable('#');
            $table->string('linkedIn')->nullable('#');
            $table->string('x')->nullable('#');
            $table->string('tiktok')->nullable('#');
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
        Schema::dropIfExists('teams');
    }
}
