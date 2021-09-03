@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-product', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
@if(session()->has('success'))
<div class="container mt-5">
	<div class="alert alert-success">
		<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
		<i class="nc-icon nc-simple-remove"></i>
		</button>
		<span>
		<b> Success!! - </b> 
			{{session()->get('success')}}
	   </span>
	</div>
</div>
@endif
@if(session()->has('error'))
<div class="container">
	<div class="alert alert-danger">
		<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
		<i class="nc-icon nc-simple-remove"></i>
		</button>
		<span>
		<b> Error!! - </b> 
			{{session()->get('error')}}
	   </span>
	</div>
</div>
@endif
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Tabel of product</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<div>
				<a href="{{route('product.index')}}" class="btn btn-primary bg-primary float-right ml-2" style="color: white;">View Sub product</a>
				<a href="#" class="btn btn-primary bg-primary float-right ml-2" style="color: white;">View Trashed</a>
				<a class="btn btn-primary bg-danger float-right" style="color: white;" href="{{route('product.create')}}">Create New</a>
			</div>
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th colspan="4">Actions</th>
				</thead>
				<tbody>
					@if(isset($products) && count($products)>0)
					@foreach($products as $product)
					<tr>
						<td>{{$n++}}</td>
						<td>{{$product->title}}</td>
						<td><a href="#"><i class="fa fa-eye"></i></a></td>
						<td><a href="{{route('product.edit', $product)}}"><i class="fa fa-edit"></i></a></td>
						<td>
							<form action="{{route('product.destroy', $product)}}" method="post">
								@csrf
								{{method_field('DELETE')}}
								<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fa fa-trash"></i></button>
							</form>
						</td>
						@if($product->has_child == true)
						@endif
					</tr>
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