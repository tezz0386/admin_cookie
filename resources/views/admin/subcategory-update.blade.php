@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Category-create', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('ckeditor/sample/styles.css')}}">
<form action="{{route('admin.subcategory.update', $subcategory)}}" method="post" enctype="multipart/form-data">
	@csrf
	{{method_field('PATCH')}}
	<div class="ml-2 mr-2">
		@if ($errors->any())
		@foreach ($errors->all() as $error)
		<div class="alert alert-danger">
			<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
			<i class="nc-icon nc-simple-remove"></i>
			</button>
			<span>
			{{ $error }}</span>
		</div>
		@endforeach
		@endif
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="card">
					<div class="card card-header">
						<center><strong>Sub Category Addon Form</strong></center>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label>Parent Title</label>
							<select name="parent_id" class="form-control">
								@if($category)<option value="{{$category->id}}" >{{$category->title}}</option>@endif
								@if($categories && count($categories)>0)
								@foreach($categories as $category1)
								@if($category1->has_child == true)
								<option value="{{$category1->id}}">{{$category1->title}}</option>
								@endif
								@endforeach
								@endif
							</select>
						</div>
						<div class="form-group">
							<label>Title</label>
							<input type="text" class="form-control" placeholder="Title" aria-label="title" aria-describedby="basic-addon1" name="title" required="required" value="{{old('title', $subcategory->title)}}">
						</div>
						
						<!-- <input type="text" name="slug" class="form-control" id="slug"> -->
						<div class="form-group">
							<label>Description:</label>
							<textarea class="editor" name="description">{{old('description', $subcategory->description)}}</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="card">
					<div class="card card-header">
						<strong><center>Meta Detail</center></strong>
					</div>
					<div class="card card-body">
						<div class="form-group">
							<label for="meta_title_tag">Meta Title Tag</label>
							<input type="text" name="title_tag" class="form-control" id="meta_title_tag" value="{{old('title_tag', $subcategory->title_tag)}}">
						</div>
						<div class="form-group">
							<label for="meta_keywords">Meta Keywords</label>
							<textarea class="form-control" name="meta_keywords" id="meta_keywords" style="height: 150px;">{{old('meta_keywords', $subcategory->meta_keywords)}}</textarea>
						</div>
						<div class="form-group">
							<label for="meta_description">Meta Description</label>
							<textarea class="form-control" name="meta_description" id="meta_description" style="height: 200px;">{{old('meta_description', $subcategory->meta_description)}}</textarea>
						</div>
					</div>
					<div class="card card-footer">
						<div>
							<button type="submit" class="btn btn-primary bg-primary float-right btn-lg" style="color: white">Submit</button>
							<a href="#" class="btn btn-warning float-right mr-2 btn-lg">Cancel</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection
@section('scripts')
<script src="{{asset('ckeditor/build/ckeditor.js')}}"></script>
<script>ClassicEditor
				.create( document.querySelector( '.editor' ), {
					
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
					
					
					
				} )
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
</script>
@endsection