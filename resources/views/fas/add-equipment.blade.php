@extends('fas.layout.mainlayout')

@section('content')

<!--start content-->
<main class="page-content">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Dashboard</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item active" aria-current="page">Add Equipment</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->
	<div class="row">
		<div class="col-xl-9 mx-auto">
			<div class="card">
				<div class="card-body">
					<div class="p-4 border rounded">
						<form class="row g-3 needs-validation" method="POST" action="{{ url('/FAS/add-equipment') }}">
							@csrf
							<div class="col-mb-3">
								<label for="validationCustom01" class="form-label">Serial Number</label>
								<input type="text" class="form-control form-control-sm @error('serialnumber') is-invalid @enderror" value="{{ old('serialnumber') }}" name="serialnumber" id="serialnumber" autofocus>
								@error('serialnumber')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom01" class="form-label">Vehicle Model</label>
								<input type="text" class="form-control form-control-sm @error('vehiclemodel') is-invalid @enderror" value="{{ old('vehiclemodel') }}" name="vehiclemodel" id="vehiclemodel">
								@error('vehiclemodel')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustomUsername" class="form-label">Engine Number</label>
								<input type="text" class="form-control form-control-sm @error('engineno') is-invalid @enderror" value="{{ old('engineno') }}" name="engineno" id="engineno">
								@error('engineno')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustomUsername" class="form-label">Brand Model</label>
								<input type="text" class="form-control form-control-sm @error('brand') is-invalid @enderror" value="{{ old('brand') }}" name="brand" id="brand">
								@error('brand')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom02" class="form-label">Description</label>
								<input type="text" class="form-control form-control-sm @error('description') is-invalid @enderror" value="{{ old('description') }}" name="description" id="description">
								@error('description')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustomUsername" class="form-label">Branch Located</label>
								<input type="text" class="form-control form-control-sm @error('branch') is-invalid @enderror" value="{{ old('branch') }}" name="branch" id="branch">
								@error('branch')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom03" class="form-label">Warranty Start</label>
								<input type="date" class="form-control form-control-sm @error('warrantystart') is-invalid @enderror" value="{{ old('warrantystart') }}" name="warrantystart" id="warrantystart">
								@error('warrantystart')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom03" class="form-label">Warranty End</label>
								<input type="date" class="form-control form-control-sm @error('warrantyend') is-invalid @enderror" value="{{ old('warrantyend') }}" name="warrantyend" id="warrantyend">
								@error('warrantyend')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">End Customer</label>
								<input type="text" class="form-control form-control-sm @error('endcustomer') is-invalid @enderror" value="{{ old('endcustomer') }}" name="endcustomer" id="endcustomer">
								@error('endcustomer')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">Registration Number</label>
								<input type="text" class="form-control form-control-sm @error('registrationnumber') is-invalid @enderror" value="{{ old('registrationnumber') }}" name="registrationnumber" id="registrationnumber">
								@error('registrationnumber')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">End Customer/Company Name</label>
								<input type="text" class="form-control form-control-sm @error('endcustomername') is-invalid @enderror" value="{{ old('endcustomername') }}" name="endcustomername" id="endcustomername">
								@error('endcustomername')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">End Customer Address</label>
								<input type="text" class="form-control form-control-sm @error('endcustomeraddress') is-invalid @enderror" value="{{ old('endcustomeraddress') }}" name="endcustomeraddress" id="endcustomeraddress">
								@error('endcustomeraddress')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">End Customer City</label>
								<input type="text" class="form-control form-control-sm @error('endcustomercity') is-invalid @enderror" value="{{ old('endcustomercity') }}" name="endcustomercity" id="endcustomercity">
								@error('endcustomercity')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">End Customer State/Province</label>
								<input type="text" class="form-control form-control-sm @error('endcustomerstate') is-invalid @enderror" value="{{ old('endcustomerstate') }}" name="endcustomerstate" id="endcustomerstate">
								@error('endcustomerstate')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">End Customer Country</label>
								<input type="text" class="form-control form-control-sm @error('endcustomercountry') is-invalid @enderror" value="{{ old('endcustomercountry') }}" name="endcustomercountry" id="endcustomercountry">
								@error('endcustomercountry')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="validationCustom05" class="form-label">Nav Customer Code</label>
								<input type="text" class="form-control form-control-sm @error('navcustomercode') is-invalid @enderror" value="{{ old('navcustomercode') }}" name="navcustomercode" id="navcustomercode">
								@error('navcustomercode')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-12">
								<button class="btn btn-primary" type="submit">Save</button>
								<button class="btn btn-danger">Cancel</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end row-->
</main>
<!--end page main-->

@endsection