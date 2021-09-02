@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Category', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="container m-5">
	<div class="card">
		<div class="card card-head">
			@if($category)<center><h2>{{$category->title}}</h2></center>@endif
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					@if($category) {!! $category->description !!} @endif
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card card-head">
			<center><h3>Included Sub Category</h3></center>
		</div>
		<div class="card card-body">
			<table class="table">
				<tr>
					<th>#</th>
					<th>Title</th>
					<th colspan="3">Action</th>
				</tr>
				@if($category)
				@if(count($category->subCategories)>0)
				@foreach($category->subCategories as $subcategory)
				<tr>
					<td>{{$n++}}</td>
					<td>{{$subcategory->title}}</td>
					<td><a href="{{route('admin.subcategory.edit', $subcategory)}}"><i class="fa fa-edit"></i></a></td>
					<td>
							<form action="{{route('admin.subcategory.destroy', $subcategory)}}" method="post">
								@csrf
								{{method_field('DELETE')}}
								<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fa fa-trash"></i></button>
							</form>
						</td>
					<td><a href="#"><i class="fa fa-eye"></i></a></td>
				</tr>
				@endforeach
				@else
				<tr>
					<td colspan="4">
						<center><b>Record not foound</b></center>
					</td>
				</tr>
				@endif
				@endif
			</table>
		</div>
	</div>
</div>
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
@endsection