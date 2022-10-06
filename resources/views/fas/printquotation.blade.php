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
            bottom: 2cm;

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

            .footerbgcolor td {
                background-color: #87a9e0 !important;
                -webkit-print-color-adjust: exact;
                color: white;
            }

            .footerbgcolor {
                background-color: #87a9e0 !important;
                -webkit-print-color-adjust: exact;
                color: white;
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
            <div class="col col-xs-12">
                <img src="{{ asset('assets/images/printheaderquotation.png')}}" alt="">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                Cham's Realty Bldg., Baloy, Tablon, Cagayan de Oro City
            </div>
            <div class="col">
                Tel.# 088-8808744 / 088-8563970
            </div>
        </div>
        <div class="row">
            <div class=" col col-12 ">
                @foreach ($jceview as $view)
                <div class="row col-xs-12">
                    <div class="col col-12 leftlabel col-xs-12 text-center">
                        <h4>GENUINE SPARE PARTS QUOTATION</h4>
                    </div>
                </div>
                <hr class="hr">
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Quotation No.</strong>
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
                        <strong>Date:</strong>
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
                        <strong>Customer Name</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $viewcustomer->customername }}
                    </div>
                    <div class="col col-2 leftlabel col-xs-13">
                        <strong>Tel No.</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->contact_no }}
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
                        <strong>Your Reference</strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        {{ $view->po_number }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Subject: </strong>
                    </div>
                    <div class="col leftlabel col-xs-13">
                        <strong>{{ $view->complaint_request }}</strong>
                    </div>
                </div>
                <div class="row col-12 col-xs-12">
                    <div class="col col-2 leftlabel col-xs-12">
                        <strong>Parts</strong>
                    </div>
                    <div class="table-responsive">

                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
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
                                <tr class="footerbgcolor">
                                    <td colspan="7" class="text-center">>>>>>>>>>> Nothing Follows <<<<<<<<<< </td>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-10 leftlabel col-xs-12 text-right">
                        <strong>Total Price:</strong>
                    </div>
                    <div class="col leftlabel col-xs-13 text-right" style="margin-right: 1cm ;">
                        {{ $view->parts_total }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-10 leftlabel col-xs-12 text-right">
                        <strong>Freight Cost</strong>
                    </div>
                    <div class="col leftlabel col-xs-13 text-right" style="margin-right: 1cm ;">
                        {{ $view->freight_cost }}
                    </div>
                </div>
                <div class="row col-xs-12">
                    <div class="col col-10 leftlabel col-xs-12 text-right">
                        <strong>Amount Due</strong>
                    </div>
                    <div class="col leftlabel col-xs-13 text-right" style="margin-right: 1cm ;">
                        {{ $view->amount_due }}
                    </div>
                </div>
                <div class="footer col col-12">
                    <div class="row col-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered">
                                <thead class="">
                                    <tr class="">
                                        <th scope="col" colspan="2" class="text-center"><strong>TERMS AND CONDITION</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td class=""><u>Payment Terms:</u></td>
                                        <td class="text-primary" style="font: 10pt 'Tahoma';">Availability:
                                            A. UDO (Airfreight) - Within One (1) - Two (2) weeks upon receipt of your Purchase Order (PO), <br>
                                            Plus (+) 10% Premium at Unit Price.<br>
                                            B. NSO (Airfreight) - Within one (1) month upon receipt of your Purchase Order (PO).<br>
                                            C. NSO (Seafreight) - Within one hundred twenty (120) days upon receipt of your (PO)<br>
                                            D. STOCK - Available ex-Stock, however, subject to confirmation prior to sales.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row col-xs-12">
                        <div class="col col-4 leftlabel col-xs-12">
                            <strong>Validity:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; This quotation is valid until:
                        </div>
                        <div class="col leftlabel col-xs-13">
                            <strong>{{ date('Y-m-d') }}</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; after which it is subject to our reconfirmation.
                        </div>
                    </div>
                    <div class="row col-xs-12">
                        <div class="col col-12 leftlabel col-xs-12">
                            Thank you for your interest in our product. Should you have question regarding our offer, please do not hesitate to call us immediately.
                        </div>
                    </div>
                    <div class="row col-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered" style="overflow: hidden;">
                                <thead class="">
                                    <tr class="">
                                        <th scope="col" class="text-left" style="width: 30%;"><strong>CUSTOMER ACKNOWLEDGEMENT</strong></th>
                                        <th scope="col" colspan="2" class="text-left"><strong>FILHOLLAND CORPORATION.</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <br><br><br>
                                            <div class="row col-xs-12">
                                                <div class="col col-12 leftlabel col-xs-12 text-center">
                                                    __________________________________
                                                </div>
                                            </div>
                                            <div class="row col-xs-12">
                                                <div class="col col-12 leftlabel col-xs-12 text-center">
                                                    Printed Name, Signature, Date
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <br>
                                            <div class="row col-xs-12">
                                                <div class="col col-5 leftlabel col-xs-12 text-center">

                                                </div>
                                                <div class="col col-5 leftlabel col-xs-13 text-center">
                                                    <strong>Edwin T. Patenio</strong>
                                                </div>
                                            </div>
                                            <div class="row col-xs-12">
                                                <div class="col col-5 leftlabel col-xs-12 text-center">
                                                    _________________________________________
                                                </div>
                                                <div class="col col-5 leftlabel col-xs-13 text-center">
                                                    _________________________________________
                                                </div>
                                            </div>
                                            <div class="row col-xs-12">
                                                <div class="col col-5 leftlabel col-xs-12 text-center">
                                                    Customer Solution Representative
                                                </div>
                                                <div class="col col-5 leftlabel col-xs-13 text-center">
                                                    Operation Manager
                                                </div>
                                            </div>
                                            <div class="row col-xs-12">
                                                <div class="col col-5 leftlabel col-xs-12 text-center">

                                                </div>
                                                <div class="col col-5 leftlabel col-xs-13 text-center">
                                                    <strong>0917 633 1734</strong>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
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