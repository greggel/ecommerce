@extends('layouts.master')

@section('title')
	Music LTD
@endsection

@section('content')
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;margin:0}
.mySlides img { margin-left:35%; }

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    top: 170px;
    left: 160px;
    width: 100%;
    /* text-align: center; */
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

<div class="smallnav">
	<h2><font color="white">Music LTD</font></h2>
	<h4><a href="#">Events</a>

	@if(Auth::check())
       <a href="{{ route('user.profile') }}">Profile</a>
    @else
       <a href="{{ route('user.signup') }}">Sign up</a>
       <a href="{{ route('user.signin') }}">Sign in</a>
    @endif
	<a href="#">Settings</a>
	<a href="#">Payment</a></h4>
</div>
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
		<div id="charge-message" class="alert">
			{{ Session::get('success') }}
		</div>
	</div>
</div>

<div class="slideshow-container">

<div class="mySlides">
  <div class="numbertext"><font color="black">1 / 3</font></div>
  <img src="images/violin.png" style="width:300px; height=100px;">
  <div class="text"><font color="black">Caption Text</font></div>
</div>

<div class="mySlides">
  <div class="numbertext"><font color="black">2 / 3</font></div>
  <img src="images/guitar.png" style="width:180px; height=100px;">
  <div class="text"><font color="black">Caption Two</font></div>
</div>

<div class="mySlides">
  <div class="numbertext"><font color="black">3 / 3</font></div>
  <img src="images/sax.jpg" style="width:160px; height=100px;">
  <div class="text"><font color="black">Caption Three</font></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




@foreach($products->chunk(3) as $productChunk)
 <div class="row">
 	@foreach($productChunk as $product)
 	<div class="col-sm-6 col-md-4">
 		<div class="thumbnail">
		  <li class="media">
		    <img class="d-flex mr-3" src="{{ $product->imagePath }}" style="max-height: 150px" class="img-responsive">
		    <div class="caption">
		      <h5>{{ $product->title }} List-based media object</h5>
		      <p class="description">{{ $product->description }}Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
		       <p><br /> ${{ $product->price }} &nbsp;&nbsp; <a href="{{ route('product.addToCart', ['id' => $product->id])}}" class="btn btn-success" role="button">Add to cart</a></p>
		    </div>
		  </li>
	  </div> 
	</div>
	@endforeach
</div>
@endforeach
@endsection
@section('scripts')
<script src="{{ URL::to('js/images.js') }}"></script>
@endsection
