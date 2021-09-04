@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-product', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Tabel of product</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<div>
				<a href="{{route('product.getTrash')}}" class="btn btn-primary bg-primary float-right ml-2" style="color: white;">View Trashed</a>
				<a class="btn btn-primary bg-danger float-right" style="color: white;" href="{{route('product.create')}}">Create New</a>
			    <input type="text" name="search" class="float-right mr-2" style="height: 37px;" placeholder="Search Here">
			    

			</div>
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Belongs To</th>
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
						<td><a href="{{route('product.show', $product)}}"><i class="fa fa-eye"></i></a></td>
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