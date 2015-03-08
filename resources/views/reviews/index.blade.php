@foreach($reviews as $review)
  <hr>
  <div class="row" style="margin-bottom:10px;">
    <div class="col-md-4">
    	<b><span class="pull-left">{{ $review->name }}</span></b>
    </div>
    <div class="col-md-4">
    @for ($i=1; $i <= 5 ; $i++)
      <span class="text-center glyphicon glyphicon-star{{ ($i <= $review->rating) ? '' : '-empty'}}"></span>
    @endfor
    </div>
    <div class="col-md-4">
    <span class="pull-right">{{ $review->created_at }}</span> 
	</div>
</div>

	<div class="row">
    <div class="col-md-12">
    <p>{{{$review->comment}}}</p>
    </div>
  </div>
@endforeach