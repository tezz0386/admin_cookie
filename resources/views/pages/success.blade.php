<div class="container">
	@if(session()->has('success'))
	<div class="container mt-5">
		<div class="alert alert-success">
			<button type="button" aria-hidden="true" class="close" data-dismiss="alert">
			<i class="nc-icon nc-simple-remove"></i>
			</button>
			<span>
				<b> Success!! - </b>
				{{session()->get('success')}}
			</span>
		</div>
	</div>
	@endif
</div>