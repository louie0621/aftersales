<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('assets/images/favicon-32x32.png')}}" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-print.min.css')}}" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-print-css/css/bootstrap-print.min.css" media="print">
    <title>Filholland Aftersales System</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
            text-align: justify;
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .page {
            width: 21cm;
            min-height: 29.7cm;
            padding: 2cm;
            margin: 1cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 2cm;
            border: 5px red solid;
            height: 256mm;
            outline: 2cm #FFEAEA solid;
        }

        .footer {
            position: fixed;
            bottom: 3cm;
        }

        .footer1 {
            position: fixed;
            bottom: 3cm;
            right: 4cm;
        }

        .footer3 {
            position: fixed;
            bottom: 2cm;
        }

        .col {
            margin-top: .5rem;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }

        .leftlabel {
            font-size: 14px;
        }
    </style>
</head>

<body style="font-family: Roboto, sans-serif;">
    <div class="container" style="padding-top: 1cm ;">
        <div class="row">
            <div class="col col-4 col-xs-12">
                <h4>FIELD SERVICE REPORT </h4>
            </div>
            <div class="col col-xs-12">
                <img src="{{ asset('assets/images/printheader.png')}}" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class=" col col-12 ">
                @foreach ($jceview as $view)
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>JCE Number</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->jce_number }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Model</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewequipment->vehiclemodel }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Incident Date</strong>
                    </div>
                    <?php
                    $temp = explode(' ', $view->incidentdatetime);
                    ?>
                    <div class="col leftlabel col-xs-13">
                        {{ $temp[0] }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Serial Number</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewequipment->serialnumber }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Incident Time</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $temp[1] }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Engine Number</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewequipment->enigineno }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Customer Name</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewcustomer->customername }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Working Hours</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewtechact->man_hour }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Contact Person</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewcustomer->contact }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Arrive Date </strong>
                    </div>
                    <?php
                    $temp1 = explode(' ', date("Y-m-d H:i:s", strtotime($viewworkorder->arrived_datetime)));
                    ?>
                    <div class="col leftlabel col-xs-13">
                        {{ $temp1[0] }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Tel No</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->contact_no }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Arrive Time </strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $temp1[1] }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Work Order Date</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewworkorder->workorder_date }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Machine Status </strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewworkorder->machine_status}}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Work Order Number</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewworkorder->workorder_no}}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Work Order Status</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewworkorder->workorder_status}}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Start Date </strong>
                    </div>
                    <?php
                    $temp2 = explode(' ', date("Y-m-d H:i:s", strtotime($viewworkorder->repairstart)));
                    ?>
                    <div class="col leftlabel col-xs-13">
                        {{ $temp2[0]}} {{ $temp2[1]}}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>End Date </strong>
                    </div>
                    <?php
                    $temp3 = explode(' ', date("Y-m-d H:i:s", strtotime($viewworkorder->repairend)));
                    ?>
                    <div class="col leftlabel col-xs-13">
                        {{ $temp3[0]}} {{ $temp3[1]}}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Start Time</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewtechact->start_time }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>End Time</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewtechact->end_time }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Service Report NO</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $viewworkorder->service_report }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col leftlabel col-xs-12">
                        <h4>Service Report </h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Defect Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm col-6" id="inputEmail3" value="{{ $viewdefectcode->defect_code }}" style="font-size: .875rem;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Failure Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm col-6" id="inputEmail3" value="{{ $viewfailurecode->failure_code }}" style="font-size: .875rem;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Customer Request / Complaint </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{ $viewworkorder->customer_request }}" style="font-size: .875rem;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Cause / Findings </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{ $viewworkorder->cause }}" style="font-size: .875rem;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Service Repair / Job Done </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{ $viewworkorder->service_repair }}" style="font-size: .875rem;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Recommendation </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="inputEmail3" value="{{ $viewworkorder->recommendation }}" style="font-size: .875rem;">
                    </div>
                </div>
                <div class="row col-12 col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>
                            <h5>Parts</h5>
                        </strong>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Parts Code</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($jceparts as $viewparts)
                                <tr>
                                    <td>{{ $viewparts->part_number }}</td>
                                    <td>{{ $viewparts->description }}</td>
                                    <td class="text-center">{{ $viewparts->quantity }}</td>
                                    <td class="text-right">{{ $viewparts->srp }}</td>
                                    <td class="text-right">{{ $viewparts->total_amt }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right">Total Parts Price:</td>
                                    <th class="text-right">{{ $view->parts_total }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row col-12 col-xs-12">
                    <div class="col leftlabel col-xs-12">
                        <strong>
                            <h5>Technician Activity </h5>
                        </strong>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Activity Date</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Start Time </th>
                                    <th scope="col">End Time</th>
                                    <th scope="col">Man Hour</th>
                                    <th scope="col">Location From</th>
                                    <th scope="col">Location To</th>
                                    <th scope="col">Odo Start</th>
                                    <th scope="col">Odo End</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($viewta as $viewta)
                                <tr>
                                    <td>{{ $viewta->activity_date }}</td>
                                    <td>{{ $viewta->description }}</td>
                                    <td>{{ $viewta->start_time }}</td>
                                    <td>{{ $viewta->end_time }}</td>
                                    <td>{{ $viewta->man_hour }}</td>
                                    <td>{{ $viewta->location_from }}</td>
                                    <td>{{ $viewta->location_to }}</td>
                                    <td>{{ $viewta->odo_start }}</td>
                                    <td>{{ $viewta->odo_end }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row col-xs-12 footer">
                    <div class="col leftlabel col-xs-12">
                        Prepared by: _______________________________
                    </div>
                </div>
                <div class="row col-xs-12 footer3">
                    <div class="col leftlabel col-xs-12">
                        <strong>Date:</strong> {{ date('Y-m-d') }}
                    </div>
                </div>
                <div class="row col-xs-12 footer1">
                    <div class="col leftlabel col-xs-12">
                        Approved by: _______________________________
                    </div>
                </div>
                @endforeach
            </div>

        </div>

    </div>
</body>
<script>
    newDoc()

    function newDoc() {
        window.print()
        window.onafterprint = window.close;
    }
</script>

</html>