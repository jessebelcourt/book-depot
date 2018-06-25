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
		$validator = Validator::make(
			[
				'name' =>  Input::get('name'),
				'author' => Input::get('author'),
				'amazon_link' =>  Input::get('amazon_link'),
				'book_cover' => Input::file("book_cover"),
			],
			[
				'name' => 'required|min:1',
				'author' => 'required|min:1',
				'amazon_link' => 'required|url',
				'book_cover' => 'required|image',
			]
		);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator);
		}
		else
		{
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

}