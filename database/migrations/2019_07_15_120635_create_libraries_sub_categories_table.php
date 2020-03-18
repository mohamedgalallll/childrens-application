<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesSubCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('Library_sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->bigInteger('library_main_category_id')->unsigned();
            $table->foreign('library_main_category_id')->references('id')->on('library_main_categories')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('Library_sub_categories');
    }
}
