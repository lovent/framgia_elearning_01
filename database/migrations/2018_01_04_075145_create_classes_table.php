<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('begin_at');
            $table->unsignedInteger('number_of_lesson');
            $table->unsignedInteger('max_slot');
            $table->unsignedInteger('available_slot');
            $table->float('price');
            $table->float('discount')->default(0);
            $table->timestamps();
            $table->unsignedInteger('subject_id');
            $table->unsignedInteger('teacher_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
