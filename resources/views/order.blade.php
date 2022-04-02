@extends('layouts.index')

@section('content')
    <div class="main">
		<div id="orderForm">
			<div id="orderItem">
				<label>Seed Name:</label>
				<input type="" name="p_name" id="p_name">
			</div>
			<div id="orderItem">
				<label>Seed Quantity:</label>
				<input type="" name="qty" id="qty">
			</div>
			<div id="orderItem">
				<label>Price Per Seed:</label>
				<input type="" name="unit_price" id="unit_price">
			</div>
			<button onclick="takeValue()">Add</button>
			<a href="{{ route('address') }}">Procceed To Shipment Address</a>
		</div>
	</div>
@endsection