@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Site Info', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12 mt-2">
	 <ul class="list-inline">
        <li class="list-inline-item"><a href="#">Banner Setting</a> /</li>
        <li class="list-inline-item"><a href="{{route('contact.index')}}">Contact Setting</a> /</li>
        <li class="list-inline-item"><a href="#">About Us Setting</a></li>
    </ul>
</div>

@if(isset($site))
<link rel="stylesheet" type="text/css" href="{{asset('ckeditor/sample/styles.css')}}">
<div class="col-md-12 mt-2">
	<form action="{{route('site.update', $site)}}" method="post" enctype="multipart/form-data">
		@csrf
		{{method_field('PATCH')}}
		<div class="card">
			<div class="card card-header">
				<center>
				<strong>Site Information Setting Form</strong>
				</center>
			</div>
			<div class="card card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<label>Logo Of Site</label>
								<div class="form-group">
									<label>
										<img @if(!$site->logo == '') src="{{asset('uploads/site/thumbnail/'.$site->logo)}}" @else src="{{asset('thumbnail.png')}}" @endif id="imgthumbnail" class="img-fluid" alt="Image not found" height="200" width="200">
										<input type="file" name="logo" id="thumbnail" hidden="hidden" value="{{old('logo')}}" required="required">
									</label>
								</div>
							</div>
							<div class="col-md-6">
								<label>Profile Picture Of MD</label>
								<div class="form-group">
									<label>
										<img @if(!$site->md_profile == '') src="{{asset('uploads/site/thumbnail/'.$site->md_profile)}}" @else src="{{asset('thumbnail.png')}}" @endif id="img_md" class="img-fluid" alt="Image not found" height="200" width="200">
										<input type="file" name="md_profile" id="md_profile" hidden="hidden" value="{{old('md_profile')}}" required="required">
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="address">Address:</label>
							<input type="text" name="address" class="form-control" required="required" placeholder="Your Company Full Address" value="{{old('address', $site->address)}}">
						</div>
						<div class="form-group">
							<label for="address">Location:</label>
							<input type="text" name="location" class="form-control" placeholder="Embeded Google Map" value="{{old('location', $site->location)}}">
						</div>
						<div class="form-group">
							<label for="footer_quoation">Quoation:</label>
							<textarea name="footer_quoation" id="footer_quoation" class="form-control" style="height: 200px;">{{old('footer_quoation', $site->footer_quoation)}}</textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Message From MD:</label>
							<textarea class="form-control editor" name="message">{{old('message', $site->message)}}</textarea>
						</div>
					</div>
				</div>
				<div class="row">
				</div>
			</div>
			<div class="card card-footer">
				<div>
					<button class="btn btn-primary float-right btn-lg bg-primary" style="color: white;" type="submit">Update</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endif
@endsection
@section('scripts')
<script src="{{asset('ckeditor/build/ckeditor.js')}}"></script>
<script>ClassicEditor
				.create( document.querySelector( '.editor' ), {
					// ckfinder: {
			//           uploadUrl: '{{asset("ckeditor/ckfinder/ckfinder/core/connector/php/connector.php")}}?command=QuickUpload&type=Files&responseType=json',
		//              },
					
				toolbar: {
					items: [
						'heading',
						'|',
						'textPartLanguage',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'outdent',
						'indent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo',
						'alignment',
						'fontColor',
						'fontFamily',
						'fontBackgroundColor',
						'fontSize',
						'highlight',
						'CKFinder',
						'findAndReplace'
					]
				},
				language: 'en',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:inline',
						'imageStyle:block',
						'imageStyle:side',
						'linkImage'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
					licenseKey: '',
					
					
					
				})
				.then( editor => {
					window.editor = editor;
					
				} )
				.catch( error => {
					console.error( 'Oops, something went wrong!' );
					console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
					console.warn( 'Build id: xssmfrzicipw-6don1y1odq75' );
					console.error( error );
				} );
</script>
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
$('#md_profile').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#img_md").attr('src', image);
});
});
</script>
@endsection