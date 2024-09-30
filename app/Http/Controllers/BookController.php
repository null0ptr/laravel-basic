<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
	public function index()
	{
		$books = Book::paginate(20);
		return view('books.index')->with('books', $books);
	}
	public function show($id)
	{
		$book = Book::find($id);
		return view('books.show')->with('book', $book);
	}
	public function create()
	{
		return view('books.create');
	}
	public function store(Request $request)
	{
		$rules = [
			'title' => ['required', 'max:255'],
			'author' => ['required', 'max:255'],
			'isbn' => ['required', 'size:13'],
			'price' => ['required', 'numeric', 'gte:0'],
			'stock' => ['required', 'integer', 'gte:0'],
		];
		$messages = [
			'title.required' => 'Title is required',
			'title.max' => 'Title is too long',
			'author.required' => 'Author is required',
			'author.max' => 'Author name is too long',
			'isbn.required' => 'ISBN is required',
			'isbn.size' => 'ISBN must be 13 characters',
			'price.required' => 'Price is required',
			'price.numeric' => 'Price must be a number',
			'price.gte' => 'Price must be greater than or equal to 0',
			'stock.required' => 'Stock is required',
			'stock.integer' => 'Stock must be an integer',
			'stock.gte' => 'Stock must be greater than or equal to 0',
		];
		$request->validate($rules, $messages);
		Book::create($request->all());
		return redirect()->route('books.index');
	}
}
