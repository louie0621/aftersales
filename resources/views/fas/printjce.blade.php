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
                <h4>Job Cost Estimate (JCE)</h4>
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
                        <strong>Work Area</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->work_area }}
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>Labor:</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">

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
                        <strong>Labor Amount</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->labor_amt }}
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>JCE Type</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->jce_type }}
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
                        <strong>SRT</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->srt_amt }}
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>Charge To</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->charge_to }}
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
                        <strong>Parts Amount</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->parts_amt }}
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>Parts:</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">

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
                        <strong>Unit Status</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewequipment->unit_status }}
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>JCE Type</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->jce_type }}
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
                        <strong></strong>
                    </div>
                    <div class="col leftlabel col-xs-13">

                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>Charge To</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->charge_to }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Make</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewequipment->type }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Dispatch Date</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->dispatch_date }}
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>Item Labor Cost</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        Non-revenue a
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Model</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $viewequipment->vehiclemodel }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Job Type</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->job_type }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Serial Number</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $viewequipment->serialnumber }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Complaint</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->complaint_request }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Engine Number </strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $viewequipment->engineno }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Engine Hours</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $view->engine_hours }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Component</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->component }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Delear</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $view->dealer }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Type of Issue</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->typeofissue }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Job Site</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $view->job_site }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Resolved</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->resolved }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Travel Days</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $view->travel_days }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>PO Number</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->po_number }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Promised Date</strong>
                    </div>
                    <?php
                    $temp1 = explode(' ', date("Y-m-d H:i:s", strtotime($view->promised_datetime)));

                    ?>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $temp1[0] }}
                    </div>

                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Mode of Payment</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                    {{ $view->modeofpayment }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Promised Time</strong>
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        {{ $temp1[1] }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Allocated Technician </strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        @foreach ($viewtech as $viewtech)
                        <li>
                            {{ $viewtech->name }}
                        </li>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="row col-12 col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>SRT Code:</strong>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">SRT Code</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Working Unit</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jcesrtcode as $viewsrt)
                                <tr>
                                    <td>{{ $viewsrt->srt_code }}</td>
                                    <td>{{ $viewsrt->description }}</td>
                                    <td>{{ $viewsrt->working_unit }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row col-12 col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Labor:</strong>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">Rate</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jcelaborcost as $viewlaborcost)
                                <tr>
                                    <td>{{ $viewlaborcost->description }}</td>
                                    <td>{{ $viewlaborcost->rate }}</td>
                                    <td>{{ $viewlaborcost->quantity }}</td>
                                    <td>{{ $viewlaborcost->amount }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3" class="text-right">Total Labor Price:</td>
                                    <th>{{ $view->laborcost_total }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row col-12 col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>JCE Parts:</strong>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Part Number</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Availability</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Disc %</th>
                                    <th scope="col">Disc Amt</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($jceparts as $viewparts)
                                <tr>
                                    <td>{{ $viewparts->part_number }}</td>
                                    <td>{{ $viewparts->description }}</td>
                                    <td>@if ($viewparts->status > 0)
                                        Available
                                        @else
                                        Not Available
                                        @endif</td>
                                    <td>{{ $viewparts->quantity }}</td>
                                    <td>{{ $viewparts->srp }}</td>
                                    <td>{{ $viewparts->disc_percent }}</td>
                                    <td>{{ $viewparts->disc_amt }} </td>
                                    <td>{{ $viewparts->total_amt }}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7" class="text-right">Total Parts Price:</td>
                                    <th>{{ $view->parts_total }}</th>
                                </tr>
                            </tfoot>
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