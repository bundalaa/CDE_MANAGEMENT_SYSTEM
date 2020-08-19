<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentifiedChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identified_challenges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('challenge_id');
            // $table->bigInteger('comment_id')->nullable();
            
            $table->string('name');
            $table->string('description');
            $table->integer('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('identified_challenges');
    }
}
