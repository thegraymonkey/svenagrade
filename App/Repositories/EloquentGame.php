<?php namespace app\Repositories;

use app\Game;

class EloquentGame implements GameInterface {

	public function getPublic()
	{ 
		return Game::orderBy('created_at', 'desc')->paginate(12);
	}

}