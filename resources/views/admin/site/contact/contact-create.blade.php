@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Contact create', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
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
		<div class="card card-footer">
			<div>
				<button type="submit" class="btn btn-primary bg-primary float-right" style="color: white">Submit</button>
			</div>
		</div>
	</div>
</form>
@endsection