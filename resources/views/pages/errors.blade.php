<div class="container">
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
</div>