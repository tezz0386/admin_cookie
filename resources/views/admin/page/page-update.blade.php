@extends('layouts.app', ['activePage' => 'dashboard', 'title' => 'Admin Dashboard-Page', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])
@section('content')
<div class="col-md-12">
	<form action="{{route('page.update', $page)}}" method="post">
		@csrf
		{{method_field('PATCH')}}
		<div class="card">
			<div class="card card-header">
				<strong><center>Page Attribute Update Form</center></strong>
			</div>
			<div class="card card-body">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="form-group">
							<label for="title">Title:</label>
							<input type="text" name="title" class="form-control" value="{{old('page->title', $page->title)}}" readonly="readonly" id="title">
						</div>
						<div class="form-group">
							<label for="title_tag">Title Tag:</label>
							<input type="text" name="title_tag" class="form-control" value="{{old('page->title_tag', $page->title_tag)}}" id="title_tag">
						</div>
						<div class="form-group">
							<label for="slug">Slug:</label>
							<input type="text" name="slug" class="form-control" value="{{old('page->slug', $page->slug)}}" readonly="readonly" id="slug">
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<center>Meta Information:</center>
						<div class="form-group">
							<label for="meta_keywords">Meta Keywords:</label>
							<textarea class="form-control" style="height: 150px;" name="meta_keywords">{{old('meta_keywords', $page->meta_keywords)}}</textarea>
						</div>
						<div class="form-group">
							<label for="meta_description">Meta Description:</label>
							<textarea class="form-control" style="height: 300px;" name="meta_description">{{old('meta_description', $page->meta_description)}}</textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="card card-footer">
				<div>
					<button type="submit" class="btn btn-primary bg-primary float-right btn-lg" style="color: white;">Update</button>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection


@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('#title_tag').on('change', function(e){
		   var title_tag = $(this).val();
		   $.ajax({
		   		method:'get',
		   		dataType:'json',
		   		url:{{route('page.testSlug')}},
		   		data:{
		   			'title_tag':title_tag,
		   		},
		   		success:function(data){
		   			$('#slug').val(data.slug);
		   		},
		   		error:function(e){

		   		}
		   });
		});
	});
</script>
@endsection