<?php namespace JesseBelcourt\Books;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Jessebelcourt\Books\Components\BookForm' => 'bookform',
    	];
    }

    public function registerSettings()
    {
    }
}
