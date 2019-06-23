@extends('layouts.app')

@section('content')
<div class="content employee-content-page" style="margin-top:0px;">
  <div class="col-md-12 col-12 mr-auto ml-auto">
	<!--      Wizard container        -->
	<div class="wizard-container">
		<div class="card card-wizard active" data-color="rose" id="wizardProfile">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Dashboard</div>

					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif

						You are logged in!
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
@endsection
