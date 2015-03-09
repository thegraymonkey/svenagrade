@extends('layout')

@section('topcss')

<link href="/css/review.css" rel="stylesheet">

@stop

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

                        <div class="thumbnail" style="margin: 0 auto;">
                            <img src="{{ $game->getImagePath() }}" class="img-responsive">
                        </div>

                        <div class="panel panel-primary text-center">
						  <div class="panel-body">
						    <h2>{{ $game->title }}</h2>
						    <p><a href="{{ $game->website_url }}">{{ $game->website }}</a></p>
						  </div>
						</div>

						<div class="panel panel-danger text-center">
						  <div class="panel-body">
						    <h4>Rok Trajanja Nagradne Igre</h4>
						    <h4>{{ $game->deadline->format('d-m-Y') }}</h4>
						  </div>
						</div>
						
						<div class="panel panel-warning text-center">
						  <div class="panel-body" >
						    <h4>Uslovi Ucesca & Pravila</h4>
						    <p>{{ $game->description }}</p>
						  </div>
						</div>

						<div class="panel panel-info text-center">
						  <div class="panel-body">
						    <h4>Nagrade</h4>
						    <p>{{ $game->prizes }}</p>
						  </div>
						</div>

						<div class="panel panel-default text-center">
						  <div class="panel-body">
						    <h4>Ocene potrosaca</h4>
						    <div class="ratings">
                                <p>{{ $game->review_count }} reviews</p>
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
						@if($game->winers)
						<div class="panel panel-success text-center">
						  <div class="panel-body">
						    <h4>Dobitnici</h4>
						    <p>{{ $game->winers }}</p>
						  </div>
						</div>
						@endif
						<div class="text-center">
	                    	<img src="/images/share.png">
	                    	<img src="/images/tweet.png">
                    	</div>

		                @include('reviews.create')
		                @include('common.messages')
		                @include('reviews.index')

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

@section('bottomjs')

<script src="/js/review.js"></script>

@stop