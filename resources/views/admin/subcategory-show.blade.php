@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Sub subcategory', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="container m-5">
	<div class="card">
		<div class="card card-head">
			@if($subcategory)<center><h2>{{$subcategory->title}}</h2></center>@endif
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					@if($subcategory) {!! $subcategory->description !!} @endif
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</div>
</div>
@endsection