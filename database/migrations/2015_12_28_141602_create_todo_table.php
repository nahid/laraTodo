<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTodoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('todo', function(Blueprint $tbl){
          $tbl->increments('id');
          $tbl->string('task', 50);
          $tbl->text('details')->nullable();
          $tbl->boolean('status')->default(0);
          $tbl->date('execute_time');
          $tbl->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('todo');
    }
}
