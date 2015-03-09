<?php namespace app\Http\Controllers;


use Redirect;
use app\Game;
use Request;
use Validator;
use View;
use app\Http\Controllers\Controller;
use app;
use Input;
use app\Category;


class SearchController extends Controller {

	public function index()
	{
		$query = Input::get('query');

		$categories = Category::all();

		$games = Game::where('title', 'LIKE', '%' . $query . '%')->limit(12)->get();

		return view('search.index', [
										'query' => $query,
										'games' => $games,								 									
		 								'current_page' => '/',
		 								'categories' => $categories

										]);
	}


}