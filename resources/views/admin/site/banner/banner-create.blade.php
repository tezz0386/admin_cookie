@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Site Info', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="ml-5 mr-5">
	<form action="{{route('banner.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="card">
			<div class="card card-header">
				<center><strong>Banner Addon Form</strong></center>
			</div>
			<div class="card card-body">
				<div class="form-group">
					<label for="heading">Heading: </label>
					<input type="text" name="heading" class="form-control" value="{{old('heading')}}" required="required">
				</div>
				<label>Image</label>
				<div class="form-group">
					<label>
						<img src="{{asset('thumbnail.png')}}" id="imgthumbnail" class="img-fluid" alt="Image not found" height="1280" width="753">
						<input type="file" name="image" id="thumbnail" hidden="hidden" value="{{old('image')}}" required="required">
					</label>
				</div>
			</div>
			<div class="card card-footer">
				<div>
					<button type="submit" class="btn btn-primary bg-primary float-right" style="color: white;">Submit</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection
@section('scripts')
<script type="text/javascript">
$('#thumbnail').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#imgthumbnail").attr('src', image);
});
});
</script>
@endsection