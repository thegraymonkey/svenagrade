<?php namespace app;

use Illuminate\Database\Eloquent\Model;
use app\Game;

class Review extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reviews';


	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

		'rating',
		'comment',
		'game_id',
		'name',
		'user_ip'
	];

	
	public function game()
	{
		return $this->belongsTo('app\Game');
	}


	public function getDates()
	{
		return ['created_at', 'updated_at'];
	}


}