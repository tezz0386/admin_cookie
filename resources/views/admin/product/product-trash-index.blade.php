@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-product', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Tabel of product</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<div>
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
						<td>
							<form action="{{route('product.restore', $product)}}" method="post">
								@csrf
								{{method_field('PATCH')}}
								<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fas fa-trash-restore"></i></button>
							</form>
						</td>
						<td>
							<form action="{{route('product.delete', $product)}}" method="post">
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