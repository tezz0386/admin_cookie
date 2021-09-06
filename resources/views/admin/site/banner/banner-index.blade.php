@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Site Info', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12 mt-2">
	<ul class="list-inline">
		<li class="list-inline-item"><a href="{{route('banner.index')}}">Banner Setting</a> /</li>
		<li class="list-inline-item"><a href="{{route('contact.index')}}">Contact Setting</a> /</li>
		<li class="list-inline-item"><a href="{{route('about.index')}}">About Us Setting</a></li>
	</ul>
</div>
<!-- actually this is returning by index to create the first time site information -->
<div>
	<a href="{{route('banner.create')}}" class="btn btn-danger bg-danger" style="color: white;">Create New Banner</a>
</div>
<div class="col-md-12 col-lg-12">
	<table class="table">
		<thead>
			<tr>
				<th>#</th>
				<th>Headnig</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($banners) && count($banners)>0)
			@foreach($banners as $banner)
			<tr>
				<td>{{$n++}}</td>
				<td>{{$banner->heading}}</td>
				<td>
					<a href="{{route('banner.edit', $banner)}}">Edit</a>
				</td>
				<td>
					<form action="{{route('banner.destroy', $banner)}}" method="post" id="formDelete{{$banner->id}}">
						@csrf
						{{method_field('DELETE')}}
						<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fa fa-trash" id="delete{{$banner->id}}"></i></button>
					</form>
				</td>
			</tr>
			@endforeach
			@endif
		</tbody>
	</table>
</div>
@endsection
@section('scripts')
  <script type="text/javascript">
  	$(document).ready(function(){
  		@if(isset($banners) && count($banners)>0)
  		@foreach($banners as $banner)
  		  $('#delete{{$banner->id}}').on('click', function(e){
  		  		e.preventDefault();
  		  	    if(confirm("Are You sure want to delete that could not be restored")){
  		  	    	$('#formDelete{{$banner->id}}').submit();
  		  	    }
  		  });
  		@endforeach
  		@endif
  	});
  </script>
@endsection