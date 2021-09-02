@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Category', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Tabel of Trashed Category</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<div>
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
						<td><a href="#"><i class="fa fa-eye"></i></a></td>
						<td>
							<form action="{{route('admin.category.restore', $category)}}" method="post">
								@csrf
								{{method_field('PATCH')}}
								<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fas fa-trash-restore"></i></button>
							</form>
						</td>
						<td><a href="#"><i class="fas fa-plus"></i></a></td>
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