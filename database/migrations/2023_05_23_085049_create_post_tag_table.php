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
        Schema::create('post_tag', function (Blueprint $table) {

            // $table->id();
            $table->foreignId('post_id')->constrained()->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained()->cascadeOnDelete();

            // $table->unsignedBigInteger('post_id');
            // $table->foreign('post_id')->references('id')->on('posts')->cascadeOnDelete();

            // $table->unsignedBigInteger('tag_id');
            // $table->foreign('tag_id')->references('id')->on('tags')->cascadeOnDelete();


            $table->primary(['post_id', 'tag_id']);
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
        Schema::dropIfExists('post_tag');
    }
};
