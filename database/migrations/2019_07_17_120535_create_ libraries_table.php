<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesTable extends Migration
{
    public function up()
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('file')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->bigInteger('library_main_category_id')->unsigned();
            $table->foreign('library_main_category_id')->references('id')->on('library_main_categories')->onDelete('cascade');
            $table->bigInteger('library_sub_category_id')->unsigned();
            $table->foreign('library_sub_category_id')->references('id')->on('library_sub_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('libraries');
    }
}
