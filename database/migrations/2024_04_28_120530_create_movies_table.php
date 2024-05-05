<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id');
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->date('year')->nullable();
            $table->time('duration')->nullable();
            $table->string('rating')->nullable();
            $table->string('quality')->nullable();
            $table->string('trailer_link')->nullable();
            $table->string('download_link')->nullable();
            $table->string('file_name')->nullable();
            $table->string('popular')->nullable();
            $table->json('poster')->nullable(); // JSON column for storing multiple images
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
        Schema::dropIfExists('movies');
    }
}
