@extends('fas.layout.mainlayout')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dasboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Add Job Cost Estimate</li>
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
                                <label for="validationCustom01" class="form-label">Incident Date/Time</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom01" class="form-label">Dispatch Date</label>
                                <input type="date" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom01" class="form-label">JCE Number</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Labor Amount</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom02">
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustomUsername" class="form-label">Customer Name</label>
                                <select class="form-select form-select-sm" id="customernameid" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($customer as $data)
                                    <option value="{{ $data->id}}">{{ $data->customername }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom03" class="form-label">SRT</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom03">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Contact Person</label>
                                <input type="text" class="form-control form-control-sm" id="contactperson" disabled>
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
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($jobtype as $data)
                                    <option value="{{ $data->jobtype }}">{{ $data->jobtype }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label for="validationCustom05" class="form-label">Type</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Dealer</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($dealer as $data)
                                    <option value="{{ $data->dealer }}">{{ $data->dealer }}</option>
                                    @endforeach
                                </select>
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
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($components as $data)
                                    <option value="{{ $data->component }}">{{ $data->component }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label">Type of Issue</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($typeofissue as $data)
                                    <option value="{{ $data->typeofissue }}">{{ $data->typeofissue }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Promised Date/Time</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Resolved</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Via CSR Call">Via CSR Call</option>
                                    <option value="Via Technician Call">Via Technician Call</option>
                                    <option value="Proceed with quotation">Proceed with quotation</option>
                                    <option value="Proceed with Work Order">Proceed with Work Order</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom05" class="form-label">Payment Terms</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Mode of Payment</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cash on Delivery">Cash on Delivery</option>
                                    <option value="Check">Check</option>
                                    <option value="Terms">Terms</option>
                                </select>
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
                                <label class="form-label">Techician Name</label>
                                <select class="form-select form-select-sm" id="techname" name="techname[]" multiple="multiple">
                                    @foreach($techname as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label"><strong>Labor:</strong></label>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label"><strong>Parts:</strong></label>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">JCE Type</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Non-Revenue">Non-Revenue</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">JCE Type Parts</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Non-Revenue">Non-Revenue</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Charge To</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="">Customer</option>
                                    <option value="">PMS</option>
                                    <option value="">CNHI /Warranty</option>
                                    <option value="">Expense</option>
                                    <option value="">Sales - AG</option>
                                    <option value="">Sales - CE</option>
                                    <option value="">Parts</option>
                                    <option value="">Service</option>
                                    <option value="">Supply Chain</option>
                                    <option value="">Supplier</option>
                                    <option value="">Other Department</option>
                                    <option value="">FieldKing</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Charge To Parts</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="">Customer</option>
                                    <option value="">PMS</option>
                                    <option value="">CNHI /Warranty</option>
                                    <option value="">Expense</option>
                                    <option value="">Sales - AG</option>
                                    <option value="">Sales - CE</option>
                                    <option value="">Parts</option>
                                    <option value="">Service</option>
                                    <option value="">Supply Chain</option>
                                    <option value="">Supplier</option>
                                    <option value="">Other Department</option>
                                    <option value="">FieldKing</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="validationCustom05" class="form-label "><strong>SRT Code</strong></label>
                            </div>
                            <div class="table-responsive mt-3 ">
                                <table class="table align-middle table-sm">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>SRT</th>
                                            <th>Description</th>
                                            <th>Work Unit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-md-4">
                                                <input type="text" class="form-control form-control-sm">
                                            </td>
                                            <td class="col-md-7">89 Chicago UK</td>
                                            <td><input type="text" class="form-control form-control-sm" ></td>
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
                                <table class="table align-middle table-sm">
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
                                <table class="table align-middle table-sm">
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

@section('script')
<!-- JS Files -->
<script>
    $(document).ready(function() {

        // fetchequipment();

        // function fetchequipment() {
        //     $.ajax({
        //         type: "GET",
        //         url: "/FAS/show-techname",
        //         dataType: "json",
        //         success: function(response) {
        //             var dataItems = [];
        //             var num = 0;
        //             $.each(response.show, function(key, item) {
        //                 dataItems[num++] = item.name;
        //             })
        //             $('#techname').tokenfield({
        //                 autocomplete: {
        //                     source: dataItems,
        //                     delay: 100
        //                 },
        //                 showAutocompleteOnFocus: true
        //             });
        //         }
        //     })
        // }
        $('#techname').select2();

        $("#customernameid").change(function() {
            var url = "{{ url('/FAS/show-contactperson') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#contactperson").val(response.showcustomer.contact);
                }
            })

        });

    });
</script>

@endsection