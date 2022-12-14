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
                                <label class="form-label">Dispatch Date</label>
                                <input type="date" class="form-control form-control-sm" id="dispatchdate">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Work Area</label>
                                <select class="form-select form-select-sm" id="workarea" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="In-Field">In-Field</option>
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">JCE Number</label>
                                <input type="text" class="form-control form-control-sm" id="jceno" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Labor Amount</label>
                                <input type="text" class="form-control form-control-sm" id="laboramt">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Customer Name</label>
                                <select class="form-select form-select-sm " id="customernameid" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($customer as $data)
                                    <option value="{{ $data->id}}">{{ $data->customername }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">SRT</label>
                                <input type="text" class="form-control form-control-sm numberonly" id="srt">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Contact Person </label>
                                <input type="text" class="form-control form-control-sm" id="contactperson" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Parts Amount</label>
                                <input type="text" class="form-control form-control-sm numberonly" id="partsamt">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">TelNo.</label>
                                <input type="text" class="form-control form-control-sm" id="telno">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Job Type</label>
                                <select class="form-select form-select-sm" id="jobtype" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($jobtype as $data)
                                    <option value="{{ $data->jobtype }}">{{ $data->jobtype }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-8">
                                <label class="form-label">Vehicle Type</label>
                                <select class="form-select form-select-sm" id="vehicletypeid" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Agriculture Equipment">Agriculture Equipment</option>
                                    <option value="Construction Equipment">Construction Equipment</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Dealer</label>
                                <select class="form-select form-select-sm" id="dealer" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($dealer as $data)
                                    <option value="{{ $data->dealer }}">{{ $data->dealer }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Model</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="model" disabled>
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Job Site</label>
                                <input type="text" class="form-control form-control-sm" id="jobsite">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Serial Number</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="serialno" disabled>
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Unit Status</label>
                                <input type="text" class="form-control form-control-sm" id="unitstatus" disabled>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Engine Number</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="engineno" disabled>
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">SalesType</label>
                                <input type="text" class="form-control form-control-sm" id="salestype">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Complaint/Request</label>
                                <input type="text" class="form-control form-control-sm" id="complaintrequest">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Component</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="component">
                                    <option selected></option>
                                    @foreach($components as $data)
                                    <option value="{{ $data->component }}">{{ $data->component }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Type of Issue</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="typeofissue">
                                    <option selected></option>
                                    @foreach($typeofissue as $data)
                                    <option value="{{ $data->typeofissue }}">{{ $data->typeofissue }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Promised Date/Time</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="promiseddate">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Resolved</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="resolved">
                                    <option selected></option>
                                    <option value="Via CSR Call">Via CSR Call</option>
                                    <option value="Via Technician Call">Via Technician Call</option>
                                    <option value="Proceed with quotation">Proceed with quotation</option>
                                    <option value="Proceed with Work Order">Proceed with Work Order</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Payment Terms</label>
                                <input type="text" class="form-control form-control-sm" id="paymentterms">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Mode of Payment</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="modeofpayment">
                                    <option selected></option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cash on Delivery">Cash on Delivery</option>
                                    <option value="Check">Check</option>
                                    <option value="Terms">Terms</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">PO Number</label>
                                <input type="text" class="form-control form-control-sm" id="pono">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Engine Hours</label>
                                <input type="text" class="form-control form-control-sm numberonly" id="enginehours">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Travel Days</label>
                                <input type="text" class="form-control form-control-sm numberonly" id="traveldays">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Techician Name</label>
                                <select class="form-select form-select-sm techname " id="techname" name="techname[]" multiple="multiple">
                                    @foreach($techname as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">JCE Type</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jcetype">
                                    <option selected></option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Non-Revenue">Non-Revenue</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">JCE Type Parts</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jcetypeparts">
                                    <option selected></option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Non-Revenue">Non-Revenue</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Charge To</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jcechargeto">
                                    <option selected></option>
                                    <option value="customer">Customer</option>
                                    <option value="pms">PMS</option>
                                    <option value="cnhi/warranty">CNHI /Warranty</option>
                                    <option value="expense">Expense</option>
                                    <option value="sales-ag">Sales - AG</option>
                                    <option value="sales-ce">Sales - CE</option>
                                    <option value="parts">Parts</option>
                                    <option value="service">Service</option>
                                    <option value="supply chain">Supply Chain</option>
                                    <option value="supplier">Supplier</option>
                                    <option value="other department">Other Department</option>
                                    <option value="fieldking">FieldKing</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Charge To Parts</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jcechargetoparts">
                                    <option selected></option>
                                    <option value="customer">Customer</option>
                                    <option value="pms">PMS</option>
                                    <option value="cnhi/warranty">CNHI /Warranty</option>
                                    <option value="expense">Expense</option>
                                    <option value="sales-ag">Sales - AG</option>
                                    <option value="sales-ce">Sales - CE</option>
                                    <option value="parts">Parts</option>
                                    <option value="service">Service</option>
                                    <option value="supply chain">Supply Chain</option>
                                    <option value="supplier">Supplier</option>
                                    <option value="other department">Other Department</option>
                                    <option value="fieldking">FieldKing</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label "><strong>SRT Code</strong></label>
                            </div>
                            <div class="table-responsive mt-3 ">
                                <table class="table align-middle table-sm">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>SRT</th>
                                            <th>Description</th>
                                            <th>Work Unit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="srtcodetbody">
                                        <tr>
                                            <td class="col-md-3"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" id="srtcodeentry"></td>
                                            <td class="col-md-6"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" id="srtdesentry"></td>
                                            <td><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center; padding-right:.5rem; " id="srtworkunitentry"></td>
                                            <td><strong><a href="javascript:;" id="addsrtcode" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" style="text-align: right;"><strong>SRT (Total Hours)</strong></td>
                                            <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="totalsrtcode" disabled></strong></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label "><strong>Labor Cost</strong></label>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table align-middle table-sm">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Description</th>
                                            <th>Rate</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="laborcostbody">
                                        <tr>
                                            <td class="col-md-6">
                                                <select class="form-select form-select-sm" id="labordescription" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                    <option value=""></option>
                                                    @foreach($laborcost as $data)
                                                    <option value="{{ $data->id }}">{{ $data->description }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="laborcostrate" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="laborcostqty"></td>
                                            <td><input type="text" class="form-control form-control-sm " style="min-height: 0rem; padding:0rem; text-align:right; padding-right:.5rem;" id="laborcostamt" disabled></td>
                                            <td><strong><a href="javascript:;" id="addlaborcost" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" style="text-align: right;"><strong>JCE Amount</strong></td>
                                            <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="totallaborcostamt" disabled></strong></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <label class="form-label"><strong>Parts</strong></label>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table align-middle table-sm">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Parts Number</th>
                                            <th>Description</th>
                                            <th>Availability</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Disc %</th>
                                            <th>Disc Amount</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="partbody">
                                        <tr>
                                            <td class="col-md-2">
                                                <select class="form-select form-select-sm selectpart" id="partsno" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                    <option value=""></option>
                                                    @foreach($parts as $data)
                                                    <option value="{{ $data->id }}">{{ $data->part_number }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="col-md-3"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="partdes" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="partavail" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="partqty"></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="partprice" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="partdiscpercent" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:right;" id="partdiscamt" disabled></td>
                                            <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="parttotal" disabled></td>
                                            <td><strong><a href="javascript:;" id="addparts" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Remarks</label>
                                <input type="text" class="form-control form-control-sm" id="remarks">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Total Parts Amount</label>
                                <input type="text" class="form-control form-control-sm" style="text-align: rigth;" id="totalpartsamt" disabled>
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Freight Cost</label>
                                <input type="text" class="form-control form-control-sm numberonly" style="text-align: right;" id="freightcost">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Validity Date</label>
                                <input type="date" class="form-control form-control-sm" id="validitydate">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Amount Due</label>
                                <input type="text" class="form-control form-control-sm numberonly" id="amtdue" style="text-align: right;" disabled>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="button" id="submitjceform">Save</button>
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


        //submit jce form
        $("#submitjceform").click(function(e) {
            e.preventDefault();
            var url = "{{ url('/FAS/addjce') }}";
            var today = new Date();
            var datetime = today.toISOString();
            var jcenocode = $("#jceno").val().slice(8, 15);
            var selected = $('#techname').select2("val");

            if ($("#dispatchdate").val().length > 0) {
                $("#dispatchdate").removeClass("is-invalid");
            } else {
                $("#dispatchdate").addClass("is-invalid");
            }
            if ($("#workarea").val().length > 0) {
                $("#workarea").removeClass("is-invalid");
            } else {
                $("#workarea").addClass("is-invalid");
            }
            if ($("#laboramt").val().length > 0) {
                $("#laboramt").removeClass("is-invalid");
            } else {
                $("#laboramt").addClass("is-invalid");
            }
            if ($("#srt").val().length > 0) {
                $("#srt").removeClass("is-invalid");
            } else {
                $("#srt").addClass("is-invalid");
            }
            if ($("#partsamt").val().length > 0) {
                $("#partsamt").removeClass("is-invalid");
            } else {
                $("#partsamt").addClass("is-invalid");
            }
            if ($("#telno").val().length > 0) {
                $("#telno").removeClass("is-invalid");
            } else {
                $("#telno").addClass("is-invalid");
            }
            if ($("#jobtype").val().length > 0) {
                $("#jobtype").removeClass("is-invalid");
            } else {
                $("#jobtype").addClass("is-invalid");
            }
            if ($("#vehicletypeid").val().length > 0) {
                $("#vehicletypeid").removeClass("is-invalid");
            } else {
                $("#vehicletypeid").addClass("is-invalid");
            }
            if ($("#dealer").val().length > 0) {
                $("#dealer").removeClass("is-invalid");
            } else {
                $("#dealer").addClass("is-invalid");
            }
            if ($("#jobsite").val().length > 0) {
                $("#jobsite").removeClass("is-invalid");
            } else {
                $("#jobsite").addClass("is-invalid");
            }
            if ($("#unitstatus").val().length > 0) {
                $("#unitstatus").removeClass("is-invalid");
            } else {
                $("#unitstatus").addClass("is-invalid");
            }
            if ($("#salestype").val().length > 0) {
                $("#salestype").removeClass("is-invalid");
            } else {
                $("#salestype").addClass("is-invalid");
            }
            if ($("#customernameid").val().length > 0) {
                $("#customernameid").removeClass("is-invalid");
            } else {
                $("#customernameid").addClass("is-invalid");
            }
            if ($("#telno").val().length > 0) {
                $("#telno").removeClass("is-invalid");
            } else {
                $("#telno").addClass("is-invalid");
            }
            if ($("#model").val().length > 0) {
                $("#model").removeClass("is-invalid");
            } else {
                $("#model").addClass("is-invalid");
            }
            if ($("#serialno").val().length > 0) {
                $("#serialno").removeClass("is-invalid");
            } else {
                $("#serialno").addClass("is-invalid");
            }
            if ($("#engineno").val().length > 0) {
                $("#engineno").removeClass("is-invalid");
            } else {
                $("#engineno").addClass("is-invalid");
            }
            if ($("#complaintrequest").val().length > 0) {
                $("#complaintrequest").removeClass("is-invalid");
            } else {
                $("#complaintrequest").addClass("is-invalid");
            }
            if ($("#component").val().length > 0) {
                $("#component").removeClass("is-invalid");
            } else {
                $("#component").addClass("is-invalid");
            }
            if ($("#typeofissue").val().length > 0) {
                $("#typeofissue").removeClass("is-invalid");
            } else {
                $("#typeofissue").addClass("is-invalid");
            }
            if ($("#promiseddate").val().length > 0) {
                $("#promiseddate").removeClass("is-invalid");
            } else {
                $("#promiseddate").addClass("is-invalid");
            }
            if ($("#resolved").val().length > 0) {
                $("#resolved").removeClass("is-invalid");
            } else {
                $("#resolved").addClass("is-invalid");
            }
            if ($("#paymentterms").val().length > 0) {
                $("#paymentterms").removeClass("is-invalid");
            } else {
                $("#paymentterms").addClass("is-invalid");
            }
            if ($("#modeofpayment").val().length > 0) {
                $("#modeofpayment").removeClass("is-invalid");
            } else {
                $("#modeofpayment").addClass("is-invalid");
            }
            if ($("#pono").val().length > 0) {
                $("#pono").removeClass("is-invalid");
            } else {
                $("#pono").addClass("is-invalid");
            }
            if ($("#enginehours").val().length > 0) {
                $("#enginehours").removeClass("is-invalid");
            } else {
                $("#enginehours").addClass("is-invalid");
            }
            if ($("#traveldays").val().length > 0) {
                $("#traveldays").removeClass("is-invalid");
            } else {
                $("#traveldays").addClass("is-invalid");
            }
            if ($("#techname").val().length > 0) {
                $("#techname").removeClass("is-invalid");
            } else {
                $("#techname").addClass("is-invalid");
            }
            if ($("#jcetype").val().length > 0) {
                $("#jcetype").removeClass("is-invalid");
            } else {
                $("#jcetype").addClass("is-invalid");
            }
            if ($("#jcetypeparts").val().length > 0) {
                $("#jcetypeparts").removeClass("is-invalid");
            } else {
                $("#jcetypeparts").addClass("is-invalid");
            }
            if ($("#jcechargeto").val().length > 0) {
                $("#jcechargeto").removeClass("is-invalid");
            } else {
                $("#jcechargeto").addClass("is-invalid");
            }
            if ($("#jcechargetoparts").val().length > 0) {
                $("#jcechargetoparts").removeClass("is-invalid");
            } else {
                $("#jcechargetoparts").addClass("is-invalid");
            }
            if ($("#totalsrtcode").val().length > 0) {
                $("#srtcodeentry").removeClass("is-invalid");
                $("#srtdesentry").removeClass("is-invalid");
                $("#srtworkunitentry").removeClass("is-invalid");
            } else {
                $("#srtcodeentry").addClass("is-invalid");
                $("#srtdesentry").addClass("is-invalid");
                $("#srtworkunitentry").addClass("is-invalid");
            }
            if ($("#totallaborcostamt").val().length > 0) {
                $("#labordescription").removeClass("is-invalid");
                $("#laborcostqty").removeClass("is-invalid");
            } else {
                $("#labordescription").addClass("is-invalid");
                $("#laborcostqty").addClass("is-invalid");
            }
            if ($("#totalpartsamt").val().length > 0) {
                $("#partsno").removeClass("is-invalid");
                $("#partqty").removeClass("is-invalid");
            } else {
                $("#partsno").addClass("is-invalid");
                $("#partqty").addClass("is-invalid");
            }
            if ($("#remarks").val().length > 0) {
                $("#remarks").removeClass("is-invalid");
            } else {
                $("#remarks").addClass("is-invalid");
            }
            if ($("#freightcost").val().length > 0) {
                $("#freightcost").removeClass("is-invalid");
            } else {
                $("#freightcost").addClass("is-invalid");
            }
            if ($("#validitydate").val().length > 0) {
                $("#validitydate").removeClass("is-invalid");
            } else {
                $("#validitydate").addClass("is-invalid");
            }
            if ($("#dispatchdate").val().length > 0 && $("#workarea").val().length > 0 && $("#laboramt").val().length > 0 && $("#srt").val().length > 0 && $("#partsamt").val().length > 0 && $("#telno").val().length > 0 && $("#jobtype").val().length > 0 && $("#vehicletypeid").val().length > 0 && $("#dealer").val().length > 0 && $("#jobsite").val().length > 0 && $("#unitstatus").val().length > 0 && $("#salestype").val().length > 0 && $("#customernameid").val().length > 0 && $("#telno").val().length > 0 && $("#model").val().length > 0 && $("#serialno").val().length > 0 && $("#engineno").val().length > 0 && $("#complaintrequest").val().length > 0 && $("#component").val().length > 0 && $("#typeofissue").val().length > 0 && $("#promiseddate").val().length > 0 && $("#resolved").val().length > 0 && $("#paymentterms").val().length > 0 && $("#modeofpayment").val().length > 0 && $("#pono").val().length > 0 && $("#enginehours").val().length > 0 && $("#traveldays").val().length > 0 && $("#techname").val().length > 0 && $("#jcetype").val().length > 0 && $("#jcetypeparts").val().length > 0 && $("#jcechargeto").val().length > 0 && $("#jcechargetoparts").val().length > 0 && $("#totalsrtcode").val().length > 0 && $("#totallaborcostamt").val().length > 0 && $("#totalpartsamt").val().length > 0 && $("#remarks").val().length > 0 && $("#totalpartsamt").val().length > 0 && $("#freightcost").val().length > 0 && $("#validitydate").val().length > 0) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        incidentdatetime: datetime,
                        jce_number: $("#jceno").val(),
                        customer_id: $("#customernameid").val(),
                        contact_no: $("#telno").val(),
                        equipment_id: $("#engineno").children("option:selected").val(),
                        dispatch_date: $("#dispatchdate").val(),
                        work_area: $("#workarea").children("option:selected").val(),
                        labor_amt: $("#laboramt").val(),
                        srt_amt: $("#srt").val(),
                        parts_amt: $("#partsamt").val(),
                        job_type: $("#jobtype").children("option:selected").val(),
                        dealer: $("#dealer").children("option:selected").val(),
                        job_site: $("#jobsite").val(),
                        salestype: $("#salestype").val(),
                        complaint_request: $("#complaintrequest").val(),
                        component: $("#component").children("option:selected").val(),
                        typeofissue: $("#typeofissue").children("option:selected").val(),
                        promised_datetime: $("#promiseddate").val(),
                        resolved: $("#resolved").children("option:selected").val(),
                        paymentterms: $("#paymentterms").val(),
                        modeofpayment: $("#modeofpayment").children("option:selected").val(),
                        po_number: $("#pono").val(),
                        engine_hours: $("#enginehours").val(),
                        travel_days: $("#traveldays").val(),
                        techentry_no: jcenocode,
                        jce_type: $("#jcetype").children("option:selected").val(),
                        charge_to: $("#jcechargeto").children("option:selected").val(),
                        jcetypeparts: $("#jcetypeparts").children("option:selected").val(),
                        chargetoparts: $("#jcechargetoparts").children("option:selected").val(),
                        srtcode_no: jcenocode,
                        srtcode_total: $("#totalsrtcode").val(),
                        laborcost_no: jcenocode,
                        laborcost_total: $("#totallaborcostamt").val(),
                        parts_no: jcenocode,
                        parts_total: $("#totalpartsamt").val(),
                        freight_cost: $("#freightcost").val(),
                        amount_due: $("#amtdue").val(),
                        remarks: $("#remarks").val(),
                        validity_date: $("#validitydate").val(),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: 'JSON',
                    success: function(data) {

                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                //store technician entry
                $.ajax({
                    method: "POST",
                    url: "{{ url('/FAS/storejcetechname') }}",
                    data: {
                        techentry_no: $("#jceno").val().slice(8, 15),
                        tech_id: JSON.stringify(selected),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(response) {}
                });

                //Store SRT Code Entry

                var tdsrtcode = [];
                var tddescription = [];
                var tdworkunit = [];

                $(".tdsrtcode").each(function() {
                    tdsrtcode.push($(this).text());
                });
                $(".tddescription").each(function() {
                    tddescription.push($(this).text());
                });
                $(".tdworkunit").each(function() {
                    tdworkunit.push($(this).text());
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('/FAS/storejcesrtcodeentry') }}",
                    data: {
                        srtcode_no: $("#jceno").val().slice(8, 15),
                        srt_code: JSON.stringify(tdsrtcode),
                        description: JSON.stringify(tddescription),
                        working_unit: JSON.stringify(tdworkunit),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(response) {}
                });

                //Store Labor Cost Entry

                var tdlcnumber = [];
                var tdlcquantity = [];
                var tdlcamount = [];

                $(".tdlcnumber").each(function() {
                    tdlcnumber.push($(this).text());
                });
                $(".tdlcquantity").each(function() {
                    tdlcquantity.push($(this).text());
                });
                $(".tdlcamount").each(function() {
                    tdlcamount.push($(this).text());
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('/FAS/storejcelaborcostentry') }}",
                    data: {
                        laborcost_no: $("#jceno").val().slice(8, 15),
                        laborcost_id: JSON.stringify(tdlcnumber),
                        quantity: JSON.stringify(tdlcquantity),
                        amount: JSON.stringify(tdlcamount),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(response) {}
                });

                //Store Parts Entry

                var tdpartsnumber = [];
                var tdpartsquantity = [];
                var tdpartsdispercent = [];
                var tdpartsdisamt = [];
                var tdpartstotal = [];

                $(".tdpartsnumber").each(function() {
                    tdpartsnumber.push($(this).text());
                });
                $(".tdpartsquantity").each(function() {
                    tdpartsquantity.push($(this).text());
                });
                $(".tdpartsdispercent").each(function() {
                    tdpartsdispercent.push($(this).text());
                });
                $(".tdpartsdisamt").each(function() {
                    tdpartsdisamt.push($(this).text());
                });
                $(".tdpartstotal").each(function() {
                    tdpartstotal.push($(this).text());
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('/FAS/storejcepartsentry') }}",
                    data: {
                        parts_no: $("#jceno").val().slice(8, 15),
                        parts_id: JSON.stringify(tdpartsnumber),
                        quantity: JSON.stringify(tdpartsquantity),
                        disc_percent: JSON.stringify(tdpartsdispercent),
                        disc_amt: JSON.stringify(tdpartsdisamt),
                        total_amt: JSON.stringify(tdpartstotal),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(response) {
                        window.location.reload();
                    }
                });
            } else {

            }


        });

        //Add Part 
        $("#addparts").click(function() {
            var partno = $("#partsno option:selected").text();
            var partid = $("#partsno option:selected").val();
            var partdes = $("#partdes").val();
            var partavail = $("#partavail").val();
            var partqty = $("#partqty").val();
            var partprice = $("#partprice").val();
            var partdiscpercent = $("#partdiscpercent").val();
            var partdiscamt = $("#partdiscamt").val();
            var parttotal = $("#parttotal").val();

            var row = "<tr class='parttr'><td class='tdpartsnumber' hidden>" + partid + "</td><td class='clss text-center'>" + partno +
                "</td><td class='clss '>" + partdes +
                "</td><td class='clss text-center'>" + partavail +
                "</td><td class='clss text-center tdpartsquantity'>" + partqty +
                "</td><td class='clss' style='text-align: right;'>" + partprice +
                "</td><td class='clss text-center tdpartsdispercent'>" + partdiscpercent +
                "</td><td class='clss tdpartsdisamt' style='text-align: right;'>" + partdiscamt +
                "</td><td class='clss tdpartstotal' style='text-align: right;'>" + parttotal +
                "</td><td><a href='javascript:;' onclick='partstblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

            $("#partbody").append(row);

            var arr = [];
            $(".parttr").each(function() {
                arr.push($(this).find("td:nth-child(9)").text()); //put elements into array
            });

            var sum = arr.reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);

            $("#totalpartsamt").val(sum.toLocaleString());
            $("#partsno").find('option:eq(0)').prop('selected', true);
            $("#partdes").val('');
            $("#partavail").val('');
            $("#partqty").val('');
            $("#partprice").val('');
            $("#partdiscpercent").val('');
            $("#partdiscamt").val('');
            $("#parttotal").val('');

        });

        //part discount amount
        $("#partdiscamt").keyup(function(e) {
            var price = $("#partprice").val();
            var qty = $("#partqty").val();
            var totalqty = parseFloat(price) * parseFloat(qty);
            var percent = parseFloat($("#partdiscpercent").val()) / 100;
            var subtotal = parseFloat(percent) * parseFloat(totalqty);
            var totalpercent = parseFloat(totalqty) - parseFloat(subtotal);
            var totaldics = parseFloat(totalpercent) - parseFloat($("#partdiscamt").val());
            var totalamt = parseFloat(totalqty) - parseFloat($("#partdiscamt").val());

            if ($("#partdiscamt").val().length && $("#partdiscpercent").val().length) {
                $("#parttotal").val(totaldics);
            } else if ($("#partdiscpercent").val().length) {
                $("#parttotal").val(totalpercent);
            } else if ($("#partdiscamt").val().length) {
                $("#parttotal").val(totalamt);
            } else {
                $("#parttotal").val(totalqty);
            }

        });

        //part discount percent
        $("#partdiscpercent").keyup(function(e) {
            var price = $("#partprice").val();
            var qty = $("#partqty").val();
            var totalqty = parseFloat(price) * parseFloat(qty);
            var percent = parseFloat($("#partdiscpercent").val()) / 100;
            var subtotal = parseFloat(percent) * parseFloat(totalqty);
            var totalpercent = parseFloat(totalqty) - parseFloat(subtotal);
            var totaldics = parseFloat(totalpercent) - parseFloat($("#partdiscamt").val());
            var totalamt = parseFloat(totalqty) - parseFloat($("#partdiscamt").val());

            if ($("#partdiscamt").val().length && $("#partdiscpercent").val().length) {
                $("#parttotal").val(totaldics);
            } else if ($("#partdiscpercent").val().length) {
                $("#parttotal").val(totalpercent);
            } else if ($("#partdiscamt").val().length) {
                $("#parttotal").val(totalamt);
            } else {
                $("#parttotal").val(totalqty);
            }
        });

        //part quantity
        $("#partqty").keyup(function(e) {
            var price = $("#partprice").val();
            var qty = $("#partqty").val();
            var total = parseFloat(price) * parseFloat(qty);
            if ($("#partqty").val().length) {
                $("#parttotal").val(total);
                $("#partdiscpercent").prop("disabled", false);
                $("#partdiscamt").prop("disabled", false);
            } else {
                $("#parttotal").val('');
                $("#partdiscpercent").prop("disabled", true);
                $("#partdiscamt").prop("disabled", true);
            }
        });

        //Part Number
        $("#partsno").change(function() {
            var url = "{{ url('/FAS/selectpartno') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {

                        $("#partdes").val(response.showpartsdescription.description);
                        if (response.showpartsdescription.status > 0) {
                            $("#partavail").val("Available");
                        } else {
                            $("#partavail").val("Not Available");
                        }
                        
                        $("#partprice").val(response.showpartsdescription.srp);
                        var price = $("#partprice").val();
                        var qty = $("#partqty").val();
                        var total = parseFloat(price) * parseFloat(qty);
                        $("#partdiscpercent").val('');
                        $("#partdiscamt").val('');

                        if ($("#partqty").val().length) {
                            $("#parttotal").val(total);
                        } else {
                            $("#parttotal").val('');
                        }
                    }
                })
            } else {
                $("#partdiscpercent").prop("disabled", true);
                $("#partdiscamt").prop("disabled", true);
                $("#partdiscpercent").val('');
                $("#partdiscamt").val('');
                $("#partdes").val('');
                $("#partavail").val('');
                $("#partprice").val('');
                $("#partqty").val('');
                $("#parttotal").val('');
            }

        });

        //Add Labor Cost
        $("#addlaborcost").click(function() {
            var des = $("#labordescription option:selected").text();
            var desnumber = $("#labordescription option:selected").val();
            var rate = $("#laborcostrate").val();
            var qty = $("#laborcostqty").val();
            var amt = $("#laborcostamt").val();

            var row = "<tr class='laborcosttr'><td class='tdlcnumber' hidden>" + desnumber + "</td><td class='tdlcdescription'>" + des +
                "</td><td class='clss text-center'>" + rate +
                "</td><td class='clss text-center tdlcquantity'>" + qty +
                "</td><td class='clss tdlcamount' style='text-align:right;'>" + amt +
                "</td><td><a href='javascript:;' onclick='lcosttblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

            $("#laborcostbody").append(row);

            var arr = [];
            $(".laborcosttr").each(function() {
                arr.push($(this).find("td:nth-child(5)").text()); //put elements into array
            });

            var sum = arr.reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);
            var ttl = sum.toLocaleString();
            $("#totallaborcostamt").val(ttl);
            $("#labordescription").find('option:eq(0)').prop('selected', true);
            $("#laborcostamt").val('');
            $("#laborcostqty").val('');
            $("#laborcostrate").val('');
        });

        //Labor Cost Quantity
        $("#laborcostqty").keyup(function(e) {
            var rate = $("#laborcostrate").val();
            var qty = $("#laborcostqty").val();
            var total = parseFloat(rate) * parseFloat(qty);
            if ($("#laborcostqty").val().length) {
                $("#laborcostamt").val(total);
            } else {
                $("#laborcostamt").val('');
            }

        });

        // Labor Cost Description
        $("#labordescription").change(function() {
            var url = "{{ url('/FAS/selectlaborcost') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#laborcostrate").val(response.showdescription.rate);
                        var rate = $("#laborcostrate").val();
                        var qty = $("#laborcostqty").val();
                        var total = parseFloat(rate) * parseFloat(qty);
                        if ($("#laborcostqty").val().length) {
                            $("#laborcostamt").val(total);
                        } else {
                            $("#laborcostamt").val('');
                        }
                    }
                })
            } else {
                var rate = $("#laborcostrate").val('');
                var qty = $("#laborcostqty").val('');
                $("#laborcostamt").val('');
            }

        });

        //Amount Due 
        $("#freightcost").keyup(function(e) {
            var totalparts = $("#totalpartsamt").val();
            var freightcost = $("#freightcost").val();
            var total = parseFloat(totalparts.replace(/,/g, '')) + parseFloat(freightcost);
            if ($("#freightcost").val().length || $("#totalpartsamt").val().length) {
                $("#amtdue").val(total.toLocaleString());
            } else {
                $("#amtdue").val('');
            }
        });

        //Add srtcode 
        $("#addsrtcode").click(function() {
            var srtcode = $("#srtcodeentry").val();
            var des = $("#srtdesentry").val();
            var workunit = $("#srtworkunitentry").val();

            if ($("#srtcodeentry").val().length > 0) {
                $("#srtcodeentry").removeClass("is-invalid");
            } else {
                $("#srtcodeentry").addClass("is-invalid");
            }

            if ($("#srtdesentry").val().length > 0) {
                $("#srtdesentry").removeClass("is-invalid");
            } else {
                $("#srtdesentry").addClass("is-invalid");
            }
            if ($("#srtworkunitentry").val().length > 0) {
                $("#srtworkunitentry").removeClass("is-invalid");
            } else {
                $("#srtworkunitentry").addClass("is-invalid");
            }

            if ($("#srtcodeentry").val().length > 0 && $("#srtdesentry").val().length > 0 && $("#srtworkunitentry").val().length > 0) {
                var row = "<tr class='srtcodetr col-md-3'><td class='tdsrtcode'>" + srtcode + "</td><td class='clss col-md-6 tddescription'>" + des + "</td><td class='clss text-center tdworkunit'>" + workunit + "</td> <td><a href='javascript:;' onclick='srttblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

                $("#srtcodetbody").append(row);

                var arr = [];
                $(".srtcodetr").each(function() {
                    arr.push($(this).find("td:nth-child(3)").text()); //put elements into array
                });

                var sum = arr.reduce(function(a, b) {
                    return parseFloat(a) + parseFloat(b);
                }, 0);

                total = sum / 10;

                $("#totalsrtcode").val(total);
                $("#srtcodeentry").val('');
                $("#srtdesentry").val('');
                $("#srtworkunitentry").val('');
            } else {

            }

        });



        $('#techname').select2();

        //Contact person
        $("#customernameid").change(function() {
            var url = "{{ url('/FAS/show-contactperson') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#contactperson").val(response.showcustomer.contact);
                        $("#telno").val(response.showcustomer.phone);
                    }
                })
            } else {
                $("#contactperson").val('');
                $("#telno").val('');
            }


        });
        // 
        //Vehicletype
        $("#vehicletypeid").change(function() {
            var url = "{{ url('/FAS/show-vehicletype') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#model").prop("disabled", false);
                        $('#model').empty();
                        $("#serialno").prop("disabled", true);
                        $('#serialno').empty();
                        $('#model').append(`<option value="">
                                  </option>`);
                        $("#engineno").prop("disabled", true);
                        $('#engineno').empty();
                        $('#engineno').append(`<option value="">
                                  </option>`);
                        $("#unitstatus").val('');
                        $.each(response.showmodel, function(key, item) {
                            $('#model').append(`<option value="${item.vehiclemodel}">
                                       ${item.vehiclemodel}
                                  </option>`);
                        })
                    }
                })
            } else {
                $("#model").prop("disabled", true);
                $('#model').empty();
                $("#serialno").prop("disabled", true);
                $('#serialno').empty();
                $('#model').append(`<option value="">
                                  </option>`);
                $("#engineno").prop("disabled", true);
                $('#engineno').empty();
                $('#engineno').append(`<option value="">
                                  </option>`);
                $("#unitstatus").val('');
            }
        });

        //model
        $("#model").change(function() {
            var url = "{{ url('/FAS/show-serialno') }}" + "/" + $(this).children("option:selected").val();


            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#serialno").prop("disabled", false);
                    $('#serialno').empty();
                    $('#serialno').append(`<option value="">
                                  </option>`);
                    $("#engineno").prop("disabled", true);
                    $('#engineno').empty();
                    $('#engineno').append(`<option value="">
                                  </option>`);
                    $.each(response.showserial, function(key, item) {
                        $('#serialno').append(`<option value="${item.serialnumber}">
                                       ${item.serialnumber}
                                  </option>`);
                    })
                    $("#unitstatus").val('');
                }
            })

        });

        //Serial number
        $("#serialno").change(function() {
            var url = "{{ url('/FAS/show-engineno') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#engineno").prop("disabled", false);
                    $('#engineno').empty();
                    $('#engineno').append(`<option value="">
                                  </option>`);
                    $.each(response.showengineno, function(key, item) {
                        $('#engineno').append(`<option value="${item.id}">
                                       ${item.engineno}
                                  </option>`);
                    })
                    $("#unitstatus").val('');
                }
            })
        });

        //Engine Number
        $("#engineno").change(function() {
            var url = "{{ url('/FAS/show-unitstatus') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#unitstatus").val(response.showunitstatus.unit_status);
                }
            })
        });

        //JCE Number 
        fetchjcenumber()

        function fetchjcenumber() {
            var url = "{{ url('/FAS/jcenumber') }}";
            var arr = []
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    if (response.jcenumber.length < 1) {
                        $("#jceno").val("JCE-BAC-1");
                    } else {
                        $.each(response.jcenumber, function(key, item) {
                            slice = item.jce_number.slice(8, 15)
                            arr.push(slice)
                        })
                        a = Math.max(...arr) + 1;
                        b = "JCE-BAC-" + a;
                        $("#jceno").val(b);
                    }

                }
            })
        }


    });

    //delete SRT Table Code
    function srttblDelete(ctl) {
        $(ctl).parents("tr").remove();

        var arr = [];
        $(".srtcodetr").each(function() {
            arr.push($(this).find("td:nth-child(3)").text()); //put elements into array
        });

        var sum = arr.reduce(function(a, b) {
            return parseFloat(a) + parseFloat(b);
        }, 0);

        total = sum / 10;

        $("#totalsrtcode").val(total);
    }

    //delete Parts Table Code
    function partstblDelete(ctl) {
        $(ctl).parents("tr").remove();

        var arr = [];
        $(".parttr").each(function() {
            arr.push($(this).find("td:nth-child(9)").text()); //put elements into array
        });

        var sum = arr.reduce(function(a, b) {
            return parseFloat(a) + parseFloat(b);
        }, 0);


        $("#totalpartsamt").val(sum.toLocaleString());
    }

    //delete Labor Cost Table Code
    function lcosttblDelete(ctl) {
        $(ctl).parents("tr").remove();

        var arr = [];
        $(".laborcosttr").each(function() {
            arr.push($(this).find("td:nth-child(5)").text()); //put elements into array
        });

        var sum = arr.reduce(function(a, b) {
            return parseFloat(a) + parseFloat(b);
        }, 0);

        $("#totallaborcostamt").val(sum.toLocaleString());
    }
</script>

@endsection