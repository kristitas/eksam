<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBurgersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('burgers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('size', ['SMALL' , 'MEDIUM' , 'LARGE']);
            $table->text('description');
            $table->integer('price');
            $table->enum('ingredients', ['VEGE' , 'VEGETARIAN', 'CHILLI', 'GLUTEN FREE']);
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
        Schema::dropIfExists('burgers');
    }
}
