<?php namespace JesseBelcourt\Books\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJessebelcourtBooks3 extends Migration
{
    public function up()
    {
        Schema::table('jessebelcourt_books_', function($table)
        {
            $table->string('amazon_link', 300);
        });
    }
    
    public function down()
    {
        Schema::table('jessebelcourt_books_', function($table)
        {
            $table->dropColumn('amazon_link');
        });
    }
}
