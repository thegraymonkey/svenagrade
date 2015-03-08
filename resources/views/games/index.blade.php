@foreach($games as $game)

       <div class="thumbnail">
        <img src="{{ $game->getImagePath() }}" alt="" height="100">
        <div class="caption">
            <h4 class="pull-right">{{ $game->deadline->format('d-m-Y') }}</h4>
            <h4><a href="{{ route('games.show', [$game->id]) }}">{{ $game->title}}</a>
            </h4>
            <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
        </div>
        <div class="ratings">
            <p class="pull-right">15 reviews</p>
            <p>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
                <span class="glyphicon glyphicon-star"></span>
            </p>
        </div>
        </div>

@endforeach