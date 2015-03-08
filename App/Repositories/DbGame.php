<?php namespace app\Repositories;

use DB;

class DbGame implements GameInterface {

	public function getPublic()
	{
		return DB::table('games')->orderBy('created_at', 'desc')->get();
	}
}