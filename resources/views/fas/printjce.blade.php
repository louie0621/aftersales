<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-print.min.css')}}" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-print-css/css/bootstrap-print.min.css" media="print">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #FAFAFA;
            font: 12pt "Tahoma";
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
            <div class="col col-3 col-xs-12">
                <strong>Job Cost Estimate (JCE)</strong>
            </div>
            <div class="col col-xs-12">
                <img src="{{ asset('assets/images/printheader.png')}}" alt="">
            </div>
        </div>
        <div class="row">
            <div class=" col col-12 ">
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                         <strong>JCE Number</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        SCE-BAC-1427
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                         <strong>Work Area</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        In-field
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
                    <div class="col leftlabel col-xs-13">
                        2/3/2022
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                         <strong>Labor Amount</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        2000
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>JCE Type</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        Non-revenue
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>