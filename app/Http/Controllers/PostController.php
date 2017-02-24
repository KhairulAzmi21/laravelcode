<?php

namespace App\Http\Controllers;

use App\Post;

class PostController extends Controller {
	public function index() {
		return view('blog.index');
	}
	public function show() {
		return view('blog.show');
	}
	public function create() {
		return view('blog.create');
	}
	public function store() {
		//create a new post using the request data
		// save it to the database
		// and then redirect to the home page
		//dd(request()->all());
		$this->validate(request(), [
			'title' => 'required|max:50',
			'body'  => 'required']);
		Post::create(request(['title', 'body']));
		return view('blog.create');
		/*Post::create([
			'title' => request('title'),
			'body'  => request('body'),
		]);*/
		/*$post        = new Post;
			$post->title = request('title');
			$post->body  = request('body');
			$post->save();
		*/
	}
}
