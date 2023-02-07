@extends('layouts.app')
@section('content')
<div class="container">
	<nav class="breadcrumb ">
		<a class="breadcrumb-item" href="/">Home</a>
		<a class="breadcrumb-item" href="#">Expenses</a>
		<span class="breadcrumb-item active">Saving</span>
	</nav>
	<div class="row">
	<table class="table">
		<h3>Income in Three Months</h3>
		<tr>
			<th></th>
			<th>November</th>
			<th>December</th>
			<th>January</th>
			
		</tr>
		<tr>
			<td class="text-bold"><strong>Total</strong></td>
			<td>$200,00</td>
			<td>$200,00</td>
			<td>$200,00</td>
		</tr>
	</table>
	</div>

	<div class="row border-top mt-2 ">
		<table class="table">
			<h3>Expenses in Three Months</h3>
			<tr>
				<td><strong>Total</strong></td>
				<th>November</th>
				<th>December</th>
				<th>January</th>
				
			</tr>
			<tr>
				<td>$200,00</td>
				<td>$200,00</td>
				<td>$200,00</td>
			</tr>
		</table>

		{{-- @foreach ($userArr as $item) --}}
			{{$item->expenses_amounts}}
		{{-- @endforeach --}}
		</div>
</div>
@endsection