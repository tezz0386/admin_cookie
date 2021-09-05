@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Contact create', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12 mt-2">
	 <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Banner Setting</a> /</li>
        <li class="list-inline-item"><a href="{{route('contact.index')}}">Contact Setting</a> /</li>
        <li class="list-inline-item"><a href="#">About Us Setting</a></li>
    </ul>
</div>

<form action="{{route('contact.store')}}" method="post">
	@csrf
	<div class="card">
		
		<div class="card card-header">
			<strong><center>Contact Addon Form </center></strong>
		</div>
		<div class="card card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="contact">Contact: </label>
						<input type="number" name="contact" class="form-control" value="{{old('contact')}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="contact">Email: </label>
						<input type="email" name="email" class="form-control" value="{{old('contact')}}">
					</div>
					<div class="form-group">
						<label for="contact">Facebook Link: </label>
						<input type="text" name="facebook_link" class="form-control" value="{{old('contact')}}">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection