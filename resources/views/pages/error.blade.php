<div class="caontainer">
	@if(session()->has('error'))
	<div class="container">
		<div class="alert alert-danger">
			<button type="button" aria-hidden="true" class="close" data-dismiss="alert" id="btn-close">
			<i class="nc-icon nc-simple-remove"></i>
			</button>
			<span>
				<b> Error!! - </b>
				{{session()->get('error')}}
			</span>
		</div>
	</div>
	@endif
</div>