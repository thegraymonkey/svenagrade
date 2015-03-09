<div class="text-center" style="margin-bottom:20px;">
  <button class="btn btn-primary btn-lg" type="button">
   Broj aktuelnih igara! <span class="badge">{{ count($games) }}</span>
 </button>
</div>



<div class="text-center" style="margin-bottom:20px;">
  <a href="{{ route('winers.index') }}"><button class="btn btn-success btn-lg" type="button">
   Srecni Dobitnici! 
 </button></a>
</div>

  

<div class="text-center" style="margin-bottom:20px;">
  <a href="{{ route('archives.index') }}"><button class="btn btn-danger btn-lg" type="button">
   Arhiva! 
 </button></a>
</div>

<hr>	

<div class="list-group text-center">
 <p class="lead text-danger">Nasi Prijatelji</p>

 <a href="" class="list-group-item" target="blank">
  <h4 class="list-group-item-heading">Zabranjenopusenje.net</h4>
</a>

<a href="#" class="list-group-item" target="blank">
  <h4 class="list-group-item-heading">TheGrayMonkey.com</h4>  
</a>

<a href="#" class="list-group-item" target="blank">
  <h4 class="list-group-item-heading">YourFlashGames.com</h4>
</a>

<a href="" class="list-group-item" target="blank">
  <h4 class="list-group-item-heading">Ukusno.com</h4>
</a>

</div>

<hr>

<div class="thumbnail text-center" >
  <img src="/images/game2.jpg" alt="">
  The Best Irish Beer
</div>