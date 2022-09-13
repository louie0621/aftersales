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
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->workorder_date }}</td>
                            <td>{{ $data->workorder_no }}</td>
                            <td>{{ $data->jce_no }}</td>
                            <td>{{ $data->workorder_status }}</td>
                            <td>{{ $data->machine_status }}</td>
                            <td>{{ $data->servicemodel }}</td>
                            <td>{{ $data->plateno }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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