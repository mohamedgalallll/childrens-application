<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibrariesMainCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('library_main_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('icon')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_ar')->nullable();
            $table->integer('status')->default(1)->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('library_main_categories');
    }
}
