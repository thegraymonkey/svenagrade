@extends('layout')



@section('content')



<div class="container">


<div style="margin-bottom:10px; margin-top:10px;">
<img src="/images/banner.png" class="img-responsive" style="margin: 0 auto;">
</div>

  <div class="row">

  	<div class="col-md-4">
  		<div class="panel panel-primary text-center">
		  <div class="panel-heading">
		    <h3 class="panel-title">Kritike & Sugestije</h3>
		  </div>
		  <div class="panel-body">
		    Sve sto imate da nam kazete... pohvalite nas ili kritikujte.
		  </div>
		</div>
  	</div>
  

  	<div class="col-md-4">
  		<div class="panel panel-info text-center">
		  <div class="panel-heading">
		    <h3 class="panel-title">Marketing & Oglasavanje</h3>
		  </div>
		  <div class="panel-body">
		    Otvoreni za svaki vid saradnje. Imate ideju? Ne ustrucavajte se da nam je saopstite.
		  </div>
		</div>
  	</div>

  	<div class="col-md-4">
  		<div class="panel panel-success text-center">
		  <div class="panel-heading">
		    <h3 class="panel-title">Prijava Nagradne Igre</h3>
		  </div>
		  <div class="panel-body">
		    Propustili smo da objavimo nagradnu igru? Javite nam, podsetite nas... 
		  </div>
		</div>
  	</div>

   </div>

   <div class="row">

   	<div class="col-md-6 col-md-offset-3 text-center well well-lg">

	  <form role="form" action="{{ url('contacts/send') }}" method="POST">

	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
	    
	    <div class="form-group">
	      <label for="email">Vaša Email Adresa</label>
	      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required autofocus>
	    </div>

	    <div class="form-group">
	      <label for="subject">Predmet</label>
	      	<select class="form-control" name="subject">	
				<option value="Kritike & Sugestije">Kritike & Sugestije</option>
				<option value="Marketing & Oglasavanje">Marketing & Oglasavanje</option>
				<option value="Prijava Nagradne Igre">Prijava Nagradne Igre</option>		
			</select>
	    </div>

	    <div class="form-group">
	      <label for="message">Vaša Poruka</label>
	      <textarea class="form-control" type="text" id="message" placeholder="Vaša poruka" name="message"></textarea>
	    </div>
	    
	    <div class="form-group">
	    <button type="submit" class="btn btn-info">Pošalji</button>
	    </div>

	  </form>

	</div>

   </div>


</div>

@stop