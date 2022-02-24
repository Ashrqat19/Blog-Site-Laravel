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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->unique();
            $table->string('imageView', 255);
            $table->string('tags', 255);
            $table->string('blogBody', 255);
            $table->string('description', 255);
            $table->string('publisherName', 255);
            $table->string('imagePublisher', 255);
            $table->date('publishTime', 255);
            $table->string('readTime', 255);
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
        Schema::dropIfExists('blogs');
    }
};