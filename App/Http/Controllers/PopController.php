<?php namespace app\Http\Controllers;


use app\Category;
use app\Game;
use View;

class PopController extends Controller {

	public function index()
	{
		$categories = Category::all();

		$games = Game::active()->orderBy('review_count', 'desc')->paginate(10);

		return view('pops.index', [
									'games' => $games,									
		 							'current_page' => 'pops.index',
		 							'categories' => $categories
									]);

	}

}