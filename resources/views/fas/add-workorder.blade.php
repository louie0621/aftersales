@extends('fas.layout.mainlayout')

@section('content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dasboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Add Work Order</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation">
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Work Order Date</label>
                                <input type="date" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">JCE Number</label>
                                <input type="date" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">Work Order Number</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Job Summary</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom02">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustomUsername" class="form-label">Customer Name</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustomUsername">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">SRT</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom03">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom04" class="form-label">Contact Person</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom03">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom04" class="form-label">Parts Amount</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom03">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">TelNo.</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Job Type</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">Type</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Dealer</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">Model</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Job Site</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">Serial Number</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Unit Status</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05" required>
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">Engine Number</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">SalesType</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Complaint/Request</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Component</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Type of Issue</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Promised Date/Time</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Resolved</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Payment Terms</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Mode of Payment</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">PO Number</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Engine Hours</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Travel Days</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Techician Name</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label"><strong>Labor:</strong></label>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label"><strong>Parts:</strong></label>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">JCE Type</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">JCE Type Parts</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Charge To</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Charge To Parts</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label"><strong>SRT Code</strong></label>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table align-middle">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>SRT</th>
                                            <th>Description</th>
                                            <th>Work Unit</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                    <img src="{{ asset('assets/images/avatars/avatar-1.png')}}" class="rounded-circle" width="44" height="44" alt="">
                                                    <div class="">
                                                        <p class="mb-0">Thomas Hardy</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>89 Chicago UK</td>
                                            <td>Chicago</td>
                                            <td>
                                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                                    <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                    <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <label for="validationCustom05" class="form-label"><strong>Labor Cost</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label"><strong>SRT (Total Hours)</strong></label>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table align-middle">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Description</th>
                                            <th>Rate</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                    <img src="{{ asset('assets/images/avatars/avatar-1.png')}}" class="rounded-circle" width="44" height="44" alt="">
                                                    <div class="">
                                                        <p class="mb-0">Thomas Hardy</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>89 Chicago UK</td>
                                            <td>Chicago</td>
                                            <td>Chicagosss</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <label for="validationCustom05" class="form-label"><strong>Parts</strong></label>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label"><strong>JCE Amount</strong></label>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table align-middle">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Part Number</th>
                                            <th>Description</th>
                                            <th>Availability</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Disc %</th>
                                            <th>Disc Amount</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 cursor-pointer">
                                                    <img src="{{ asset('assets/images/avatars/avatar-1.png')}}" class="rounded-circle" width="44" height="44" alt="">
                                                    <div class="">
                                                        <p class="mb-0">Thomas Hardy</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>89 Chicago UK</td>
                                            <td>Chicago</td>
                                            <td>Chicagosss</td>
                                            <td>Chicago</td>
                                            <td>Chicagosss</td>
                                            <td>Chicago</td>
                                            <td>Chicagosss</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">Remarks</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Total Parts Amount</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Freight Cost</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                            <label for="validationCustom05" class="form-label">Validity Date</label>
                                <input type="date" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Amount Due</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger" type="submit">Cancel</button>
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