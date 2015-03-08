<div class="well well-sm" style="margin-top:20px;">
	<div class="text-center">
		<a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Komentarisi & Oceni</a>
	</div>

	<div class="row" id="post-review-box" style="display:none;">
		<div class="col-md-12">
			<form accept-charset="UTF-8" action="{{ route('reviews.store') }}" method="post">
				<input id="ratings-hidden" name="rating" type="hidden"> 
				<input type="hidden" name="_token" value="{{ csrf_token() }}">	
				<input name="game_id" type="hidden" value="{{ $game->id }}"/>	

				<input class="form-control animated" cols="50" id="new-review" name="name" placeholder="Your name here..." required autofokus>
				<textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>

				<div class="text-center">
					<div class="stars starrr" data-rating="0"></div>
					<a class="btn btn-danger btn-sm" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
						<span class="glyphicon glyphicon-remove"></span>Cancel</a>
						<button class="btn btn-success btn-lg" type="submit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>