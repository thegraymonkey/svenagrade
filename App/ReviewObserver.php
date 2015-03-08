<?php namespace app;

use Illuminate\Database\Eloquent\Model;
use app\Review;
use app\Game;

class ReviewObserver {

    public function created($model)
    {
         $game = $model->game;

         $reviews = $game->reviews()->lists('rating');

         $reviewsCount = count($reviews);

         $reviewsSum = array_sum($reviews);
          
         $avg = $reviewsSum / $reviewsCount;

		 $game->rating = $avg;

		 $gmae->review_count = $reviewsCount;

		 $game->save();
    }

}