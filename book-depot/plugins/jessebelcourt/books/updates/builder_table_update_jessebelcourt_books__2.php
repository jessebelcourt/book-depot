<?php namespace JesseBelcourt\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJessebelcourtBooks2 extends Migration
{
    public function up()
    {
        Schema::table('jessebelcourt_books_', function($table)
        {
            $table->dropColumn('book_cover');
        });
    }
    
    public function down()
    {
        Schema::table('jessebelcourt_books_', function($table)
        {
            $table->string('book_cover', 191)->nullable();
        });
    }
}
