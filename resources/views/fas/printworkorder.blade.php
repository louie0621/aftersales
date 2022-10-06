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
            size: landscape;
        }

        .subpage {
            padding: 2cm;
            border: 5px red solid;
            height: 256mm;
            outline: 2cm #FFEAEA solid;
        }

        .footer {
            position: fixed;
            bottom: .5cm;
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
            size: A4 landscape;
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

        .form-control-sm {
            padding: 0;
            line-height: 0;
            height: calc(1em + 0.5rem + 2px);
        }

        .form-control {
            padding: 0;
        }

        label {
            margin-bottom: 0;
            font: 10pt "Tahoma";
        }

        .form-group {
            margin-bottom: 0;
        }

        .form-control-sm {
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
</head>

<body style="font-family: Roboto, sans-serif;">
    <div class="container" style="padding-top: 1cm ;">
        <div class="row">
            <div class="col col-4 col-xs-12">
                <h4>Work Order</h4>
            </div>
            <div class="col col-xs-12">
                <img src="{{ asset('assets/images/printheader.png')}}" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class=" col col-12 ">
                <div class="row col-xs-12">
                    <div class="form-group col-3">
                        <label>Work Order Date:</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->workorder_date}}">
                    </div>
                    <?php
                    $temp = explode(' ', $viewjce->incidentdatetime);
                    ?>
                    <div class="form-group col-2">
                        <label>Incident Date</label>
                        <input type="text" class="form-control form-control-sm" value="{{$temp[0]}}">
                    </div>
                    <div class="form-group col-2">
                        <label>Incident Time</label>
                        <input type="text" class="form-control form-control-sm" value="{{$temp[1]}}">
                    </div>
                    <div class="form-group col-2">
                        <label>JCE Number</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->jce_number}}">
                    </div>
                    <div class="form-group col-3">
                        <label>Work Order Number</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->workorder_no}}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-7">
                        <label>Customer Name:</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewcustomer->customername}}">
                    </div>
                    <div class="form-group col-5">
                        <label>Work Order Status</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->workorder_status}}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-7">
                        <label>Contact Person:</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewcustomer->contact}}">
                    </div>
                    <div class="form-group col-5">
                        <label>Tel No.</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->contact_no}}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4">
                        <label>Job Site</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->job_site}}">
                    </div>
                    <div class="form-group col-4">
                        <label>Engine Number</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewequipment->engineno}}">
                    </div>
                    <?php
                    $temp1 = explode(' ', date("Y-m-d H:i:s", strtotime($viewworkorder->repairstart)));

                    ?>
                    <div class="form-group col-2">
                        <label>Repair Start</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $temp1[0] }} {{ $temp1[1] }}">
                    </div>
                    <div class="form-group col-2">
                        <label>Start Time</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewtechact->start_time }}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4">
                        <label>Unit Status</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewequipment->unit_status}}">
                    </div>
                    <div class="form-group col-4">
                        <label>Serial Number</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewequipment->serialnumber}}">
                    </div>
                    <?php
                    $temp2 = explode(' ', date("Y-m-d H:i:s", strtotime($viewworkorder->repairend)));

                    ?>
                    <div class="form-group col-2">
                        <label>Repair End</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $temp2[0] }} {{ $temp2[1] }}">
                    </div>
                    <div class="form-group col-2">
                        <label>Start End</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewtechact->end_time }}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4">
                        <label>Model</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewequipment->vehiclemodel}}">
                    </div>
                    <div class="form-group col-4">
                        <label>Dispatch Date</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->dispatch_date}}">
                    </div>
                    <?php
                    $temp3 = explode(' ', date("Y-m-d H:i:s", strtotime($viewjce->arrived_datetime)));
                    ?>
                    <div class="form-group col-2">
                        <label>Arrive Date</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $temp[0] }}">
                    </div>
                    <div class="form-group col-2">
                        <label>Arrive Time</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $temp[1] }}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-12">
                        <label>Complaint</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->Complaint_request}}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4">
                        <label>Component</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->component}}">
                    </div>
                    <div class="form-group col-2">
                        <label>Service Model</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->servicemodel}}">
                    </div>
                    <div class="form-group col-2">
                        <label>Machine Status</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->machine_status}}">
                    </div>
                    <div class="form-group col-4">
                        <label>Service Report No</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->service_report}}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4">
                        <label>Type of Issue</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewjce->typeofissue}}">
                    </div>
                    <div class="form-group col-2">
                        <label>Plate No</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->plateno}}">
                    </div>
                    <div class="form-group col-2">
                        <label>SMR</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->smr}}">
                    </div>
                    <div class="form-group col-4 position-absolute" style="position: fixed; right: 0rem; font-size: .875rem;">
                        <label>Dispatched Technician</label>
                        <ul >
                            @foreach ($viewtech as $viewtech)
                            <li>{{ $viewtech->name }}</li>
                            @endforeach
                        </ul>
                        <ul>
                            
                        </ul>
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4 position-absolute">
                        <label>Job Summary</label>
                        <textarea class="form-control" style="padding-left: 5px;
            padding-right: 5px; font-size: .875rem;" rows="3">{{ $viewworkorder->job_summary}}</textarea>
                    </div>
                    <div class="form-group col-4">
                    </div>
                    <div class="form-group col-4 ">
                        <label>Remarks</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->remarks}}">
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="form-group col-4">
                    </div>
                    <div class="form-group col-4 ">
                        <label>Special Instruction</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $viewworkorder->special_instruction}}">
                    </div>
                </div>
                <br><br>
                <div class="row col-xs-12">
                    <div class="form-group col-12 text-right" style="right: 2rem">
                        <label>This is to conforme that I agree to the work done by the technician.</label>
                    </div>
                </div>
                <div class="row col-xs-12 footer">
                    <div class="form-group col-6 text-center">
                        <label>_____________________________________________</label>
                        <label>Technician signature over printed name / Date</label>
                    </div>
                    <div class="form-group col-6 text-center">
                        <label>_____________________________________________</label>
                        <label>Customer signature over printed name / Date</label>
                    </div>
                </div>
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