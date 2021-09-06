@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Site Info', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('ckeditor/sample/styles.css')}}">
<div class="ml-5 mr-5">
	<form action="{{route('about.update', $aboutUs)}}" method="post" enctype="multipart/form-data">
		@csrf
		{{method_field('PATCH')}}
		<div class="card">
			<div class="card card-header">
				<center><strong>About Us Addon Form</strong></center>
			</div>
			<div class="card card-body">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label for="heading">Heading: </label>
							<input type="text" name="heading" class="form-control" value="{{old('heading', $aboutUs->heading)}}" required="required">
						</div>
						<label>Image</label>
						<div class="form-group">
							<label>
								<img @if(!$aboutUs->image == '') src="{{asset('uploads/site/thumbnail/'.$aboutUs->image)}}" @else src="{{asset('thumbnail.png')}}" @endif id="imgthumbnail" class="img-fluid" alt="Image not found" height="640" width="444">
								<input type="file" name="image" id="thumbnail" hidden="hidden" value="{{old('image')}}">
							</label>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<label for="description">Description:</label>
						<textarea name="description" class="form-control" style="height: 100%" required="required">{{old('description', $aboutUs->description)}}</textarea>
					</div>
				</div>
			</div>
			<div class="card card-footer">
				<div>
					<button type="submit" class="btn btn-primary bg-primary float-right" style="color: white;">Update</button>
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