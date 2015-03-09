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


class WinerController extends Controller {

	public function index()
	{
		$categories = Category::all();
		
		$games = Game::where('winers', '!=', '')->orderby('created_at', 'desc')->get();

		return view('winers.index', [	'categories' => $categories,
										'games' => $games,								 									
		 								'current_page' => '/'
										]);
	}


}