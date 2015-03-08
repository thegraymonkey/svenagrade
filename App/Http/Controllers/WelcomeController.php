<?php namespace app\Http\Controllers;

use app\Game;
use app\Repositories\GameInterface;
use app\Category;
use app\Review;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/
	protected $game;
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(GameInterface $game)
	{
		$this->game = $game;
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$games = $this->game->getPublic();

		$categories = Category::all();

		return view('welcome', [
								'current_page' => '/',
								'games' => $games,
								'categories' => $categories
								]);
	}

}
