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
        Schema::create('group_links', function (Blueprint $table) {
            $table->id();
            $table->string('group_id');
            $table->unsignedBigInteger('task_id');
            $table->string('link');
            $table->foreign('group_id')->references('group_id')->on('groups')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('task_id')->references('id')->on('tasks')->cascadeOnUpdate();
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
        Schema::dropIfExists('group_links');
    }
};
