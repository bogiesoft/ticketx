@if ( session()->has('info'))
    <div class="alert alert-info" role-"alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('info') }}
    </div>
@endif

@if ( session()->has('warning'))
    <div class="alert alert-danger" role-"alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{ session()->get('warning') }}
    </div>
@endif

	@if ( session()->has('success'))
		<div class="alert alert-success">
		    <button type="button" class="close" data-dismiss="alert">x</button>
			<p>{{ session()->get('success') }}</p>
		</div>
	@endif

@if ( session('status'))
<button type="button" class="close" data-dismiss="alert">x</button>
     <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif