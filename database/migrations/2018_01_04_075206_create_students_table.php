<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->boolean('active')->default(1);
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->enum('gender', ['female', 'male']);
            $table->string('avatar_url')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->rememberToken('remember_token');
            $table->timestamps();
            $table->unsignedInteger('school_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
