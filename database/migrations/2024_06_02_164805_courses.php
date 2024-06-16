<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('idcategory');
            $table->foreign('idcategory')->references('id')->on('categories');
            $table->unsignedBigInteger('idteachers');
            $table->foreign('idteachers')->references('id')->on('teachers');
            $table->text('description');
            $table->string('image');


            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
?>
