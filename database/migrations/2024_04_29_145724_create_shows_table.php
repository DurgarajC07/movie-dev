<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->increments('id');
            $table->json('category_id');
            $table->string('show_name')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->date('year')->nullable();
            $table->time('duration')->nullable();
            $table->string('rating')->nullable();
            $table->string('quality')->nullable();
            $table->string('trailer_link')->nullable();
            $table->boolean('popular')->nullable();
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
        Schema::dropIfExists('shows');
    }
}
