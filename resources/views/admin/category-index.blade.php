@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Category', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
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
			<h4 class="card-title">Tabel of Category</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<div>
				<a href="{{route('admin.subcategory.index')}}" class="btn btn-primary bg-primary float-right ml-2" style="color: white;">View Sub Category</a>
				<a href="{{route('admin.category.trash.index')}}" class="btn btn-primary bg-primary float-right ml-2" style="color: white;">View Trashed</a>
				<a class="btn btn-primary bg-danger float-right" style="color: white;" href="{{route('admin.category.create')}}">Create New</a>
			</div>
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th colspan="4">Actions</th>
				</thead>
				<tbody>
					@if($categories && count($categories)>0)
					@foreach($categories as $category)
					<tr>
						<td>{{$n++}}</td>
						<td>{{$category->title}}</td>
						<td><a href="{{route('admin.category.details', $category)}}"><i class="fa fa-eye"></i></a></td>
						<td><a href="{{route('admin.category.edit', $category)}}"><i class="fa fa-edit"></i></a></td>
						<td>
							<form action="{{route('admin.category.destroy', $category)}}" method="post">
								@csrf
								{{method_field('DELETE')}}
								<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fa fa-trash"></i></button>
							</form>
						</td>
						@if($category->has_child == true)
						<td><a href="{{route('admin.subcategory.create', $category)}}"><i class="fas fa-plus"></i> Sub Category</a></td>
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