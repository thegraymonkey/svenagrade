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

class GameController extends Controller {

	protected $game;

	public function __construct(GameInterface $game)
	{
		$this->game = $game;
	}

	public function index()
	{

		$games = $this->game->getPublic();

		$reviews = Review::where('game_id', $game->getKey());

		

		return view('games.index', [
									'games' => $games, 									
		 							'reviews' => $reviews,
		 							'current_page' => '/'	 							
									]);
	}


	public function show($id)
	{
		$categories = Category::all();

		$game = Game::find($id);

		$reviews = Review::where('game_id', $game->getKey())->simplePaginate(10);

		$reviewNum = count($reviews);

		return view('games.show', [
									'reviewNum' => $reviewNum,
									'categories' => $categories,
									'game' => $game, 									
		 							'reviews' => $reviews,
		 							'current_page' => '/'	 							
									]);
	}


	public function store()
	{
		// validation
		$input = Request::all();

		$rules = [
		'title' => 'required|min:5',
		'photo' => 'image|max:2024',
		'description' => 'required|min:5',
		'deadline' => 'required',
		'prizes' => 'min:5',
		'category_id' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			
			$game = new Game;

			$game->title = $input['title'];

			$game->website = $input['website'];

			$game->website_url = $input['website_url'];

			$game->description = $input['description'];

			$game->deadline = $input['deadline'];

			$game->prizes = $input['prizes'];

			$game->winers = $input['winers'];

			$game->category_id = $input['category_id'];
						
			$game = $this->withImage($game, Request::file('photo'));
			
			$game->save();

			return redirect('home')->with('message', 'Game Published!');
		}	

		return redirect('home')->withErrors($validation);

	}


	public function destroy($gameId)
	{
		if ($game = Game::find($gameId))
		{
			if (Auth::user())
			{
				$game->delete();

				return redirect('home')->with('message', 'Game Deleted!');
			}			
			return redirect('home')->withErrors('You Can Not Do That!');			
		}
		return redirect('home')->withErrors('Game Does Not Exist!');	
	}


	public function edit($id)
	{
		$game = Game::find($id);

		$categories = Category::all();

		return view('games/edit',[
									'game' => $game, 
		 							'categories' => $categories
									]);
	}
	

	public function update($id)
	{
		$input = Request::all();

		$rules = [
		'title' => 'required|min:5',
		'photo' => 'image|max:2024',
		'description' => 'required|min:5',
		'deadline' => 'required',
		'prizes' => 'min:5',
		'category_id' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			$game = Game::find($id);

			$image = Request::file('photo');

			if ($game)
			{

				$game->title = $input['title'];

				$game->website = $input['website'];

				$game->website_url = $input['website_url'];

				$game->description = $input['description'];

				$game->deadline = $input['deadline'];

				$game->prizes = $input['prizes'];

				$game->winers = $input['winers'];

				$game->category_id = $input['category_id'];
				
				$game = $this->withImage($game, Request::file('photo'));

				$game->save();

				return redirect('home')->with('message', 'Game Changed!');
			}

			return redirect('home')->withErrors('Game Does Not Exist!');
		}

		return redirect('home')->withErrors($validation);
	}


	protected function withImage(Game $game, $image)
	{
		if ($image)
		{
			// file name factory
			$fileName = time() . md5($image->getClientOriginalName());
			$fileExt = $image->getClientOriginalExtension();

			// image path
			$originalImagePath = public_path().'/upload/games/' . $fileName . '.' . $fileExt;
			
			// save original
			$imager = new ImageManager;
			$imager->make($image)
				->resize(800, 300)
				->save($originalImagePath);

			$game->file_name = $fileName;

			$game->file_ext = $fileExt;
		}
		return $game;
	}



}
