@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Page', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Tabel of page</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Title Tag</th>
					<th colspan="4">Actions</th>
				</thead>
				<tbody>
					@if($pages && count($pages)>0)
					@foreach($pages as $page)
					<tr>
						<td>{{$n++}}</td>
						<td>{{$page->title}}</td>
						<td>{{$page->title_tag}}</td>
						<td><a href="{{route('page.edit', $page)}}"><i class="fa fa-edit"></i></a></td>
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