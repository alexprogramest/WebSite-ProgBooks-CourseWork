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
    public function up(){
        Schema::create('user_book', function (Blueprint $table) {
            $table->unsignedInteger('bought_book_id');
            $table->unsignedInteger('user_id');
            $table->foreign('bought_book_id')
            ->references('id')
            ->on('books');
            $table->foreign('user_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_bought_books');
    }
};
