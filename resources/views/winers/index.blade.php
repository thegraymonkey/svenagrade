@extends('layout')

@section('content')

<!-- Page Content -->
<div class="container">

	<div class="row">

		<div class="col-md-3">
			@include('common.sidebar_left')
		</div>

		<div class="col-md-9">

			<div class="row">

				<div class="col-md-8">
					
					<h2 class=" text-center" style="margin-top:0px;">Igre Koje Su Objavile Srecne Dobitnike!</h2>
					<hr>
					@foreach($games as $game)
					<h3 class="text-center"><a href="{{ route('games.show', [$game->id]) }}">{{ $game->title }}</a></h3>
					<div class="panel panel-success text-center">
						<div class="panel-heading">
							<h2 class="panel-title">{{ $game->deadline->format('d-m-Y') }}</h2>
						</div>
						<div class="panel-body text-center">

							<p>{{ $game->winers }}</p>
						</div>
					</div>
					
					@endforeach
					
				</div>                   

				<div class="col-md-4">
					@include('common.sidebar_right')
				</div>

			</div>
			

		</div>

	</div>

</div>   
<!-- /.container -->
@stop
