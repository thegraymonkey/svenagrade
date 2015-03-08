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
                    
                    <h2 class=" text-center" style="margin-top:0px;">{{ $category->name }}</h2>

                    @include('games.index')
                        
                    <div class="row text-center">
					  
						{!! $games->render() !!}
					  
					</div>    
					               		
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