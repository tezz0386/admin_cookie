@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Page', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="container">
		<form action="#" method="post">
			@csrf
			<div class="card">
				<div class="card card-header">
					<h5>To: {{$message->first_name}}  {{$message->last_name}}</h5>
					<strong>Email: {{$message->email}}</strong>
				</div>
				<div class="card card-body">
					<div class="form-group">
						<label for="subject">Subject:</label>
						<input type="text" name="subject" class="form-control" value="{{old('subject')}}">
					</div>
					<div class="form-group">
						<label for="subject">Body</label>
						<textarea class="form-control" style="height: 250px;" name="message">{{old('message')}}</textarea>
					</div>
				</div>
				<div class="card card-footer">
					<div>
						<button type="submit" class="btn btn-primary bg-primary float-right" style="color: white;">Send</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
@endsection