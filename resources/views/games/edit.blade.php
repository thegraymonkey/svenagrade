@extends('app')

@section('content')

<div class="row">
		<div class="col-md-10 col-md-offset-1">
			
			<form class="well" method="POST" action="{{ route('games.update', [$game->id]) }}" enctype="multipart/form-data">
				<input type="hidden" name="game_id" value="{{ $game->id }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">	
				<input type="hidden" name="_method" value="PUT">

				<label>Update Game</label>

				<div class="form-group">
					
					<label>Title</label>
					<textarea  class="form-control" name="title">{{ $game->title }}</textarea>
				</div>

				<div class="form-group">
					<label>Website</label>
					<textarea  class="form-control" name="website">{{ $game->website}}</textarea>
				</div>

				<div class="form-group">
					<label>Website address</label>
					<textarea  class="form-control" name="website_url">{{ $game->website_url}}</textarea>
				</div>

				<div class="form-group">	
					<label for="photo">Game image</label>
					<input class="form-control" type="file" name="photo" id="photo">
				</div>

				<div class="form-group">
					<label>Description</label>
					<textarea  class="form-control" name="description">{{ $game->description}}</textarea>
				</div>

				<div class="form-group">
					<label>Deadline</label>
					<textarea  class="form-control" name="deadline">{{ $game->deadline }}</textarea>
				</div>

				<div class="form-group">
					<label>Prizes</label>
					<textarea  class="form-control" name="prizes">{{ $game->prizes }}</textarea>
				</div>

				<div class="form-group">
					<label>Winers</label>
					<textarea  class="form-control" name="winers">{{ $game->winers }}</textarea>
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
					<input class="btn btn-primary" type="submit" value="Update and Publish"/>
				</div>

			</form>
				
		</div>
	</div>

@stop

