<?php namespace JesseBelcourt\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJessebelcourtBooks extends Migration
{
    public function up()
    {
        Schema::create('jessebelcourt_books_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 300);
            $table->string('author', 300);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jessebelcourt_books_');
    }
}
