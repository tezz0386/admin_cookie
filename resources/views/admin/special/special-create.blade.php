@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-product', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Tabel of product</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<form method="post" action="{{route('special.store')}}">
				@csrf
				<div class="mr-5">
					<button type="submit" class="float-right bg-primary btn-lg" style="color: white;">Add</button>
				</div>
				<table class="table table-hover">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Belongs To</th>
						<th>Price ($)</th>
						<th colspan="4">Actions</th>
					</thead>
					<tbody>
						@if(isset($products) && count($products)>0)
						@foreach($products as $product)
						<tr>
							<td>{{$n++}}</td>
							<td>{{$product->title}}</td>
							<td>
								@if($product->child_id == null)
								{{$product->category->title}}
								@else
								{{$product->subCategory->title}}
								@endif
							</td>
							<td>${{$product->price}}</td>
							<td>
								<input type="checkbox" name="product_id[]" value="{{$product->id}}">
							</td>
						</tr>
						@endforeach
						@else
						<tr>
							<td colspan="3"><center>Record not found</center></td>
						</tr>
						@endif
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
@endsection