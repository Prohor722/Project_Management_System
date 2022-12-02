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
            $table->string('group_id');
            $table->string('topic_id');
            $table->string('t_id');
            $table->boolean('group_status')->nullable();
            $table->timestamps();
        });

        // Schema::create('logins', function (Blueprint $table) {
        //     $table->string('user_id');
        //     $table->foreign('user_id')->referances('group_id')->on('groups')->onDelete('cascade');
        //     $table->string('role');
        //     $table->string('password');
        //     $table->timestamps();
        // });
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
