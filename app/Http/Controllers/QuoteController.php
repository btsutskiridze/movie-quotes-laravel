<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Movie;

class QuoteController extends Controller
{
	public function index()
	{
		return view('random-quote', [
			'quote'=> Quote::inRandomOrder()->first(), //just testing will make random soon
		]);
	}

	public function show(Movie $movie)
	{
		return view('movie-quotes', [
			'movie'  => $movie,
			'quotes' => $movie->quotes,
		]);
	}
}