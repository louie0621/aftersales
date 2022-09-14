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
                                                                <input type="text" class="form-control form-select-sm" id="repairstart">
                                                            </div>
                                                            <div class="col-12 col-lg-6">
                                                                <label class="form-label">Repair End Date/time</label>
                                                                <input type="text" class="form-control form-select-sm" id="repairend">
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
                                                                                                <th>Action</th>
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
                                                                                                <th>Action</th>
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
                    $('#jceno').val(response.viewworkorder.workorder_no);
                   
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