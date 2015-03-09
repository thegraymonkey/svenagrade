<?php namespace app\Http\Controllers;


use app\Category;
use app\Game;
use Request;
use Auth;
use Validator;
use View;
use app\User;
use app\Http\Controllers\Controller;
use app;
use Intervention\Image\ImageManager;


class CategoryController extends Controller {


	public function show($id)
	{
		$categories = Category::all();
		$category = Category::find($id);

		$games = Game::active()->where('category_id', $category->id )->paginate(10);

		return view('categories/show', [
									'categories' => $categories,
									'category' => $category,
		 							'current_page' => '/',
		 							'games' => $games

								]);
	}

	public function store()
	{
		// validation
		$input = Request::all();

		$rules = [
		'name' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
				
			$category = new Category;

			$category->fill($input);
								
			$category->save();

			return redirect('home')->with('message', 'Category Created!');
		}	

		return redirect('home')->withErrors($validation);
	}


	public function destroy($categoryId)
	{
		if ($category = Category::find($categoryId))
		{
			if (Auth::user())
			{
				$category->delete();

				return redirect('home')->with('message', 'Category Deleted!');
			}			
			return redirect('home')->withErrors('You Can Not Do That!');			
		}
		return redirect('home')->withErrors('Category Does Not Exist!');	
	}


	public function edit($id)
	{
		$category = Category::find($id);

		return view('categories/edit')->with('category', $category);
	}
	

	public function update($id)
	{
		$input = Request::all();

		$rules = [
		'name' => 'required'
		];

		$validation = Validator::make($input, $rules);

		if ($validation->passes())
		{
			$category = Category::find($id);

			if ($category)
			{

				$category->fill($input);
								
				$category->save();

				return redirect('home')->with('message', 'Category Changed!');
			}

			return redirect('home')->withErrors('Category Does Not Exist!');
		}

		return redirect('home')->withErrors($validation);
	}


}