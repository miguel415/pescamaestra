<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idcourse');
            $table->foreign('idcourse')->references('id')->on('courses');
            $table->unsignedBigInteger('idtool')->nullable();
            $table->foreign('idtool')->references('id')->on('tools');
            $table->unsignedBigInteger('idfish')->nullable();
            $table->foreign('idfish')->references('id')->on('fish');
            $table->string('name'); 
            $table->text('description');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lessons');
    }
};
?>
