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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('group_id')->unique();
            $table->string('topic_id');
            $table->string('t_id');
            $table->foreign('topic_id')->references('topic_id')->on('topics')->cascadeOnUpdate();
            $table->foreign('t_id')->references('t_id')->on('teachers')->cascadeOnUpdate();
            $table->boolean('group_status')->nullable();
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
        Schema::dropIfExists('groups');
    }
};
