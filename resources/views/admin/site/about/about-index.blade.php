@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Site Info', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('ckeditor/sample/styles.css')}}">
<div class="col-md-12 mt-2">
	<ul class="list-inline">
		<li class="list-inline-item"><a href="{{route('banner.index')}}">Banner Setting</a> /</li>
		<li class="list-inline-item"><a href="{{route('contact.index')}}">Contact Setting</a> /</li>
		<li class="list-inline-item"><a href="{{route('about.index')}}">About Us Setting</a></li>
	</ul>
</div>
<div class="col-md-12">
	<!-- <div>
		<a href="{{route('about.create')}}" class="btn btn-danger bg-danger float-right" style="color: white;">Create New</a>
	</div> -->
	<div class="row">
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Headning</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				@if(isset($abouts) && count($abouts)>0)
				@foreach($abouts as $about)
				<tr>
					<td>{{$n++}}</td>
					<td>{{$about->heading}}</td>
					<td>
						<a href="{{route('about.edit', $about)}}">Edit</a>
					</td>
					<td>
						<form action="{{route('about.destroy', $about)}}" method="post" id="formDelete{{$about->id}}">
							@csrf
							{{method_field('DELETE')}}
							<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fa fa-trash" id="delete{{$about->id}}"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
				@endif
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('scripts')
  <script type="text/javascript">
  	$(document).ready(function(){
  		@if(isset($abouts) && count($abouts)>0)
  		@foreach($abouts as $about)
  		  $('#delete{{$about->id}}').on('click', function(e){
  		  		e.preventDefault();
  		  	    if(confirm("Are You sure want to delete that could not be restored")){
  		  	    	$('#formDelete{{$about->id}}').submit();
  		  	    }
  		  });
  		@endforeach
  		@endif
  	});
  </script>
@endsection