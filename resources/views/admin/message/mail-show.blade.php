@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Page', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="container">
		<div class="card">
			<div class="card card-header">
				@if(isset($message) && !$message=='')
				<center><strong>@if($message->is_feedback == false) Message @else Feedback @endif</strong></center>
				@endif
			</div>
			<div class="card card-body">
				<h5>Form: {{$message->first_name}}  {{$message->last_name}}</h5>
				<strong>Email: {{$message->email}}</strong>
			</div>
			<div class="card card-body">
				<p>
					{{$message->message}}
				</p>
			</div>
			<div class="card card-footer">
				<div>
					<a href="{{route('message.reply', $message)}}" style="size: 30px; font-size: 30px"><i class="fa fa-reply" aria-hidden="true"></i></a>
					<a href="#" style="size: 30px; font-size: 30px" class="ml-4"><i class="fa fa-trash" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection