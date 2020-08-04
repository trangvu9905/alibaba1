<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatgroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatgroup', function (Blueprint $table) {
             $table->bigIncrements('id');
            $table->integer('iduser')->nullable();
            $table->string('name')->nullable();
             $table->timestamp('updatetime')->nullable();
             $table->integer('typegroup')->nullable();
             
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
        Schema::dropIfExists('chatgroup');
    }
}
