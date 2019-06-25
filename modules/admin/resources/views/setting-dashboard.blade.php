@extends('admin::layout-nassau')

@section('content')

<form action="{{ route('admin.setting-dashboard.store') }}" method="post">
	@csrf
	<div class="col-md-8 pl-0">

		<div class="pt-3 pb-3">
			<h2 class="mb-4">Dasboard Setting</h2>
			<div class="row">
				<div class="col">
					<label for="exampleFormControlSelect1">Dashboard Logo</label>
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								@php

								$img_plus = asset('vendor/admin/images/image-plus.svg');
								$img_logo = $img_plus;
								$img_favicon = $img_plus;

								if(isset($settingDashboard->logo)){
								$img_logo = $settingDashboard->logo;
								}

								if(isset($settingDashboard->favicon)){
								$img_favicon = $settingDashboard->favicon;
								}
								@endphp

								<a href="#" data-toggle="modal" data-target="#media-library-modal"
									data-multi-select="false" data-on-select="selectLogoImage">
									<img src="{{ $img_logo }}" id="logo-image"
										class="img-fluid img-thumbnail add-img-featured" />
								</a>
								<input type="hidden" name="logo" value="{{ $img_logo }}" />
							</div>
						</div>
						<div class="col-7">
							<small>the height of the logo will be constrained to a maximum of 30 px</small>
						</div>
					</div>
				</div>
				<div class="col">
					<label for="exampleFormControlSelect1">Favicon</label>
					<div class="row">
						<div class="col-4">
							<div class="form-group">
								<a href="#" data-toggle="modal" data-target="#media-library-modal"
									data-multi-select="false" data-on-select="selectFaviconImage">
									<img src="{{ $img_favicon }}" id="favicon-image"
										class="img-fluid img-thumbnail add-img-featured" />
								</a>
								<input type="hidden" name="favicon" value="{{ $img_favicon }}" />
							</div>
						</div>
						<div class="col-7">
							<small>The logo will be constrained to a maximum of 512x512px</small>
						</div>
					</div>
				</div>
			</div>
		</div>

		<hr>
		@if (Session::has('success'))
		<div class="alert alert-success">Success! password updated</div>
		@endif
		
		<div class="pt-3 pb-3">
			<h2 class="mb-4">Account Setting</h2>
			<div>
				<div class="form-group">
					<label>Old Password</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="password" class="form-control {{ $errors->has('new_password') ? ' is-invalid' : '' }}" name="new_password" />
					@if ($errors->has('new_password'))
					<div class="invalid-feedback">{{ $errors->first('new_password') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label>Confirm New Password</label>
					<input type="password" class="form-control" name="new_password_confirmation" />
				</div>
			</div>
		</div>

		<hr>

		<div class="pt-3 pb-3">
			<h2 class="mb-4">Preorder Setting</h2>
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="inputRepeat">Repeat Reminder</label>
						<div class="input-group mb-3">
							<input type="number" class="form-control" id="inputRepeat" name="repeat"
								value="{{ (isset($settingReminder->repeat))? $settingReminder->repeat : 0 }}" />
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Times</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col">
					<div class="form-group">
						<label for="inputInterval">Interval Reminder</label>
						<div class="input-group mb-3">
							<input type="number" class="form-control" id="inputInterval" name="interval"
								value="{{ (isset($settingReminder->interval))? $settingReminder->interval : 0 }}" />
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">Hours</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col">

				</div>
			</div>
		</div>

		<hr>
		<!--
		<div class="pt-3 pb-3">
			<h2 class="mb-4">Courier Option</h2>
			@if(isset($couriers))
			@foreach($couriers as $key => $value)
			<div class="form-check mb-3">
				<input type="checkbox" class="form-check-input" name="courier[]" value="{{ $key }}">
				<label class="form-check-label style-privilage">{{ $value }}</label>
			</div>
			@endforeach
			@endif

		</div>
		-->
		<div class="float-right">
			<button type="submit" class="btn btn-success">Submit</button>
		</div>

	</div>
</form>
@endsection

@mediaLibraryModal

@push('scripts')
<script>
	function selectLogoImage(images) {
		const {
			id,
			url
		} = images[0]
		$('#logo-image').attr('src', url)
		$('input[name="logo"]').val(url);
	}

	function selectFaviconImage(images) {
		const {
			id,
			url
		} = images[0]
		$('#favicon-image').attr('src', url)
		$('input[name="favicon"]').val(url);
	}
</script>
@endpush