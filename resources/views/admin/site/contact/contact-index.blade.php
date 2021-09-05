@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Contact', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12 mt-2">
	 <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Banner Setting</a> /</li>
        <li class="list-inline-item"><a href="{{route('contact.index')}}">Contact Setting</a> /</li>
        <li class="list-inline-item"><a href="#">About Us Setting</a></li>
    </ul>
</div>


<div>
	<a class="btn btn-danger float-right bg-danger" style="color: white;" href="{{route('contact.create')}}">Create New</a>
</div>
<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Contact No</th>
			<th>Email Address</th>
			<th>Facebook Link</th>
		</tr>
	</thead>
	<tbody>
		@if(isset($contacts) && count($contacts)>0)
		@foreach($contacts as $contact)
		<tr>
			<td>{{$n++}}</td>
			<td>{{$contact->contact}}</td>
			<td>{{$contact->email}}</td>
			<td>{{$contact->facebook_link}}</td>
			<td><a href="{{route('contact.edit', $contact)}}">Edit</a></td>
			<td><a href="#">Delete</a></td>
		</tr>
		@endforeach
		@endif
	</tbody>
</table>

@endsection