<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('file')->nullable();
=======
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('sender_name')->nullable();
            
            $table->string('file_path')->nullable();
>>>>>>> 2e71f0909bc4c2f9e58c8c995036eabaf56a6636
            $table->bigInteger('challengeOwner_id');
            $table->bigInteger('coordinator_id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
