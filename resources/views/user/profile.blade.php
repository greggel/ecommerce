@extends('layouts.master')

@section('content')
<br /><br /><br />
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h1>User Profile</h1>
		<hr>
		<h2>My Orders</h2>
		@foreach($orders as $order)
			<div class="panel panel-default">
			  <div class="panel-body">
			    <ul class="list-group">
			    	@foreach($order->cart->items as $item)
				  		<li class="list-group-item"><span class="badge">${{ $item['price'] }}</span></li>
				  		{{ $item['item']['title'] }} | {{ $item['qty'] }} Units
				    @endforeach
				</ul>
			  </div>
  		   <div class="panel-footer"><strong>Total Price ${{ $order->cart->totalPrice }}</strong></div>
  		 @endforeach
</div>
	</div>
</div>

@endsection