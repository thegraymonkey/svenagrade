@foreach($games as $game)

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
@endforeach