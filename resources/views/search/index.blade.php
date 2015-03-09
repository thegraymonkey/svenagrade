@extends('layout')

@section('content')




<div class="container">

	<div class="row">

		<div class="col-md-3">
			@include('common.sidebar_left')
		</div>

		<div class="col-md-9">

			<div class="row">

				<div class="col-md-8">

					<h2 class="text-success text-center" style="margin-top:0px;">Search Results For: {{ $query }}</h2>

					@include('games.index')  

				</div>                   


				<div class="col-md-4">
					@include('common.sidebar_right')
				</div>

			</div>


		</div>

	</div>

</div>   

@stop