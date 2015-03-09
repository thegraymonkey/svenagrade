<?php namespace app;

use Illuminate\Database\Eloquent\Model;
use app\Review;
use Carbon\Carbon;

class Game extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'games';


	
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [

	'title',
	'deadline',
	'file_name',
	'file_ext',
	'description',
	'prizes',
	'winers',
	'category_id',
	'website',
	'website_url'
	
	];

	
	public function categories()
	{
		return $this->belongsTo('app\Category');
	}

	public function reviews()
	{
		return $this->hasMany('app\Review');
	}

	
	

	public function getImagePath()
	{
		return sprintf('/upload/games/%s.%s', $this->file_name, $this->file_ext);
	}

	public function getDates()
	{
		return ['created_at', 'updated_at', 'deadline'];
	}

	public function scopeActive($query)
	{
		return $query->where( 'deadline', '>', Carbon::now());

	}

	public function scopePassive($query)
	{
		return $query->where( 'deadline', '<', Carbon::now());

	}



}
