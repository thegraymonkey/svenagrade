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

@include('games.index')


@endsection
