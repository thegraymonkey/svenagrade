<?php namespace app\Http\Controllers;

use app\Game;
use View;
use app\Http\Controllers\Controller;
use app\Category;

class ArchiveController extends Controller {

	public function index()
	{

		$categories = Category::all();

		$games = Game::passive()->orderby('created_at', 'desc')->paginate(10);

		return view('archives.index', [
									'categories' => $categories,
									'games' => $games,																		
		 							'current_page' => '/'		 							
									]);

	}

}