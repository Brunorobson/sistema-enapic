<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('avaliations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('submission_id');
            $table->integer('total');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('submission_id')->references('id')->on('submissions');
        });

        Schema::create('avaliation_criteria', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('avaliation_id');
            $table->unsignedInteger('criteria_id');
            $table->integer('note');
            $table->timestamps();

            $table->foreign('avaliation_id')->references('id')->on('avaliations');
            $table->foreign('criteria_id')->references('id')->on('criterias');
        });
    }

    public function down()
    {
        Schema::dropIfExists('avaliation_criteria');
        Schema::dropIfExists('avaliations');
    }
};
