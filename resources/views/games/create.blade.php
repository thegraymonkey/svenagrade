<form class="well" method="POST" action="{{ route('games.store') }}" enctype="multipart/form-data">
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">		
	
	<label>New Game</label>

	<div class="form-group">		
		<label>Title</label>
		<textarea  class="form-control" name="title"></textarea>
	</div>

	<div class="form-group">		
		<label>Website</label>
		<textarea  class="form-control" name="website"></textarea>
	</div>

	<div class="form-group">		
		<label>Website Adress</label>
		<textarea  class="form-control" name="website_url"></textarea>
	</div>

	<div class="form-group">	
		<label for="photo">Game Image</label>
		<input class="form-control" type="file" name="photo" id="photo">
	</div>

	<div class="form-group">
		<label>Description</label>
		<textarea  class="form-control" name="description"></textarea>
	</div>

	<div class="form-group">
		<label>Deadline</label>
		<input date-picker-field class="form-control" data-date-format="yyyy-mm-dd" type="text" name="deadline" id="deadline">
	</textarea>
</div>

<div class="form-group">
	<label>Prizes</label>
	<textarea  class="form-control" name="prizes"></textarea>
</div>

<div class="form-group">
	<label>Winers</label>
	<textarea  class="form-control" name="winers"></textarea>
</div>

<div class="form-group">
	<label>Game Category</label>				
	<select class="form-control" name="category_id">
		@foreach($categories as $category)
		<option value="{{ $category->id }}">{{ $category->name }}</option>
		@endforeach
	</select>
</div> 

<div class="form-group">
	<input class="btn btn-primary" type="submit" value="Publish"/>
</div>

</form>


