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
            $table->string('student_id')->unique();
            $table->foreign('student_id')->references('student_id')->on('students')
            ->cascadeOnUpdate()->cascadeOnDelete();

            $table->double('p0', 4, 2)->nullable()->default(00.00);
            $table->double('p1', 4, 2)->nullable()->default(00.00);
            $table->double('p2', 4, 2)->nullable()->default(00.00);
            $table->double('p3', 4, 2)->nullable()->default(00.00);
            $table->double('p4', 4, 2)->nullable()->default(00.00);
            $table->double('p5', 4, 2)->nullable()->default(00.00);
            $table->double('p6', 4, 2)->nullable()->default(00.00);
            $table->double('p7', 4, 2)->nullable()->default(00.00);
            $table->double('p8', 4, 2)->nullable()->default(00.00);
            $table->double('p9', 4, 2)->nullable()->default(00.00);
            $table->double('p10', 4, 2)->nullable()->default(00.00);
            $table->double('p11', 4, 2)->nullable()->default(00.00);
            $table->double('p12', 4, 2)->nullable()->default(00.00);
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
