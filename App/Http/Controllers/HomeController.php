<?php namespace app\Http\Controllers;

use app\Game;
use Request;
use Auth;
use Validator;
use View;
use app\User;
use app\Http\Controllers\Controller;
use app;
use app\Category;
use app\Review;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$games = Game::orderBy('created_at', 'desc')->paginate(10);

		$categories = Category::all();

		return view('home', [
		 						'categories' => $categories,
		 						'games' => $games
		 					]);
	}

}
