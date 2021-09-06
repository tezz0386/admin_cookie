@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-special', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div>
	<a href="{{route('special.create')}}" class="btn btn-danger bg-danger" style="color: white;">Create New Special</a>
</div>
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Today's Special</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Price ($)</th>
					<th colspan="4">Actions</th>
				</thead>
				<tbody>
					@if($specials && count($specials)>0)
					@foreach($specials as $special)
					@foreach($special->products as $product)
					<tr>
						<td>{{$n++}}</td>
						<td>{{$product->title}}</td>
						<td>$ {{$product->price}}</td>
					</tr>
					@endforeach
					@endforeach
					@else
					<tr>
						<td colspan="3"><center>Record not found</center></td>
					</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection