@extends('fas.layout.mainlayout')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> Job Cost Estimate Master List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3 ">
                <table class="table align-middle " id="mytbl">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>JCE Number</th>
                            <th>Customer Name</th>
                            <th>Contact Person</th>
                            <th>Tel No.</th>
                            <th>PO No.</th>
                            <th>Incident datetime</th>
                            <th>Validity Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jcedata as $data)
                        <tr>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $loop->iteration }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->jce_number }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->customername }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->contact }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->contact_no }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->po_number }}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->incidentdatetime}}</td>
                            <td class="view" data-viewid="{{ $data->id }}" style="cursor: default;">{{ $data->validity_date }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- view model -->
            <div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Job Cost Estimating Details</h5>
<<<<<<< HEAD
                            <a class="btn btn-primary" href="{{ url('/FAS/printjce')}}"><i class="bi bi-printer-fill"></i> Print JCE</a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
=======
                            <a class="btn btn-sm btn-primary px-5" href="{{ url('FAS/printjce') }}" target="_blank" ><i class="bi bi-printer"></i> Print JCE</a>
                            <button type="button" style="margin: 0rem;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
>>>>>>> 03cdc1e25e20339facc62ce3f131141d994b93bf
                        </div>
                        <div class="modal-body">
                            <!--end breadcrumb-->
                            <div class="row">
                                <div class="col-lg-12 mx-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-12 col-lg-8">
                                                    <div class="card shadow-none bg-light border">
                                                        <div class="card-body">
                                                            <div class="row g-3">
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">JCE Number</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjcenumber" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">Incident Datetime</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewincidentdatetime" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label class="form-label">Customer Name</label>
                                                                    <input type="text" class="form-control form-select-sm text-break" id="viewcustomername">
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label class="form-label">Contact Person</label>
                                                                    <input type="text" class="form-control form-select-sm text-wrap" id="viewcontactperson" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label class="form-label">TelNo.</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewtelno" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Vehicle Type</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewvehicletype" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Model</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewmodel" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Serial Number</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewserialno" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Engine Number</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewengineno" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Complaint/Request</label>
                                                                    <textarea class="form-control form-select-sm" rows="3" cols="4" id="viewcomplaint" disabled></textarea>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Component</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewcomponent" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Type of Issue</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewtypeofissue" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label class="form-label">Promised Date/Time</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewpromiseddate" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label class="form-label">Resolved</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewresolved" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-4">
                                                                    <label class="form-label">Payment Terms</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewpaymentterms" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Techician Name</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewtechnicianname" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">JCE Type</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjcetype" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">JCE Type Parts</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjcetypeparts" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-6">
                                                                    <label class="form-label">Charge To</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjcechargeto" disabled>
                                                                </div>
                                                                <div class="col-12 col-lg-6" style="padding-bottom: 2.4em;">
                                                                    <label class="form-label">Charge To Parts</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewchargetoparts" disabled>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="card shadow-none bg-light border">
                                                        <div class="card-body">
                                                            <div class="row g-3">
                                                                <div class="col-12">
                                                                    <label class="form-label">Dispatch Date</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewdispatchdate" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Work Area</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewworkarea" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Labor Amount</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewlaboramount" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">SRT</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewsrt" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Parts Amount</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewpartsamount" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Job Type</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjobtype" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Dealer</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewdealer" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Job Site</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewjobsite" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Unit Status</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewunitstatus" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">SalesType</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewsalestype" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Mode of Payment</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewmodeofpayment" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">PO Number</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewpono" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Engine Hours</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewenginehours" disabled>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label class="form-label">Travel Days</label>
                                                                    <input type="text" class="form-control form-select-sm" id="viewtraveldays" disabled>
                                                                </div>
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-12">
                                                <div class="card shadow-none bg-light border">
                                                    <div class="card-body">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <label class="form-label"><strong>SRT Code</strong></label>
                                                                <div class="table-responsive mt-3 ">
                                                                    <table class="table align-middle table-sm">
                                                                        <thead class="table-secondary">
                                                                            <tr>
                                                                                <th>SRT</th>
                                                                                <th>Description</th>
                                                                                <th class="text-center">Work Unit</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="viewsrtcodetbl">

                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td colspan="2" style="text-align: right;"><strong>SRT (Total Hours)</strong></td>
                                                                                <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="viewtotalsrtcode" disabled></strong></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label "><strong>Labor Cost</strong></label>
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
                                                                        <tbody id="laborcostbodytbl">
                                                                        </tbody>
                                                                        <tfoot>
                                                                            <tr>
                                                                                <td colspan="3" style="text-align: right;"><strong>JCE Amount</strong></td>
                                                                                <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="viewtotallaborcostamt" disabled></strong></td>
                                                                                <td></td>
                                                                            </tr>
                                                                        </tfoot>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <label class="form-label"><strong>Parts</strong></label>
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
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody id="partbodytbl">

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 col-lg-8">
                                                                <label class="form-label">Remarks</label>
                                                                <textarea class="form-control form-select-sm" rows="3" cols="4" id="viewremarks"></textarea>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Total Parts Amount</label>
                                                                <input type="text" class="form-control form-select-sm" id="viewtotalpartsamt" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-8">
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Freight Cost</label>
                                                                <input type="text" class="form-control form-select-sm" id="viewfreightcost" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-8">
                                                                <label class="form-label">Validity Date</label>
                                                                <input type="text" class="form-control form-select-sm" id="viewvaliditydate" disabled>
                                                            </div>
                                                            <div class="col-12 col-lg-4">
                                                                <label class="form-label">Amount Due</label>
                                                                <input type="text" class="form-control form-select-sm" id="viewamountdue" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end row-->
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
            var url = "{{ url('FAS/viewjcedetails') }}" + "/" + $(e.currentTarget).data("viewid");

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    //console.log(response.viewequipment);
                    $('#viewjcenumber').val(response.viewjce.jce_number);
                    $('#viewincidentdatetime').val(response.viewjce.incidentdatetime);
                    $('#viewcustomername').val(response.viewcustomer.customername);
                    $('#viewcontactperson').val(response.viewcustomer.contact);
                    $('#viewtelno').val(response.viewjce.contact_no);
                    $('#viewvehicletype').val(response.viewequipment.type);
                    $('#viewmodel').val(response.viewequipment.vehiclemodel);
                    $('#viewserialno').val(response.viewequipment.serialnumber);
                    $('#viewengineno').val(response.viewequipment.engineno);
                    $('#viewcomplaint').val(response.viewjce.complaint_request);
                    $('#viewcomponent').val(response.viewjce.component);
                    $('#viewtypeofissue').val(response.viewjce.typeofissue);
                    $('#viewpromiseddate').val(response.viewjce.promised_datetime);
                    $('#viewresolved').val(response.viewjce.resolved);
                    $('#viewpaymentterms').val(response.viewjce.paymentterms);
                    $('#viewjcetype').val(response.viewjce.jce_type);
                    $('#viewjcetypeparts').val(response.viewjce.jcetypeparts);
                    $('#viewjcechargeto').val(response.viewjce.charge_to);
                    $('#viewchargetoparts').val(response.viewjce.chargetoparts);
                    $('#viewdispatchdate').val(response.viewjce.dispatch_date);
                    $('#viewworkarea').val(response.viewjce.work_area);
                    $('#viewlaboramount').val(response.viewjce.labor_amt);
                    $('#viewsrt').val(response.viewjce.srt_amt);
                    $('#viewpartsamount').val(response.viewjce.parts_amt);
                    $('#viewjobtype').val(response.viewjce.job_type);
                    $('#viewdealer').val(response.viewjce.dealer);
                    $('#viewjobsite').val(response.viewjce.job_site);
                    $('#viewsalestype').val(response.viewjce.salestype);
                    $('#viewmodeofpayment').val(response.viewjce.modeofpayment);
                    $('#viewpono').val(response.viewjce.po_number);
                    $('#viewenginehours').val(response.viewjce.engine_hours);
                    $('#viewtraveldays').val(response.viewjce.travel_days);
                    $('#viewtotalsrtcode').val(response.viewjce.srtcode_total);
                    $('#viewtotallaborcostamt').val(response.viewjce.laborcost_total);
                    $('#viewtotalpartsamt').val(response.viewjce.parts_total);

                    $(".viewtbl").remove();

                    var tech = []
                    $.each(response.viewtech, function(key, item) {
                        tech.push(item.name);
                    });
                    $('#viewtechnicianname').val(tech);

                    $.each(response.viewjcenumber, function(key, item) {
                        var row = "<tr class='viewtbl' ><td class='col-md-2'>" + item.srt_code +
                            "</td><td class='col-md-7'>" + item.description +
                            "</td><td class='text-center'>" + item.working_unit +
                            "</tr>";

                        $("#viewsrtcodetbl").append(row);
                    });

                    $.each(response.viewlaborcost, function(key, item) {
                        var row = "<tr class='viewtbl' ><td class='col-md-6'>" + item.description +
                            "</td><td class='text-center'>" + item.rate +
                            "</td><td class='text-center'>" + item.quantity +
                            "</td><td class='text-center'>" + item.amount +
                            "</tr>";

                        $("#laborcostbodytbl").append(row);
                    });

                    $.each(response.viewparts, function(key, item) {
                        var row = "<tr class='viewtbl' ><td class='col-md-6'>" + item.part_number +
                            "</td><td class=''>" + item.description +
                            "</td><td class='text-center'>" + item.stocks +
                            "</td><td class='text-center'>" + item.quantity +
                            "</td><td class='text-center'>" + item.price +
                            "</td><td class='text-center'>" + item.disc_percent +
                            "</td><td class='text-center'>" + item.disc_amt +
                            "</td><td class='text-center'>" + item.total_amt +
                            "</tr>";

                        $("#partbodytbl").append(row);
                    });

                    $('#viewremarks').val(response.viewjce.remarks);
                    $('#viewfreightcost').val(response.viewjce.freight_cost);
                    $('#viewvaliditydate').val(response.viewjce.validity_date);
                    $('#viewamountdue').val(response.viewjce.amount_due);

                    $("#viewModal").modal('show');

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
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