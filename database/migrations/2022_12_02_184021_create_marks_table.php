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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->double('po1', 4, 2)->nullable()->default(00.00);
            $table->double('po2', 4, 2)->nullable()->default(00.00);
            $table->double('po3', 4, 2)->nullable()->default(00.00);
            $table->double('po4', 4, 2)->nullable()->default(00.00);
            $table->double('po5', 4, 2)->nullable()->default(00.00);
            $table->double('po6', 4, 2)->nullable()->default(00.00);
            $table->double('po7', 4, 2)->nullable()->default(00.00);
            $table->double('po8', 4, 2)->nullable()->default(00.00);
            $table->double('po9', 4, 2)->nullable()->default(00.00);
            $table->double('po10', 4, 2)->nullable()->default(00.00);
            $table->double('po11', 4, 2)->nullable()->default(00.00);
            $table->double('po12', 4, 2)->nullable()->default(00.00);
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
        Schema::dropIfExists('marks');
    }
};
