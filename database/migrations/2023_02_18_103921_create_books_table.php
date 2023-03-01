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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');//追記
			$table->text('body');//追記
			$table->integer('s1_title')->nullable();
			$table->text('s1_body');
			$table->integer('s1_img')->nullable();
			$table->integer('s2_title')->nullable();
			$table->integer('s2_body')->nullable();
			$table->integer('s2_img')->nullable();
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
        Schema::dropIfExists('books');
    }
};
