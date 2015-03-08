<?php namespace app\Http\Controllers;

use Event;
use app\Review;
use app\Game;
use Request;
use Auth;
use Validator;
use View;
use app\User;
use app\Http\Controllers\Controller;
use app;
use Intervention\Image\ImageManager;
use app\View as ViewModel;
use app\Category;
use app\Repositories\GameInterface;
use Redirect;

class ReviewController extends Controller {

	public function index()
	{
		$reviews = Review::where('game_id', $game->getKey())->simplePaginate(10);

		return view('review.index', ['reviews' => $reviews]);
	}

	public function create()
	{
		return view('review.create');
	}

	public function store()
	{
		$input = Request::all();

		$rules = [
		'name' => 'required|min:2',
		'comment' => 'required|min:5',
		'rating' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			
			$review = new Review;

			$review->fill($input);

			$review->save();

			return Redirect::back()->with('message', 'Review Published!');
		}	

		return Redirect::back()->withErrors($validation);
	}

	public function destroy($reviewId)
	{
		if ($review = Review::find($reviewId))
		{
			if (Auth::user())
			{
				$review->delete();

				return Redirect::back()->with('message', 'Review Deleted!');
			}			
			return Redirect::back()->withErrors('You Can Not Do That!');			
		}
		return Redirect::back()->withErrors('Review Does Not Exist!');	
	}

	

}