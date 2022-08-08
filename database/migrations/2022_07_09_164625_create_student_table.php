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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->string('studentID')->unique();
            $table->string('fullname');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('pupil_class');
            $table->string('place_of_residence');
            $table->string('email')->unique();
            $table->string('religion');
            $table->string('profile_image')->unique();
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
        Schema::dropIfExists('student');
    }
};
