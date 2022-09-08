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
                                                <input type="date" class="form-control form-select-sm" id="workorderdate">
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
                                                <textarea class="form-control form-select-sm" rows="5" cols="4" id="jobsummary"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Technician Name</label>
                                                <input type="text" class="form-control form-select-sm" id="techname">
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
                                                <textarea class="form-control form-select-sm" rows="4" cols="4" id="complaint" disabled></textarea>
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
                                                <input type="text" class="form-control form-select-sm" id="repairend">
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <label class="form-label">Service Model</label>
                                                <input type="text" class="form-control form-select-sm" id="serviceno">
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
                                                <input type="text" class="form-control form-select-sm" id="customername">
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
                                                                <a class="nav-link" data-bs-toggle="tab" href="#primarysecond" role="tab" aria-selected="false">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="tab-title">Parts and Consumables</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="nav-item" role="presentation">
                                                                <a class="nav-link" data-bs-toggle="tab" href="#primarythird" role="tab" aria-selected="false">
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
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="partsqty"></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="partsprice" disabled></td>
                                                                                <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="partstotal" disabled></td>
                                                                                <td><strong><a href="javascript:;" id="addparts" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                                                            </tr>
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
                                                                        <tbody id="partbody">
                                                                            <tr>
                                                                                <td class="col-md-4"><input type="date" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="activitydate"></td>
                                                                                <td class="col-md-3">
                                                                                    <select class="form-select form-select-sm selectpart" id="decription" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                                                        <option value=""></option>
                                                                                    </select>
                                                                                </td>
                                                                                <td class="col-md-4"><input type="time" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="starttime"></td>
                                                                                <td class="col-md-4"><input type="time" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="endtime"></td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="manhour"></td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="locfrom"></td>
                                                                                <td class="col-md-4"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="locto"></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="odostart"></td>
                                                                                <td class="col-md-1"><input type="text" class="form-control form-control-sm numberonly" style="min-height: 0rem; padding:0rem; text-align:center;" id="odoend"></td>
                                                                                <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="kmused" disabled></td>
                                                                                <td><strong><a href="javascript:;" id="addparts" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
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
                            </div>
                            <!--end row-->
                            <div class="col-12">
                                <button class="btn btn-primary" type="button" id="submitworkorder">Save</button>
                            </div>
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

        // $('#submitworkorder').click(function(e) {
        //     e.preventDefault();
        //     var url = "{{ url('FAS/add-work-order') }}";

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         url: url,
        //         method: 'POST',
        //         data: {
        //             workorderdate: $('#workorderdate').val(),
        //             jce_no: $('#jce_no').val(),
        //             _token: '{!! csrf_token() !!}'
        //         },
        //         success: function(result) {
        //             window.location.reload();
        //         },
        //         error: function(data, textStatus, errorThrown) {
        //             console.log(data);

        //         }
        //     });
        // })


        //Parts Code 
        $("#partscode").change(function() {
            var url = "{{ url('/FAS/workorderpartscode') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#partsdes").val(response.parts.description);
                        $("#partsprice").val(response.parts.price);

                    }
                })
            } else {
                $("#partsdes").val('');
                $("#partsprice").val('');
                $("#partsqty").val('');
            }

        });

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
</script>

@endsection