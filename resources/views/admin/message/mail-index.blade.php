@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-mail', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<div class="card card-plain table-plain-bg">
		<div class="card-header ">
			<h4 class="card-title">Inbox</h4>
		</div>
		<div class="card-body table-full-width table-responsive">
			<table class="table table-hover">
				<thead>
					<th>#</th>
					<th>From</th>
					<th>Subject</th>
					<th colspan="4">Actions</th>
				</thead>
				<tbody>
					@if($mails && count($mails)>0)
					@foreach($mails as $mail)
					<tr  @if($mail->is_read == false) style="background-color: grey" @endif>
						<td>{{$n++}}</td>
						<td>
							<a href="{{route('message.show', $mail)}}">
								{{$mail->first_name}} {{$mail->last_name}}
							</a>
						</td>
						<td>
							@if($mail->is_feedback == false)
							Message
							@else
							Feedback
							@endif
						</td>
						<td>
							<a href="{{route('message.reply', $mail)}}"><i class="fa fa-reply"></i></a>
						</td>
						<td>
							<form action="{{route('message.destroy', $mail)}}" method="post">
								@csrf
								{{method_field('DELETE')}}
								<button type="submit" class="btn btn-link" style="color: #1DC7EA"><i class="fa fa-trash"></i></button>
							</form>
						</td>
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