@extends('layouts.index')

@section('content')
    <div class="main">
 		<form>
	 		<div id="orderItem">
				<label>Your Name:</label>
				<input type="" name="s_name" id="s_name">
			</div>
			<div id="orderItem">
				<label>Street:</label>
				<input type="" name="s_street" id="s_street">
			</div>
			<div id="orderItem">
				<label>City:</label>
				<input type="" name="s_city" id="s_city">
			</div>
			<div id="orderItem">
				<label>State:</label>
				<input type="" name="s_state" id="s_state">
			</div>
			<input type="submit" name="">
	 	</form>
 	</div>
@endsection