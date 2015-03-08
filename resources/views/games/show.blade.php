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
                            <img src="/images/game1.jpg" class="img-responsive">
                        </div>

                        <div class="panel panel-primary text-center">
						  <div class="panel-body">
						    <h2>Frikom - Pazljivo lizite!</h2>
						    <p><a href="www.frikom.rs/">Vebsajt</a></p>
						  </div>
						</div>

						<div class="panel panel-danger text-center">
						  <div class="panel-body">
						    <h4>Rok Trajanja Nagradne Igre</h4>
						    <h4>25.03.2015</h4>
						  </div>
						</div>
						
						<div class="panel panel-warning text-center">
						  <div class="panel-body" >
						    <h4>Uslovi Ucesca & Pravila</h4>
						    <p>Pazljivo lizite i trazite stapic sa dva ista kraja za vredne nagrade.
						    	Sakupite tri nedobitna stapica i posaljite na nasu adressu tatat rhajdmfdmlds.</p>
						  </div>
						</div>

						<div class="panel panel-info text-center">
						  <div class="panel-body">
						    <h4>Nagrade</h4>
						    <p>1.nagrada - sto miliona iljada necega</p>
						    <p>2.nagrada - sto miliona iljada necega</p>
						    <p>3.nagrada - sto miliona iljada necega</p>
						    <p>I jos monogo mnogo nagrada...</p>
						  </div>
						</div>

						<div class="panel panel-default text-center">
						  <div class="panel-body">
						    <h4>Ocene potrosaca</h4>
						    <div class="ratings">
                                <p>{{ $reviewNum }} reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
						  </div>
						</div>

						<div class="panel panel-success text-center">
						  <div class="panel-body">
						    <h4>Dobitnici</h4>
						    <p>1.Nagrada-Milion bureka - Djoka Djokic!</p>
						    <p>1.Nagrada-Milion bureka - Djoka Djokic!</p>
						    <p>1.Nagrada-Milion bureka - Djoka Djokic!</p>
						    <p>1.Nagrada-Milion bureka - Djoka Djokic!</p>
						    <p>1.Nagrada-Milion bureka - Djoka Djokic!</p>
						  </div>
						</div>

						<div class="text-center">
	                    	<img src="/images/share.png">
	                    	<img src="/images/tweet.gif">
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