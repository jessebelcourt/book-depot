<?php namespace Jessebelcourt\Books\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Jessebelcourt\Books\Models\Book;
use Flash;

class BookForm extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'Book Form',
			'description' => 'Simple book creation form.'
		];
	}

	public function onSave(){
		$book = new Book();
		$book->name = Input::get('name');
		$book->author = Input::get('author');
		$book->amazon_link = Input::get('amazon_link');
		$book->book_cover = Input::file("book_cover");
		$book->save();
		Flash::success('Book Added!');

		return Redirect::back();
	}

}