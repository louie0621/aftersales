@extends('fas.layout.mainlayout')

@section('content')

<!--start content-->
<main class="page-content" id="main">
	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
		<div class="breadcrumb-title pe-3">Dashboard</div>
		<div class="ps-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item active" aria-current="page">Add Customer</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->
	<div class="row" id="row">
		<div class="col-xl-9 mx-auto">
			<div class="card">
				<div class="card-body">
					<div class="p-4 border rounded">
						<form class="row g-3" method="POST" action="{{ url('/FAS/add-customer') }}">
							@csrf
							<div class="col-mb-3">
								<label for="customercode" class="form-label">Customers Code</label>
								<input type="text" class="form-control form-control-sm @error('customercode') is-invalid @enderror" value="{{ old('customercode') }}" name="customercode" id="customercode">
								@error('customercode')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-12">
								<label for="customername" class="form-label">Customer Name</label>
								<input type="text" class="form-control form-control-sm @error('customername') is-invalid @enderror" value="{{ old('customername') }}" name="customername" id="customername">
								@error('customername')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-6">
								<label for="address" class="form-label">Address</label>
								<input type="text" class="form-control form-control-sm @error('address') is-invalid @enderror" value="{{ old('address') }}" name="address" id="address">
								@error('address')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-3">
								<label for="city" class="form-label">City</label>
								<input type="text" class="form-control form-control-sm @error('city') is-invalid @enderror" value="{{ old('city') }}" name="city" id="city">
								@error('city')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-3">
								<label for="state" class="form-label">State/Province</label>
								<input type="text" class="form-control form-control-sm @error('state') is-invalid @enderror" value="{{ old('state') }}" name="state" id="state">
								@error('state')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-3">
								<label for="tin" class="form-label">TIN</label>
								<input type="text" class="form-control form-control-sm @error('tin') is-invalid @enderror" value="{{ old('tin') }}" name="tin" id="tin">
								@error('tin')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-3">
								<label for="phone" class="form-label">Phone No.</label>
								<input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone">
								@error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-3">
								<label for="contact" class="form-label">Contact Person</label>
								<input type="text" class="form-control form-control-sm @error('contact') is-invalid @enderror" value="{{ old('contact') }}" name="contact" id="contact">
								@error('contact')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-md-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="channelgroup" class="form-label">Channel Group</label>
								<input type="text" class="form-control form-control-sm @error('channelgroup') is-invalid @enderror" value="{{ old('channelgroup') }}" name="channelgroup" id="channelgroup">
								@error('channelgroup')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="paymenttermscode" class="form-label">Payment Terms Code</label>
								<input type="text" class="form-control form-control-sm @error('paymenttermscode') is-invalid @enderror" value="{{ old('paymenttermscode') }}" name="paymenttermscode" id="paymenttermscode">
								@error('paymenttermscode')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="units" class="form-label">Units</label>
								<input type="text" class="form-control form-control-sm @error('units') is-invalid @enderror" value="{{ old('units') }}" name="units" id="units">
								@error('units')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="" class="form-label">Credit Limit (LCY)</label>
								<input type="text" class="form-control form-control-sm @error('creditlimit') is-invalid @enderror" value="{{ old('creditlimit') }}" name="creditlimit" id="creditlimit">
								@error('creditlimit')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-mb-3">
								<label for="" class="form-label">Brand</label>
								<input type="text" class="form-control form-control-sm @error('brand') is-invalid @enderror" value="{{ old('brand') }}" name="brand" id="brand">
								@error('brand')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="col-12">
								<button class="btn btn-primary" type="submit">Save</button>
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

<!-- @section('script')

<script>
	$(document).ready(function() {
		$(document).on("click", "#print", function(e) {
			var body = document.getElementById('bdy').innerHTML;
			var main = document.getElementById('main').innerHTML;
			document.getElementById('bdy').innerHTML = main;
			window.print();
			document.getElementById('bdy').innerHTML = body;
		})
	});
</script>


@endsection -->