@extends('app')

@section('content')

@include('common.messages')

<div class="row">
	<div class="col-md-6">
		@include('games.create')
	</div>
	<div class="col-md-6">
		@include('categories.create')
	</div>
	<div class="col-md-6">
		@include('categories.index')
	</div>
</div>

<hr>
<div class="row">
	
@foreach($games as $game)
<div class="col-md-6">

       <div class="thumbnail">
        <img src="{{ $game->getImagePath() }}" alt="" height="100">
        <div class="caption">
            <h4 class="pull-right">Traje do: {{ $game->deadline->format('d-m-Y') }}</h4>
            <h4><a href="{{ route('games.show', [$game->id]) }}">{{ $game->title}}</a>
            </h4>
            <p>{{ \Illuminate\Support\Str::limit($game->description, 150) }}</p>
        
        <div class="ratings">
            <p class="pull-right">{{ $game->review_count }} reviews</p>
            
            <p>
                @if($game->rating == 0)
                <span>No rating yet...</span>
                @elseif($game->rating == 2)
                <span class="glyphicon glyphicon-star"></span>
                @elseif($game->rating == 2)
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                @elseif($game->rating == 3)
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span> 
                <span class="glyphicon glyphicon-star"></span>               
                @elseif($game->rating == 4)
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                @elseif($game->rating == 5)
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                @endif
            </p>
        </div>
        </div>
	</div>
	
	<div class="row">
				<div class="col-md-6">
					<form action="{{ route('games.destroy', [$game->id]) }}" method="post">
						<input type="hidden" name="_method" value="delete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="submit" value="Delete" class="btn btn-xs btn-danger">
					</form>
				</div>
				<div class="col-md-6">
					<a class="btn btn-xs btn-warning" href="{{ route('games.edit', [$game->id]) }}">Edit</a>
				</div>	
			</div>
	</div>
@endforeach
</div>

@endsection
