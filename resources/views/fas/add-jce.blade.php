@extends('fas.layout.mainlayout')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
<!--start content-->

<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dasboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Add Job Cost Estimate</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row">
        <div class="col-xl-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form class="row g-3 needs-validation">
                            <div class="col-md-6">
                                <label class="form-label">Incident Date/Time</label>
                                <input type="text" class="form-control form-control-sm" id="incidentdate" value="" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Dispatch Date</label>
                                <input type="date" class="form-control form-control-sm" id="validationCustom01">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">JCE Number</label>
                                @forelse($jceno as $data)
                                <input type="text" class="form-control form-control-sm" id="jceno" value="{{ $data->jce_number }}" disabled>
                                @empty
                                <input type="text" class="form-control form-control-sm" id="jceno" disabled>
                                @endforelse

                            </div>
                            <div class="col-md-4">
                                <label validationCustom02" class="form-label">Labor Amount</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom02">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Customer Name</label>
                                <select class="form-select form-select-sm" id="customernameid" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($customer as $data)
                                    <option value="{{ $data->id}}">{{ $data->customername }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">SRT</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom03">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Contact Person </label>
                                <input type="text" class="form-control form-control-sm" id="contactperson" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Parts Amount</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom03">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">TelNo.</label>
                                <input type="text" class="form-control form-control-sm" id="telno">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Job Type</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($jobtype as $data)
                                    <option value="{{ $data->jobtype }}">{{ $data->jobtype }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-8">
                                <label class="form-label">Vehicle Type</label>
                                <select class="form-select form-select-sm" id="vehicletypeid" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Agriculture Equipment">Agriculture Equipment</option>
                                    <option value="Construction Equipment">Construction Equipment</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Dealer</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($dealer as $data)
                                    <option value="{{ $data->dealer }}">{{ $data->dealer }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Model</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="model" disabled>
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Job Site</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Serial Number</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="serialno" disabled>
                                    <option selected></option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Unit Status</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05" required>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Engine Number</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="engineno" disabled>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">SalesType</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Complaint/Request</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Component</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($components as $data)
                                    <option value="{{ $data->component }}">{{ $data->component }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Type of Issue</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    @foreach($typeofissue as $data)
                                    <option value="{{ $data->typeofissue }}">{{ $data->typeofissue }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Promised Date/Time</label>
                                <input type="datetime-local" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Resolved</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Via CSR Call">Via CSR Call</option>
                                    <option value="Via Technician Call">Via Technician Call</option>
                                    <option value="Proceed with quotation">Proceed with quotation</option>
                                    <option value="Proceed with Work Order">Proceed with Work Order</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Payment Terms</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Mode of Payment</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cash on Delivery">Cash on Delivery</option>
                                    <option value="Check">Check</option>
                                    <option value="Terms">Terms</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">PO Number</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Engine Hours</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Travel Days</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-12">
                                <label class="form-label">Techician Name</label>
                                <select class="form-select form-select-sm" id="techname" name="techname[]" multiple="multiple">
                                    @foreach($techname as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">JCE Type</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Non-Revenue">Non-Revenue</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">JCE Type Parts</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="Revenue">Revenue</option>
                                    <option value="Non-Revenue">Non-Revenue</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Charge To</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="">Customer</option>
                                    <option value="">PMS</option>
                                    <option value="">CNHI /Warranty</option>
                                    <option value="">Expense</option>
                                    <option value="">Sales - AG</option>
                                    <option value="">Sales - CE</option>
                                    <option value="">Parts</option>
                                    <option value="">Service</option>
                                    <option value="">Supply Chain</option>
                                    <option value="">Supplier</option>
                                    <option value="">Other Department</option>
                                    <option value="">FieldKing</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Charge To Parts</label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                    <option selected></option>
                                    <option value="">Customer</option>
                                    <option value="">PMS</option>
                                    <option value="">CNHI /Warranty</option>
                                    <option value="">Expense</option>
                                    <option value="">Sales - AG</option>
                                    <option value="">Sales - CE</option>
                                    <option value="">Parts</option>
                                    <option value="">Service</option>
                                    <option value="">Supply Chain</option>
                                    <option value="">Supplier</option>
                                    <option value="">Other Department</option>
                                    <option value="">FieldKing</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label "><strong>SRT Code</strong></label>
                            </div>
                            <div class="table-responsive mt-3 ">
                                <table class="table align-middle table-sm">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>SRT</th>
                                            <th>Description</th>
                                            <th>Work Unit</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="srtcodetbody">
                                        <tr>
                                            <td class="col-md-3"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" id="srtcodeentry"></td>
                                            <td class="col-md-6"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" id="srtdesentry"></td>
                                            <td><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center; padding-right:.5rem;" id="srtworkunitentry"></td>
                                            <td><strong><a href="javascript:;" id="addsrtcode" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" style="text-align: right;"><strong>SRT (Total Hours)</strong></td>
                                            <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="totalsrtcode" disabled></strong></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label "><strong>Labor Cost</strong></label>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table align-middle table-sm">
                                    <thead class="table-secondary">
                                        <tr>
                                            <th>Description</th>
                                            <th>Rate</th>
                                            <th>Quantity</th>
                                            <th>Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="laborcostbody">
                                        <tr>
                                            <td class="col-md-6">
                                                <select class="form-select form-select-sm" id="labordescription" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                    <option value=""></option>
                                                    @foreach($laborcost as $data)
                                                    <option value="{{ $data->id }}">{{ $data->description }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="laborcostrate" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="laborcostqty"></td>
                                            <td><input type="text" class="form-control form-control-sm " style="min-height: 0rem; padding:0rem; text-align:right; padding-right:.5rem;" id="laborcostamt" disabled></td>
                                            <td><strong><a href="javascript:;" id="addlaborcost" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" style="text-align: right;"><strong>JCE Amount</strong></td>
                                            <td><strong><span id=""></span> <input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="totallaborcostamt" disabled></strong></td>
                                            <td></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="col-md-9">
                                <label class="form-label"><strong>Parts</strong></label>
                            </div>
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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="partbody">
                                        <tr>
                                            <td class="col-md-2">
                                                <select class="form-select form-select-sm selectpart" id="partsno" style="min-height: 0rem; padding:0rem; padding-left:.5rem;" aria-label=".form-select-sm example">
                                                    <option value=""></option>
                                                    @foreach($parts as $data)
                                                    <option value="{{ $data->id }}">{{ $data->part_number }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td class="col-md-3"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem;" id="partdes" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="partavail" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="partqty"></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="partprice" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:center;" id="partdiscpercent" disabled></td>
                                            <td class="col-md-1"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="partdiscamt" disabled></td>
                                            <td class="col-md-2"><input type="text" class="form-control form-control-sm" style="min-height: 0rem; padding:0rem; text-align:right;" id="parttotal" disabled></td>
                                            <td><strong><a href="javascript:;" id="addparts" class="text-success" style="font-size: 20px;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add"><i class="bi bi-plus-square-fill"></i></a></strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Remarks</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Total Parts Amount</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Freight Cost</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-8">
                                <label class="form-label">Validity Date</label>
                                <input type="date" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Amount Due</label>
                                <input type="text" class="form-control form-control-sm" id="validationCustom05">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Save</button>
                                <button class="btn btn-danger">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

</main>
<!--end page main-->
@endsection

@section('script')
<!-- JS Files -->
<script>
    $(document).ready(function() {

        //Add Part 
        $("#addparts").click(function() {
            var partno = $("#partsno option:selected").text();
            var partdes = $("#partdes").val();
            var partavail = $("#partavail").val();
            var partqty = $("#partqty").val();
            var partprice = $("#partprice").val();
            var partdiscpercent = $("#partdiscpercent").val();
            var partdiscamt = $("#partdiscamt").val();
            var parttotal = $("#parttotal").val();

            var row = "<tr class='parttr'><td class='clss text-center'>" + partno + 
                            "</td><td class='clss'>" + partdes + 
                            "</td><td class='clss text-center'>" + partavail + 
                            "</td><td class='clss text-center'>" + partqty + 
                            "</td><td class='clss' style='text-align: right;'>" + partprice + 
                            "</td><td class='clss text-center'>" + partdiscpercent + 
                            "</td><td class='clss' style='text-align: right;'>" + partdiscamt + 
                            "</td><td class='clss' style='text-align: right;'>" + parttotal +
                            "</td><td><a href='javascript:;' onclick='srttblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

            $("#partbody").append(row);

            var arr = [];
            $(".parttr").each(function() {
                arr.push($(this).find("td:nth-child(4)").text()); //put elements into array
            });

            var sum = arr.reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);

            $("#partsno").find('option:eq(0)').prop('selected', true);
            $("#partdes").val('');
            $("#partavail").val('');
            $("#partqty").val('');
            $("#partprice").val('');
            $("#partdiscpercent").val('');
            $("#partdiscamt").val('');
            $("#parttotal").val('');
        });

        //part discount amount
        $("#partdiscamt").keyup(function(e) {
            var price = $("#partprice").val();
            var qty = $("#partqty").val();
            var totalqty = parseFloat(price) * parseFloat(qty);
            var percent = parseFloat($("#partdiscpercent").val()) / 100;
            var subtotal = parseFloat(percent) * parseFloat(totalqty);
            var totalpercent = parseFloat(totalqty) - parseFloat(subtotal);
            var totaldics = parseFloat(totalpercent) - parseFloat($("#partdiscamt").val());
            var totalamt = parseFloat(totalqty) - parseFloat($("#partdiscamt").val());

            if ($("#partdiscamt").val().length && $("#partdiscpercent").val().length) {
                $("#parttotal").val(totaldics);
            } else if ($("#partdiscpercent").val().length) {
                $("#parttotal").val(totalpercent);
            } else if ($("#partdiscamt").val().length) {
                $("#parttotal").val(totalamt);
            } else {
                $("#parttotal").val(totalqty);
            }

        });

        //part discount percent
        $("#partdiscpercent").keyup(function(e) {
            var price = $("#partprice").val();
            var qty = $("#partqty").val();
            var totalqty = parseFloat(price) * parseFloat(qty);
            var percent = parseFloat($("#partdiscpercent").val()) / 100;
            var subtotal = parseFloat(percent) * parseFloat(totalqty);
            var totalpercent = parseFloat(totalqty) - parseFloat(subtotal);
            var totaldics = parseFloat(totalpercent) - parseFloat($("#partdiscamt").val());
            var totalamt = parseFloat(totalqty) - parseFloat($("#partdiscamt").val());

            if ($("#partdiscamt").val().length && $("#partdiscpercent").val().length) {
                $("#parttotal").val(totaldics);
            } else if ($("#partdiscpercent").val().length) {
                $("#parttotal").val(totalpercent);
            } else if ($("#partdiscamt").val().length) {
                $("#parttotal").val(totalamt);
            } else {
                $("#parttotal").val(totalqty);
            }
        });

        //part quantity
        $("#partqty").keyup(function(e) {
            var price = $("#partprice").val();
            var qty = $("#partqty").val();
            var total = parseFloat(price) * parseFloat(qty);
            if ($("#partqty").val().length) {
                $("#parttotal").val(total);
                $("#partdiscpercent").prop("disabled", false);
                $("#partdiscamt").prop("disabled", false);
            } else {
                $("#parttotal").val('');
                $("#partdiscpercent").prop("disabled", true);
                $("#partdiscamt").prop("disabled", true);
            }
        });

        //Part Number
        $("#partsno").change(function() {
            var url = "{{ url('/FAS/selectpartno') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#partdes").val(response.showpartsdescription.description);
                        $("#partavail").val(response.showpartsdescription.stocks);
                        $("#partprice").val(response.showpartsdescription.price);
                        var price = $("#partprice").val();
                        var qty = $("#partqty").val();
                        var total = parseFloat(price) * parseFloat(qty);
                        $("#partdiscpercent").val('');
                        $("#partdiscamt").val('');
                        if ($("#partqty").val().length) {
                            $("#parttotal").val(total);
                        } else {
                            $("#parttotal").val('');
                        }
                    }
                })
            } else {
                $("#partdes").val('');
                $("#partavail").val('');
                $("#partprice").val('');
                $("#partqty").val('');
            }

        });

        //Add Labor Cost
        $("#addlaborcost").click(function() {
            var des = $("#labordescription option:selected").text();
            var rate = $("#laborcostrate").val();
            var qty = $("#laborcostqty").val();
            var amt = $("#laborcostamt").val();

            var row = "<tr class='laborcosttr'><td>" + des + "</td><td class='clss text-center'>" + rate + "</td><td class='clss text-center'>" + qty + "</td><td class='clss' style='text-align:right;'>" + amt + "</td><td><a href='javascript:;' onclick='srttblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

            $("#laborcostbody").append(row);

            var arr = [];
            $(".laborcosttr").each(function() {
                arr.push($(this).find("td:nth-child(4)").text()); //put elements into array
            });

            var sum = arr.reduce(function(a, b) {
                return parseFloat(a) + parseFloat(b);
            }, 0);

            $("#totallaborcostamt").val(sum);
            $("#labordescription").find('option:eq(0)').prop('selected', true);
            $("#laborcostamt").val('');
            $("#laborcostqty").val('');
            $("#laborcostrate").val('');
        });

        //Labor Cost Quantity
        $("#laborcostqty").keyup(function(e) {
            var rate = $("#laborcostrate").val();
            var qty = $("#laborcostqty").val();
            var total = parseFloat(rate) * parseFloat(qty);
            if ($("#laborcostqty").val().length) {
                $("#laborcostamt").val(total);
            } else {
                $("#laborcostamt").val('');
            }

        });

        // Labor Cost Description
        $("#labordescription").change(function() {
            var url = "{{ url('/FAS/selectlaborcost') }}" + "/" + $(this).children("option:selected").val();

            if ($(this).children("option:selected").val().length > 0) {

                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function(response) {
                        $("#laborcostrate").val(response.showdescription.rate);
                        var rate = $("#laborcostrate").val();
                        var qty = $("#laborcostqty").val();
                        var total = parseFloat(rate) * parseFloat(qty);
                        if ($("#laborcostqty").val().length) {
                            $("#laborcostamt").val(total);
                        } else {
                            $("#laborcostamt").val('');
                        }
                    }
                })
            } else {
                var rate = $("#laborcostrate").val('');
                var qty = $("#laborcostqty").val('');
                $("#laborcostamt").val('');
            }

        });

        //Work unit number only
        $("#srtworkunitentry").keypress(function(e) {
            //if the letter is not digit then display error and don't type anything
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                return false;
            }
        });

        //Add srtcode 
        $("#addsrtcode").click(function() {
            var srtcode = $("#srtcodeentry").val();
            var des = $("#srtdesentry").val();
            var workunit = $("#srtworkunitentry").val();

            if ($("#srtcodeentry").val().length > 0) {
                $("#srtcodeentry").removeClass("is-invalid");
            } else {
                $("#srtcodeentry").addClass("is-invalid");
            }

            if ($("#srtdesentry").val().length > 0) {
                $("#srtdesentry").removeClass("is-invalid");
            } else {
                $("#srtdesentry").addClass("is-invalid");
            }
            if ($("#srtworkunitentry").val().length > 0) {
                $("#srtworkunitentry").removeClass("is-invalid");
            } else {
                $("#srtworkunitentry").addClass("is-invalid");
            }

            if ($("#srtcodeentry").val().length > 0 && $("#srtdesentry").val().length > 0 && $("#srtworkunitentry").val().length > 0) {
                var row = "<tr class='srtcodetr col-md-3'><td>" + srtcode + "</td><td class='clss col-md-6'>" + des + "</td><td class='clss text-center'>" + workunit + "</td> <td><a href='javascript:;' onclick='srttblDelete(this);' class='text-danger' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Delete'><i class='bi bi-trash-fill'></i></a></td></tr>";

                $("#srtcodetbody").append(row);

                var arr = [];
                $(".srtcodetr").each(function() {
                    arr.push($(this).find("td:nth-child(3)").text()); //put elements into array
                });

                var sum = arr.reduce(function(a, b) {
                    return parseFloat(a) + parseFloat(b);
                }, 0);

                total = sum / 10;

                $("#totalsrtcode").val(total);
                $("#srtcodeentry").val('');
                $("#srtdesentry").val('');
                $("#srtworkunitentry").val('');
            } else {

            }

        });



        $('#techname').select2();

        //Contact person
        $("#customernameid").change(function() {
            var url = "{{ url('/FAS/show-contactperson') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#contactperson").val(response.showcustomer.contact);
                    $("#telno").val(response.showcustomer.phone);
                }
            })

        });
        // 
        //Vehicletype
        $("#vehicletypeid").change(function() {
            var url = "{{ url('/FAS/show-vehicletype') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#model").prop("disabled", false);
                    $('#model').empty();
                    $("#serialno").prop("disabled", true);
                    $('#serialno').empty();
                    $('#model').append(`<option value="">
                                  </option>`);
                    $("#engineno").prop("disabled", true);
                    $('#engineno').empty();
                    $('#engineno').append(`<option value="">
                                  </option>`);
                    $.each(response.showmodel, function(key, item) {
                        $('#model').append(`<option value="${item.vehiclemodel}">
                                       ${item.vehiclemodel}
                                  </option>`);
                    })
                }
            })

        });
        $("#model").change(function() {
            var url = "{{ url('/FAS/show-serialno') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#serialno").prop("disabled", false);
                    $('#serialno').empty();
                    $('#serialno').append(`<option value="">
                                  </option>`);
                    $("#engineno").prop("disabled", true);
                    $('#engineno').empty();
                    $('#engineno').append(`<option value="">
                                  </option>`);
                    $.each(response.showserial, function(key, item) {
                        $('#serialno').append(`<option value="${item.serialnumber}">
                                       ${item.serialnumber}
                                  </option>`);
                    })
                }
            })

        });

        $("#serialno").change(function() {
            var url = "{{ url('/FAS/show-engineno') }}" + "/" + $(this).children("option:selected").val();

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    $("#engineno").prop("disabled", false);
                    $('#engineno').empty();
                    $('#engineno').append(`<option value="">
                                  </option>`);
                    $.each(response.showengineno, function(key, item) {
                        $('#engineno').append(`<option value="${item.engineno}">
                                       ${item.engineno}
                                  </option>`);
                    })
                }
            })
        });

        fetchincidentdate();

        function fetchincidentdate() {
            var today = new Date();
            var datetime = today.toLocaleString();
            $("#incidentdate").val(datetime);
        }

        fetchjceno();

        function fetchjceno() {
            $.ajax({
                type: "GET",
                url: "{{ url('/FAS/jceno') }}",
                dataType: "json",
                success: function(response) {
                    $("#contactperson").val(response.showcustomer.contact);
                    $("#jceno").val(datetime);
                }
            })

        }

    });

    function srttblDelete(ctl) {
        $(ctl).parents("tr").remove();

        var arr = [];
        $(".srtcodetr").each(function() {
            arr.push($(this).find("td:nth-child(3)").text()); //put elements into array
        });

        var sum = arr.reduce(function(a, b) {
            return parseFloat(a) + parseFloat(b);
        }, 0);

        total = sum / 10;

        $("#totalsrtcode").val(total);
    }
</script>

@endsection