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
        <div class="col-lg-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-lg-6">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label">Work Order Date</label>
                                                <input type="date" class="form-control form-select-sm" id="workorderdate" autofocus>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Work Order Number</label>
                                                <input type="text" class="form-control form-select-sm" id="workorderno" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">JCE Number</label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jceno">
                                                    <option selected></option>
                                                    @foreach($jceno as $data)
                                                    <option value="{{ $data->id }}">{{ $data->jce_number }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Job Summary</label>
                                                <textarea class="form-control form-select-sm" rows="3" cols="4" id="jobsummary"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Technician Name</label>
                                                <input type="text" class="form-control form-select-sm" id="techname" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Model</label>
                                                <input type="text" class="form-control form-select-sm" id="model" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Serial Number</label>
                                                <input type="text" class="form-control form-select-sm" id="serialnumber" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Engine Number</label>
                                                <input type="text" class="form-control form-select-sm" id="enginenumber" disabled>
                                            </div>
                                            <div class="col-12" style="padding-bottom: .4em;">
                                                <label class="form-label">Complaint</label>
                                                <textarea class="form-control form-select-sm" rows="2" cols="4" id="complaint" disabled></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label">Work Order Status</label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="workorderstatus">
                                                    <option selected></option>
                                                    @foreach($jcewos as $data)
                                                    <option value="{{ $data->id }}">{{ $data->workorderstatus }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Incident Date</label>
                                                <input type="text" class="form-control form-select-sm" id="incidentdate" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Customer Name</label>
                                                <input type="text" class="form-control form-select-sm" id="customername" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Contact Person</label>
                                                <input type="text" class="form-control form-select-sm" id="contactperson" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Tel No.</label>
                                                <input type="text" class="form-control form-select-sm" id="telno" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Jobsite</label>
                                                <input type="text" class="form-control form-select-sm" id="jobsite" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Dispatch Date</label>
                                                <input type="text" class="form-control form-select-sm" id="dispatchdate" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">SRT</label>
                                                <input type="text" class="form-control form-select-sm" id="srt" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Component</label>
                                                <input type="text" class="form-control form-select-sm" id="component" disabled>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Type of Issue</label>
                                                <input type="text" class="form-control form-select-sm" id="typeofissue" disabled>
                                            </div>
                                        </div>
                                        <!--end row-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-12 col-lg-12">
                                <div class="card shadow-none bg-light border">
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Repair Start Date/time</label>
                                                <input type="datetime-local" class="form-control form-select-sm" id="repairstart">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <label class="form-label">Repair End Date/time</label>
                                                <input type="datetime-local" class="form-control form-select-sm" id="repairend">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Service Report NO.</label>
                                                <input type="text" class="form-control form-select-sm" id="serviceno">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">SMR</label>
                                                <input type="text" class="form-control form-select-sm" id="smr">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Machine Status</label>
                                                <input type="text" class="form-control form-select-sm" id="machinestatus">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Service Model</label>
                                                <input type="text" class="form-control form-select-sm" id="servicemodel">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Arrived Date/Time</label>
                                                <input type="datetime-local" class="form-control form-select-sm" id="arrived">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Plate No.</label>
                                                <input type="text" class="form-control form-select-sm" id="plateno">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Remarks</label>
                                                <input type="text" class="form-control form-select-sm" id="remarks">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Special Instruction</label>
                                                <textarea class="form-control form-select-sm" rows="2" cols="3" id="specialins"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Customer Name</label>
                                                <input type="text" class="form-control form-select-sm" id="customer_name">
                                            </div>

                                            <div class="col col-lg-12 mx-auto">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <ul class="nav nav-tabs nav-primary" role="tablist">
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link active" data-bs-toggle="tab" href="#primaryfirst" role="tab" aria-selected="true">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="tab-title">Service Repair Details</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" id="primarysecondbtn" data-bs-toggle="tab" href="#primarysecond" role="tab" aria-selected="false">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="tab-title">Parts and Consumables</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" data-bs-toggle="tab" id="primarythirdbtn" href="#primarythird" role="tab" aria-selected="false">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="tab-title">Technician Activity</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content py-3">
                                                            <div class="tab-pane fade show active" id="primaryfirst" role="tabpanel">
                                                                <div class="row g-3">
                                                                    <div class="col-12 col-lg-6">
                                                                        <label class="form-label">Defect Code</label>
                                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="defectcode">
                                                                            <option selected></option>
                                                                            @foreach($dc as $data)
                                                                            <option value="{{ $data->id }}">{{ $data->defect_code }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12 col-lg-6">
                                                                        <label class="form-label">Failure Code</label>
                                                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="failurecode">
                                                                            <option selected></option>
                                                                            @foreach($fc as $data)
                                                                            <option value="{{ $data->id }}">{{ $data->failure_code }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Customer Request / Complaint</label>
                                                                        <input type="text" class="form-control form-select-sm " id="customerrequest">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Cause / Findings</label>
                                                                        <input type="text" class="form-control form-select-sm t" id="cause">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Service Repair / Job Done</label>
                                                                        <input type="text" class="form-control form-select-sm " id="servicerepair">
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <label class="form-label">Recommendation</label>
                                                                        <input type="text" class="form-control form-select-sm" id="recommendation">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="primarysecond" role="tabpanel">
                                                                <div class="table-responsive mt-3">
                                                                    <table class="table align-middle table-sm">
                                                                        <thead class="table-secondary">
                                                                            <tr>
                                                                                <th>Parts Code</th>
                                                                                <th>Description</th>
                                                                                <th>Quantity</th>
                                                                                <th>Price</th>
                                                                                <th>Total</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="partbody">
                                                                            <tr>
                                                                                <td class="col-md-3">
                                                                                    <select class="form-select form-select-sm selectpart" id="partscode" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                                                        <option selected></option>
                                                                                        @foreach($parts as $data)
                                                                                        <option value="{{ $data->id }}">{{ $data->part_number }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="partsdes" disabled></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="partsqty"></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="partsprice" disabled></td>
                                                                                <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="partstotal" disabled></td>
                                                                                <td><strong><a href="javascript:;" id="addparts" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td colspan="4" style="text-align: right;"><strong>Total</strong></td>
                                                                                <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="totalpac" disabled></strong></td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="primarythird" role="tabpanel">
                                                                <div class="table-responsive mt-3">
                                                                    <table class="table align-middle table-sm">
                                                                        <thead class="table-secondary">
                                                                            <tr>
                                                                                <th>Activity Date</th>
                                                                                <th>Description</th>
                                                                                <th>Start Time</th>
                                                                                <th>End Time </th>
                                                                                <th>Man Hour</th>
                                                                                <th>Location From</th>
                                                                                <th>Location To</th>
                                                                                <th>Odo Start</th>
                                                                                <th>Odo End</th>
                                                                                <th>KM Used</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="techactivitybody">
                                                                            <tr>
                                                                                <td class="col-md-4"><input type="date" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="activitydate"></td>
                                                                                <td class="col-md-3">
                                                                                    <select class="form-select form-select-sm selectpart" id="tadecription" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                                                        <option selected></option>
                                                                                        @foreach($techactivity as $data)
                                                                                        <option value="{{ $data->id }}">{{ $data->tech_activity }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </td>
                                                                                <td class="col-md-4"><input type="time" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="starttime"></td>
                                                                                <td class="col-md-4"><input type="time" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="endtime"></td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="manhour" disabled></td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="locfrom"></td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="locto"></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="odostart"></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="odoend"></td>
                                                                                <td class="col-md-2"><input type="text" class="form-control form-control-sm text-center" style="min-height: 0rem; padding:0rem; text-align:right;" id="kmused" disabled></td>
                                                                                <td><strong><a href="javascript:;" id="addtechact" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" type="button" id="submitworkorder">Save</button>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end row-->
</main>
<!--end page main-->
@endsection


@section('script')

<script>
    $(document).ready(function() {

        $("#submitworkorder").click(function() {
            var workorderno = $("#workorderno").val().slice(8, 15);

            if ($("#workorderdate").val().length > 0) {
                $("#workorderdate").removeClass("is-invalid");
            } else {
                $("#workorderdate").addClass("is-invalid");
                $("#workorderdate").focus();
            }
            if ($("#jceno").val().length > 0) {
                $("#jceno").removeClass("is-invalid");
            } else {
                $("#jceno").addClass("is-invalid");
                $("#jceno").focus();
            }
            if ($("#workorderno").val().length > 0) {
                $("#workorderno").removeClass("is-invalid");
            } else {
                $("#workorderno").addClass("is-invalid");
                $("#workorderno").focus();
            }
            if ($("#workorderstatus").val().length > 0) {
                $("#workorderstatus").removeClass("is-invalid");
            } else {
                $("#workorderstatus").addClass("is-invalid");
                $("#workorderstatus").focus();
            }
            if ($("#jobsummary").val().length > 0) {
                $("#jobsummary").removeClass("is-invalid");
            } else {
                $("#jobsummary").addClass("is-invalid");
                $("#jobsummary").focus();
            }
            if ($("#repairstart").val().length > 0) {
                $("#repairstart").removeClass("is-invalid");
            } else {
                $("#repairstart").addClass("is-invalid");
                $("#repairstart").focus();
            }
            if ($("#repairend").val().length > 0) {
                $("#repairend").removeClass("is-invalid");
            } else {
                $("#repairend").addClass("is-invalid");
                $("#repairend").focus();
            }
            if ($("#serviceno").val().length > 0) {
                $("#serviceno").removeClass("is-invalid");
            } else {
                $("#serviceno").addClass("is-invalid");
                $("#serviceno").focus();
            }
            if ($("#smr").val().length > 0) {
                $("#smr").removeClass("is-invalid");
            } else {
                $("#smr").addClass("is-invalid");
                $("#smr").focus();
            }
            if ($("#machinestatus").val().length > 0) {
                $("#machinestatus").removeClass("is-invalid");
            } else {
                $("#machinestatus").addClass("is-invalid");
                $("#machinestatus").focus();
            }
            if ($("#servicemodel").val().length > 0) {
                $("#servicemodel").removeClass("is-invalid");
            } else {
                $("#servicemodel").addClass("is-invalid");
                $("#servicemodel").focus();
            }
            if ($("#arrived").val().length > 0) {
                $("#arrived").removeClass("is-invalid");
            } else {
                $("#arrived").addClass("is-invalid");
                $("#arrived").focus();
            }
            if ($("#plateno").val().length > 0) {
                $("#plateno").removeClass("is-invalid");
            } else {
                $("#plateno").addClass("is-invalid");
                $("#plateno").focus();
            }
            if ($("#remarks").val().length > 0) {
                $("#remarks").removeClass("is-invalid");
            } else {
                $("#remarks").addClass("is-invalid");
                $("#remarks").focus();
            }
            if ($("#specialins").val().length > 0) {
                $("#specialins").removeClass("is-invalid");
            } else {
                $("#specialins").addClass("is-invalid");
                $("#specialins").focus();
            }
            if ($("#customer_name").val().length > 0) {
                $("#customer_name").removeClass("is-invalid");
            } else {
                $("#customer_name").addClass("is-invalid");
                $("#customer_name").focus();
            }
            if ($("#defectcode").val().length > 0) {
                $("#defectcode").removeClass("is-invalid");
            } else {
                $("#defectcode").addClass("is-invalid");
                $("#defectcode").focus();
            }
            if ($("#failurecode").val().length > 0) {
                $("#failurecode").removeClass("is-invalid");
            } else {
                $("#failurecode").addClass("is-invalid");
                $("#failurecode").focus();
            }
            if ($("#customerrequest").val().length > 0) {
                $("#customerrequest").removeClass("is-invalid");
            } else {
                $("#customerrequest").addClass("is-invalid");
                $("#customerrequest").focus();
            }
            if ($("#cause").val().length > 0) {
                $("#cause").removeClass("is-invalid");
            } else {
                $("#cause").addClass("is-invalid");
                $("#cause").focus();
            }
            if ($("#servicerepair").val().length > 0) {
                $("#servicerepair").removeClass("is-invalid");
            } else {
                $("#servicerepair").addClass("is-invalid");
                $("#servicerepair").focus();
            }
            if ($("#recommendation").val().length > 0) {
                $("#recommendation").removeClass("is-invalid");
            } else {
                $("#recommendation").addClass("is-invalid");
                $("#recommendation").focus();
            }
            if ($("#totalpac").val().length > 0) {
                $("#partscode").removeClass("is-invalid");
                $("#partsqty").removeClass("is-invalid");
            } else {
                $("#partscode").addClass("is-invalid");
                $("#partscode").focus();
                $("#partsqty").addClass("is-invalid");
                $("#partsqty").focus();
            }
            if ($(".tractivityact").find("td:nth-child(1)").length > 0) {
                $("#activitydate").removeClass("is-invalid");
                $("#tadecription").removeClass("is-invalid");
                $("#starttime").removeClass("is-invalid");
                $("#endtime").removeClass("is-invalid");
                $("#locfrom").removeClass("is-invalid");
                $("#locto").removeClass("is-invalid");
                $("#odostart").removeClass("is-invalid");
                $("#odoend").removeClass("is-invalid");
            } else {
                
                $("#activitydate").addClass("is-invalid");
                $("#tadecription").addClass("is-invalid");
                $("#starttime").addClass("is-invalid");
                $("#endtime").addClass("is-invalid");
                $("#locfrom").addClass("is-invalid");
                $("#locto").addClass("is-invalid");
                $("#odostart").addClass("is-invalid");
                $("#odoend").addClass("is-invalid");

                $("#activitydate").focus();
                $("#tadecription").focus();
                $("#starttime").focus();
                $("#endtime").focus();
                $("#locfrom").focus();
                $("#locto").focus();
                $("#odostart").focus();
                $("#odoend").focus();

            }

            if ($("#workorderdate").val().length > 0 && $("#jceno").val().length > 0 && $("#workorderno").val().length > 0 && $("#workorderstatus").val().length > 0 && $("#jobsummary").val().length > 0 && $("#repairstart").val().length > 0 && $("#repairend").val().length > 0 && $("#serviceno").val().length > 0 && $("#smr").val().length > 0 && $("#machinestatus").val().length > 0 && $("#servicemodel").val().length > 0 && $("#arrived").val().length > 0 && $("#plateno").val().length > 0 && $("#remarks").val().length > 0 && $("#specialins").val().length > 0 && $("#customer_name").val().length > 0 && $("#defectcode").val().length > 0 && $("#failurecode").val().length > 0 && $("#customerrequest").val().length > 0 && $("#cause").val().length > 0 && $("#servicerepair").val().length > 0 && $("#recommendation").val().length > 0 && $("#totalpac").val().length > 0 && $(".tractivityact").find("td:nth-child(1)").length > 0) {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ url('/FAS/submit-work-order') }}",
                    method: 'POST',
                    data: {
                        workorder_date: $("#workorderdate").val(),
                        jce_no: $("#jceno option:selected").val(),
                        workorder_no: $("#workorderno").val(),
                        workorder_status: $("#workorderstatus option:selected").text(),
                        job_summary: $("#jobsummary").val(),
                        repairstart: $("#repairstart").val(),
                        repairend: $("#repairend").val(),
                        service_report: $("#serviceno").val(),
                        smr: $("#smr").val(),
                        machine_status: $("#machinestatus").val(),
                        servicemodel: $("#servicemodel").val(),
                        arrived_datetime: $("#arrived").val(),
                        plateno: $("#plateno").val(),
                        remarks: $("#remarks").val(),
                        special_instruction: $("#specialins").val(),
                        customer_name: $("#customer_name").val(),
                        defect_code: $("#defectcode option:selected").val(),
                        failure_code: $("#failurecode option:selected").val(),
                        customer_request: $("#customerrequest").val(),
                        cause: $("#cause").val(),
                        service_repair: $("#servicerepair").val(),
                        recommendation: $("#recommendation").val(),
                        pac_no: workorderno,
                        pac_total: $("#totalpac").val(),
                        techact_no: workorderno,
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });

                var tdpartsnumber = [];
                var tdpartsquantity = [];
                var tdpartstotal = [];
                $(".tdpartsnumbers").each(function() {
                    tdpartsnumber.push($(this).text());
                });
                $(".tdpartsquantitys").each(function() {
                    tdpartsquantity.push($(this).text());
                });
                $(".tdpartstotals").each(function() {
                    tdpartstotal.push($(this).text());
                });

                //Add parts and consumables entry
                $.ajax({
                    method: "POST",
                    url: "{{ url('/FAS/storepac') }}",
                    data: {
                        pac_no: workorderno,
                        part_id: JSON.stringify(tdpartsnumber),
                        quantity: JSON.stringify(tdpartsquantity),
                        total: JSON.stringify(tdpartstotal),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(response) {}
                });

                //Add Technician Activity

                var tdtadate = [];
                var tdtadescription = [];
                var tdtastart = [];
                var tdtaend = [];
                var tdtamanhour = [];
                var tdtalocfrom = [];
                var tdtalocto = [];
                var tdtaodostart = [];
                var tdtaodoend = [];
                var tdtakmused = [];

                $(".tdtadate").each(function() {
                    tdtadate.push($(this).text());
                });
                $(".tdtadescription").each(function() {
                    tdtadescription.push($(this).text());
                });
                $(".tdtastart").each(function() {
                    tdtastart.push($(this).text());
                });
                $(".tdtaend").each(function() {
                    tdtaend.push($(this).text());
                });
                $(".tdtamanhour").each(function() {
                    tdtamanhour.push($(this).text());
                });
                $(".tdtalocfrom").each(function() {
                    tdtalocfrom.push($(this).text());
                });
                $(".tdtalocto").each(function() {
                    tdtalocto.push($(this).text());
                });
                $(".tdtaodostart").each(function() {
                    tdtaodostart.push($(this).text());
                });
                $(".tdtaodoend").each(function() {
                    tdtaodoend.push($(this).text());
                });
                $(".tdtakmused").each(function() {
                    tdtakmused.push($(this).text());
                });

                $.ajax({
                    method: "POST",
                    url: "{{ url('/FAS/storeta') }}",
                    data: {
                        techact_no: workorderno,
                        activity_date: JSON.stringify(tdtadate),
                        description: JSON.stringify(tdtadescription),
                        start_time: JSON.stringify(tdtastart),
                        end_time: JSON.stringify(tdtaend),
                        man_hour: JSON.stringify(tdtamanhour),
                        location_from: JSON.stringify(tdtalocfrom),
                        location_to: JSON.stringify(tdtalocto),
                        odo_start: JSON.stringify(tdtaodostart),
                        odo_end: JSON.stringify(tdtaodoend),
                        km_used: JSON.stringify(tdtakmused),
                        _token: '{!! csrf_token() !!}'
                    },
                    dataType: "json",
                    success: function(response) {
                        $("#workorderdate").focus();
                        window.location.reload();
                    }
                });
            }
        });

        //Add Technician Activity
        function tConv24(time24) {
            var ts = time24;
            var H = +ts.substr(0, 2);
            var h = (H % 12) || 12;
            h = (h < 10) ? ("0" + h) : h; // leading 0 at the left for 1 digit hours
            var ampm = H < 12 ? " AM" : " PM";
            ts = h + ts.substr(2, 3) + ampm;
            return ts;
        };

        $("#addtechact").click(function() {

            var activitydate = $("#activitydate").val();
            var tadecription = $("#tadecription option:selected").text();
            var starttime = $("#starttime").val();
            var endtime = $("#endtime").val();
            var manhour = $("#manhour").val();
            var locfrom = $("#locfrom").val();
            var locto = $("#locto").val();
            var odostart = $("#odostart").val();
            var odoend = $("#odoend").val();
            var kmused = $("#kmused").val();

            if ($("#activitydate").val().length > 0) {
                $("#activitydate").removeClass("is-invalid");
            } else {
                $("#activitydate").addClass("is-invalid");
            }
            if ($("#tadecription").val().length > 0) {
                $("#tadecription").removeClass("is-invalid");
            } else {
                $("#tadecription").addClass("is-invalid");
            }
            if ($("#starttime").val().length > 0) {
                $("#starttime").removeClass("is-invalid");
            } else {
                $("#starttime").addClass("is-invalid");
            }
            if ($("#endtime").val().length > 0) {
                $("#endtime").removeClass("is-invalid");
            } else {
                $("#endtime").addClass("is-invalid");
            }
            if ($("#manhour").val().length > 0) {
                $("#manhour").removeClass("is-invalid");
            } else {
                $("#manhour").addClass("is-invalid");
            }
            if ($("#locfrom").val().length > 0) {
                $("#locfrom").removeClass("is-invalid");
            } else {
                $("#locfrom").addClass("is-invalid");
            }
            if ($("#locto").val().length > 0) {
                $("#locto").removeClass("is-invalid");
            } else {
                $("#locto").addClass("is-invalid");
            }
            if ($("#odostart").val().length > 0) {
                $("#odostart").removeClass("is-invalid");
            } else {
                $("#odostart").addClass("is-invalid");
            }
            if ($("#odoend").val().length > 0) {
                $("#odoend").removeClass("is-invalid");
            } else {
                $("#odoend").addClass("is-invalid");
            }
            if ($("#kmused").val().length > 0) {
                $("#kmused").removeClass("is-invalid");
            } else {
                $("#kmused").addClass("is-invalid");
            }

            if ($("#activitydate").val().length > 0 && $("#tadecription").val().length > 0 && $("#starttime").val().length > 0 && $("#endtime").val().length > 0 && $("#manhour").val().length > 0 && $("#locfrom").val().length > 0 && $("#locto").val().length > 0 && $("#odostart").val().length > 0 && $("#odoend").val().length > 0 && $("#kmused").val().length > 0) {

                var row = "<tr class='tractivityact'><td class='clss tdtadate'>" + activitydate +
                    "</td><td class='clss tdtadescription'>" + tadecription +
                    "</td><td class='clss tdtastart'>" + tConv24(starttime) +
                    "</td><td class='clss tdtaend'>" + tConv24(endtime) +
                    "</td><td class='clss tdtamanhour'>" + manhour +
                    "</td><td class='clss tdtalocfrom'>" + locfrom +
                    "</td><td class='clss tdtalocto'>" + locto +
                    "</td><td class='clss tdtaodostart text-center'>" + odostart +
                    "</td><td class='clss tdtaodoend text-center'>" + odoend +
                    "</td><td class='clss tdtakmused text-center'>" + kmused +
                    "</td><td><a href='javascript:;' onclick='tatblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

                $("#techactivitybody").append(row);

                $("#activitydate").val('');
                $("#starttime").val('');
                $("#endtime").val('');
                $("#manhour").val('');
                $("#locfrom").val('');
                $("#locto").val('');
                $("#odostart").val('');
                $("#odoend").val('');
                $("#kmused").val('');
                $("#tadecription").find('option:eq(0)').prop('selected', true);
            }

        });

        //odo start
        $("#odostart").keyup(function(e) {
            if ($("#odoend").val().length > 0 && $("#odostart").val().length > 0) {
                var a = $("#odoend").val();
                var b = $("#odostart").val();
                var totalodo = parseFloat(a) - parseFloat(b);
                $("#kmused").val(totalodo)
            } else {
                $("#kmused").val('0')
            }
        });
        //odo end
        $("#odoend").keyup(function(e) {
            if ($("#odoend").val().length > 0 && $("#odostart").val().length > 0) {
                var a = $("#odoend").val();
                var b = $("#odostart").val();
                var totalodo = parseFloat(a) - parseFloat(b);
                $("#kmused").val(totalodo)
            } else {
                $("#kmused").val('0')
            }
        });

        // Calculate man hour
        function diff(start, end) {
            start = start.split(":");
            end = end.split(":");
            var startDate = new Date(0, 0, 0, start[0], start[1], 0);
            var endDate = new Date(0, 0, 0, end[0], end[1], 0);
            var diff = endDate.getTime() - startDate.getTime();
            var hours = Math.floor(diff / 1000 / 60 / 60);
            diff -= hours * (1000 * 60 * 60);
            var minutes = Math.floor(diff / 1000 / 60);
            diff -= minutes * (1000 * 60);
            var seconds = Math.floor(diff / 1000);

            // If using time pickers with 24 hours format, add the below line get exact hours
            if (hours < 0)
                hours = hours + 24;

            return (hours <= 9 ? "0" : "") + hours + ":" + (minutes <= 9 ? "0" : "") + minutes;
        }

        //Man Hour
        $("#endtime").mouseleave(function(e) {
            if ($("#endtime").val().length > 0 && $("#starttime").val().length > 0) {
                var totalhour = diff($("#starttime").val(), $("#endtime").val());
                $("#manhour").val(totalhour)
            } else {
                $("#manhour").val('00:00')
            }
        });
        $("#starttime").mouseleave(function(e) {
            if ($("#endtime").val().length > 0 && $("#starttime").val().length > 0) {
                var totalhour = diff($("#starttime").val(), $("#endtime").val());
                $("#manhour").val(totalhour)
            } else {
                $("#manhour").val('00:00')
            }
        });
        $("#locfrom").keyup(function(e) {
            if ($("#endtime").val().length > 0 && $("#starttime").val().length > 0) {
                var totalhour = diff($("#starttime").val(), $("#endtime").val());
                $("#manhour").val(totalhour)
            } else {
                $("#manhour").val('00:00')
            }
        });
        $("#endtime").keyup(function(e) {
            var totalhour = diff($("#starttime").val(), $("#endtime").val());
            $("#manhour").val(totalhour)
        });
        $("#starttime").keyup(function(e) {
            var totalhour = diff($("#starttime").val(), $("#endtime").val());
            $("#manhour").val(totalhour)
        });

        //number only
        $(".numberonly").keypress(function(e) {
            //if the letter is not digit then display error and don't type anything
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                return false;
            }
        });

        //Add Part Code
        $("#addparts").click(function() {
            var partno = $("#partscode option:selected").text();
            var partid = $("#partscode option:selected").val();
            var partdes = $("#partsdes").val();
            var partqty = $("#partsqty").val();
            var partprice = $("#partsprice").val();
            var parttotal = $("#partstotal").val();

            if ($("#partscode").val().length > 0) {
                $("#partscode").removeClass("is-invalid");
            } else {
                $("#partscode").addClass("is-invalid");
            }
            if ($("#partsqty").val().length > 0) {
                $("#partsqty").removeClass("is-invalid");
            } else {
                $("#partsqty").addClass("is-invalid");
            }
            if ($("#partsqty").val().length > 0 && $("#partscode").val().length > 0) {

                var row = "<tr class='parttr'><td class='tdpartsnumbers' hidden>" + partid + "</td><td class='clss'>" + partno +
                    "</td><td class='clss '>" + partdes +
                    "</td><td class='clss text-center tdpartsquantitys'>" + partqty +
                    "</td><td class='clss' style='text-align: right;'>" + partprice +
                    "</td><td class='clss tdpartstotals' style='text-align: right;'>" + parttotal +
                    "</td><td><a href='javascript:;' onclick='partstblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

                $("#partbody").append(row);

                var arr = [];
                $(".parttr").each(function() {
                    arr.push($(this).find("td:nth-child(6)").text()); //put elements into array
                });

                var sum = arr.reduce(function(a, b) {
                    return parseFloat(a) + parseFloat(b);
                }, 0);
                $("#totalpac").val(sum.toLocaleString());

                $("#partsdes").val('');
                $("#partsqty").val('');
                $("#partsprice").val('');
                $("#partstotal").val('');
                $("#partscode").find('option:eq(0)').prop('selected', true);
            }

        });

        //Part Code Quantity
        $("#partsqty").keyup(function(e) {
            var price = $("#partsprice").val();
            var qty = $(this).val();
            var subtotal = parseFloat(price) * parseFloat(qty);
            $("#partstotal").val(subtotal);

        });
        //Select Parts Code 
        $("#partscode").change(function() {
            var url = "{{ url('/FAS/workorderpartscode') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#partsdes").val(response.parts.description);
                        $("#partsprice").val(response.parts.srp);

                    }
                })
            } else {
                $("#partsdes").val('');
                $("#partsprice").val('');
                $("#partsqty").val('');
            }

        });

        //Work order number
        fetchworkorderno()

        function fetchworkorderno() {
            var url = "{{ url('/FAS/workordernumbers') }}";
            var arr = []
            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    if (response.wos.length > 0) {
                        $.each(response.wos, function(key, item) {
                            slice = item.workorder_no.slice(8, 15)
                            arr.push(slice)
                        })
                        a = Math.max(...arr) + 1;
                        b = "SWO-BAC-" + a;
                        $("#workorderno").val(b)
                    } else {
                        $("#workorderno").val("SWO-BAC-1")
                    }

                }
            })
        }

        //JCE Number
        $("#jceno").change(function() {
            var url = "{{ url('/FAS/workorderjceno') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#incidentdate").val(response.jceno.incidentdatetime);
                        $("#customername").val(response.viewcustomer.customername);
                        $("#contactperson").val(response.viewcustomer.contact);
                        $("#telno").val(response.viewcustomer.phone);
                        $("#dispatchdate").val(response.jceno.dispatch_date);
                        $("#srt").val(response.jceno.srt_amt);
                        $("#component").val(response.jceno.component);
                        $("#typeofissue").val(response.jceno.typeofissue);
                        $("#jobsite").val(response.jceno.job_site);
                        $("#model").val(response.viewequipment.vehiclemodel);
                        $("#serialnumber").val(response.viewequipment.serialnumber);
                        $("#enginenumber").val(response.viewequipment.engineno);
                        $("#complaint").val(response.jceno.complaint_request);

                        var tech = []
                        $.each(response.viewtech, function(key, item) {
                            tech.push(item.name);
                        });
                        $('#techname').val(tech);
                    }
                })
            } else {

            }

        });

    });

    //delete Parts Code Table Code
    function partstblDelete(ctl) {
        $(ctl).parents("tr").remove();

        var arr = [];
        $(".parttr").each(function() {
            arr.push($(this).find("td:nth-child(6)").text()); //put elements into array
        });

        var sum = arr.reduce(function(a, b) {
            return parseFloat(a) + parseFloat(b);
        }, 0);


        $("#totalpac").val(sum.toLocaleString());
    }

    //delete Parts Code Table Code
    function tatblDelete(ctl) {
        $(ctl).parents("tr").remove();
    }
</script>

@endsection