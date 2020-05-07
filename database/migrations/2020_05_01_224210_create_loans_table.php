<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('book_id')->references('id')->on('books');

           $table->foreign('user_id')->references('id')->on('users');

            //$table->foreignId('books_id')->constrained('books_table');
            //$table->foreignId('users_id')->constrained('users_table');

            //$table->foreignId('user_id');
            //$table->foreignId('book_id');

            //$table->foreign('user_id')->references('id')->on('users');
            //$table->foreign('book_id')->references('id')->on('books');

            $table->date('dt_prev_entrega');
            $table->date('dt_emprestimo');
            $table->date('dt_devolucao')->nullable();
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
        Schema::dropIfExists('loans');

    }
}
