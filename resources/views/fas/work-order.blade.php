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
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Work Order Master List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table class="table align-middle" id="mytbl">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Work Order Date</th>
                            <th>Work Order No.</th>
                            <th>JCE No.</th>
                            <th>Work Order Status</th>
                            <th>Machine Status</th>
                            <th>Service Model</th>
                            <th>Plate No.</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($woslist as $data)
                        <tr>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $loop->iteration }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->workorder_date }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->workorder_no }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->jce_no }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->workorder_status }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->machine_status }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->servicemodel }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->plateno }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- view modal -->

    <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Work Order Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                                                                <input type="text" class="form-control form-select-sm" id="workorderdate" disabled>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Work Order Number</label>
                                                                <input type="text" class="form-control form-select-sm" id="workorderno" disabled>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">JCE Number</label>
                                                                <input type="text" class="form-control form-select-sm" id="jceno" disabled>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Job Summary</label>
                                                                <textarea class="form-control form-select-sm" rows="3" cols="4" id="jobsummary" disabled></textarea>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Technician Name</label>
                                                                <div class="card radius-10">
                                                                    <div class="card-body" id="techlist">

                                                                    </div>
                                                                </div>
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
                                                                <input type="text" class="form-control form-select-sm" id="workorderstatus" disabled>
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
                                                                <input type="text" class="form-control form-select-sm" id="repairstart" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label class="form-label">Repair End Date/time</label>
                                                                <input type="text" class="form-control form-select-sm" id="repairend" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Service Report NO.</label>
                                                                <input type="text" class="form-control form-select-sm" id="serviceno" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">SMR</label>
                                                                <input type="text" class="form-control form-select-sm" id="smr" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Machine Status</label>
                                                                <input type="text" class="form-control form-select-sm" id="machinestatus" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Service Model</label>
                                                                <input type="text" class="form-control form-select-sm" id="servicemodel" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Arrived Date/Time</label>
                                                                <input type="datetime-local" class="form-control form-select-sm" id="arrived" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Plate No.</label>
                                                                <input type="text" class="form-control form-select-sm" id="plateno" disabled>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Remarks</label>
                                                                <input type="text" class="form-control form-select-sm" id="remarks" disabled>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Special Instruction</label>
                                                                <textarea class="form-control form-select-sm" rows="2" cols="3" id="specialins" disabled></textarea>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label">Customer Name</label>
                                                                <input type="text" class="form-control form-select-sm" id="customer_name" disabled>
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
                                                                                        <input type="text" class="form-control form-select-sm t" id="defectcode" disabled>
                                                                                    </div>
                                                                                    <div class="col-12 col-lg-6">
                                                                                        <label class="form-label">Failure Code</label>
                                                                                        <input type="text" class="form-control form-select-sm t" id="failurecode" disabled>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <label class="form-label">Customer Request / Complaint</label>
                                                                                        <input type="text" class="form-control form-select-sm " id="customerrequest" disabled>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <label class="form-label">Cause / Findings</label>
                                                                                        <input type="text" class="form-control form-select-sm t" id="cause" disabled>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <label class="form-label">Service Repair / Job Done</label>
                                                                                        <input type="text" class="form-control form-select-sm " id="servicerepair" disabled>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <label class="form-label">Recommendation</label>
                                                                                        <input type="text" class="form-control form-select-sm" id="recommendation" disabled>
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
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody id="partbody">
                                                                                        </tbody>
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
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody id="techactivitybody">
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
                                            </div>
                                            <!--end row-->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</main>
<!--end page main-->
@endsection


@section('script')

<script>
    $(document).ready(function() {

        //view modal 
        $(document).on("click", ".view", function(e) {
            var url = "{{ url('FAS/viewworkorderdetails') }}" + "/" + $(e.currentTarget).data("viewid");

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    //console.log(response.viewequipment);
                    $('#workorderdate').val(response.viewworkorder.workorder_date);
                    $('#workorderno').val(response.viewworkorder.workorder_no);
                    $('#workorderstatus').val(response.viewworkorder.workorder_status);
                    $('#jceno').val(response.viewjce.jce_number);
                    $('#model').val(response.viewequipment.vehiclemodel);
                    $('#serialnumber').val(response.viewequipment.serialnumber);
                    $('#enginenumber').val(response.viewequipment.engineno);
                    $('#incidentdate').val(response.viewjce.incidentdatetime);
                    $('#customername').val(response.viewcustomer.customername);
                    $('#contactperson').val(response.viewcustomer.contact);
                    $('#telno').val(response.viewjce.contact_no);
                    $('#jobsite').val(response.viewjce.job_site);
                    $('#dispatchdate').val(response.viewjce.dispatch_date);
                    $('#srt').val(response.viewjce.srt_amt);
                    $('#component').val(response.viewjce.component);
                    $('#typeofissue').val(response.viewjce.typeofissue);
                    $('#jobsummary').val(response.viewworkorder.job_summary);
                    $('#repairstart').val(response.viewworkorder.repairstart);
                    $('#repairend').val(response.viewworkorder.repairend);
                    $('#serviceno').val(response.viewworkorder.service_report);
                    $('#smr').val(response.viewworkorder.smr);
                    $('#machinestatus').val(response.viewworkorder.machine_status);
                    $('#servicemodel').val(response.viewworkorder.servicemodel);
                    $('#arrived').val(response.viewworkorder.arrived_datetime);
                    $('#plateno').val(response.viewworkorder.plateno);
                    $('#remarks').val(response.viewworkorder.remarks);
                    $('#remarks').val(response.viewworkorder.special_instruction);
                    $('#customer_name').val(response.viewworkorder.customer_name);
                    $('#defectcode').val(response.viewworkorder.defect_code);
                    $('#failurecode').val(response.viewworkorder.failure_code);
                    $('#customerrequest').val(response.viewworkorder.customer_request);
                    $('#cause').val(response.viewworkorder.cause);
                    $('#servicerepair').val(response.viewworkorder.service_repair);
                    $('#recommendation').val(response.viewworkorder.recommendation);
                    $('#specialins').val(response.viewworkorder.special_instruction);

                    $.each(response.viewtech, function(key, item) {
                        var row = "<div class= 'chip' style='padding:0 5px; margin-right:.5rem; margin-bottom: .5rem;'>"+item.name+"</div>";

                        $("#techlist").append(row);
                    });

                    $.each(response.viewpac, function(key, item) {
                        var row = "<tr class='viewtbl' ><td class='col-md-2'>" + item.part_number +
                            "</td><td class='col-md-7'>" + item.description +
                            "</td><td class='text-center'>" + item.quantity +
                            "</td><td class='text-center'>" + item.srp +
                            "</td><td class='text-center'>" + item.total +
                            "</tr>";

                        $("#partbody").append(row);
                    });

                    $.each(response.viewtechact, function(key, item) {
                        var row = "<tr class='viewtbl' ><td class='col-md-2'>" + item.activity_date +
                            "</td><td class='col-md-7'>" + item.description +
                            "</td><td class='text-center'>" + item.start_time +
                            "</td><td class='text-center'>" + item.end_time +
                            "</td><td class='text-center'>" + item.man_hour +
                            "</td><td class='text-center'>" + item.location_from +
                            "</td><td class='text-center'>" + item.location_to +
                            "</td><td class='text-center'>" + item.odo_start +
                            "</td><td class='text-center'>" + item.odo_end +
                            "</td><td class='text-center'>" + item.km_used +
                            "</tr>";

                        $("#techactivitybody").append(row);
                    });

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
            $("#viewModal").modal('show');
        })

        //close btn
        $(document).on("click", ".closemodal", function(e) {
            $("#viewModal").modal('hide');
        })

        //search 
        $('#mytbl').DataTable({
            pagingType: 'full_numbers',
        });

    });
</script>

@endsection