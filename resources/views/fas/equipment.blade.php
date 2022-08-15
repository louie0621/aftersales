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
                    <li class="breadcrumb-item active" aria-current="page"> Equipments Master List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table class="table align-middle table-sm text-wrap" id="mytbl">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Serial Number</th>
                            <th>Vehicle Model</th>
                            <th>Description</th>
                            <th>Branch</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equipment as $data)
                        <tr>
                            <td class="viewtable" style="cursor: context-menu;" data-viewid="{{ $data->id }}">{{ $loop->iteration }}</td>
                            <td class="viewtable" style="cursor: context-menu;" data-viewid="{{ $data->id }}">{{ $data->serialnumber }}</td>
                            <td class="viewtable" style="cursor: context-menu;" data-viewid="{{ $data->id }}">{{ $data->vehiclemodel }}</td>
                            <td class="viewtable" style="cursor: context-menu;" data-viewid="{{ $data->id }}">{{ $data->description }}</td>
                            <td class="viewtable" style="cursor: context-menu;" data-viewid="{{ $data->id }}">{{ $data->branch }}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" id="edit" data-toggle="modal" data-editid="{{ $data->id }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="javascript:;" id="delete" data-deleteid="{{ $data->id }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- View Modal -->
                <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel"> Equipment detials</h5>
                                <button type="button" class="btn-close closemodal" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-xl-12 mx-auto">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation">
                                            <div class="col-mb-3">
                                                <label for="validationCustom01" class="form-label">Serial Number</label>
                                                <input type="text" class="form-control form-control-sm @error('serialnumber') is-invalid @enderror" value="{{ old('serialnumber') }}" name="serialnumber" id="viewserialnumber" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom01" class="form-label">Vehicle Model</label>
                                                <input type="text" class="form-control form-control-sm @error('vehiclemodel') is-invalid @enderror" value="{{ old('vehiclemodel') }}" name="vehiclemodel" id="viewvehiclemodel" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Engine Number</label>
                                                <input type="text" class="form-control form-control-sm @error('engineno') is-invalid @enderror" value="{{ old('engineno') }}" name="engineno" id="viewengineno" disabled>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Brand Model</label>
                                                <input type="text" class="form-control form-control-sm @error('brand') is-invalid @enderror" value="{{ old('brand') }}" name="brand" id="viewbrand" disabled>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom02" class="form-label">Description</label>
                                                <input type="text" class="form-control form-control-sm @error('description') is-invalid @enderror" value="{{ old('description') }}" name="description" id="viewdescription" disabled>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Vehicle Type</label>
                                                <input type="text" class="form-control form-control-sm @error('type') is-invalid @enderror" value="{{ old('type') }}" name="type" id="viewtype" disabled>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Branch</label>
                                                <input type="text" class="form-control form-control-sm @error('branch') is-invalid @enderror" value="{{ old('branch') }}" name="editbranch" id="viewbranch" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom03" class="form-label">Warranty Start</label>
                                                <input type="date" class="form-control form-control-sm @error('warrantystart') is-invalid @enderror" value="{{ old('warrantystart') }}" name="warrantystart" id="viewwarrantystart" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom03" class="form-label">Warranty End</label>
                                                <input type="date" class="form-control form-control-sm @error('warrantyend') is-invalid @enderror" value="{{ old('warrantyend') }}" name="warrantyend" id="viewwarrantyend" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomer') is-invalid @enderror" value="{{ old('endcustomer') }}" name="endcustomer" id="viewendcustomer" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">Registration Number</label>
                                                <input type="text" class="form-control form-control-sm @error('registrationnumber') is-invalid @enderror" value="{{ old('registrationnumber') }}" name="registrationnumber" id="viewregistrationnumber" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer/Company Name</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomername') is-invalid @enderror" value="{{ old('endcustomername') }}" name="endcustomername" id="viewendcustomername" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer Address</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomeraddress') is-invalid @enderror" value="{{ old('endcustomeraddress') }}" name="endcustomeraddress" id="viewendcustomeraddress" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer City</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomercity') is-invalid @enderror" value="{{ old('endcustomercity') }}" name="endcustomercity" id="viewendcustomercity" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer State/Province</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomerstate') is-invalid @enderror" value="{{ old('endcustomerstate') }}" name="endcustomerstate" id="viewendcustomerstate" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer Country</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomercountry') is-invalid @enderror" value="{{ old('endcustomercountry') }}" name="endcustomercountry" id="viewendcustomercountry" disabled>

                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">Nav Customer Code</label>
                                                <input type="text" class="form-control form-control-sm @error('navcustomercode') is-invalid @enderror" value="{{ old('navcustomercode') }}" name="navcustomercode" id="viewnavcustomercode" disabled>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal" aria-label="Close" id="closemodal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel"> Update Equipment detials</h5>
                                <button type="button" class="btn-close closemodal" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-xl-12 mx-auto">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3 needs-validation">
                                            <input type="text" id="editid" hidden>
                                            <div class="col-mb-3">
                                                <label for="validationCustom01" class="form-label">Serial Number</label>
                                                <input type="text" class="form-control form-control-sm @error('serialnumber') is-invalid @enderror" value="{{ old('serialnumber') }}" name="serialnumber" id="editserialnumber" autofocus>
                                                @error('serialnumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom01" class="form-label">Vehicle Model</label>
                                                <input type="text" class="form-control form-control-sm @error('vehiclemodel') is-invalid @enderror" value="{{ old('vehiclemodel') }}" name="vehiclemodel" id="editvehiclemodel">
                                                @error('vehiclemodel')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Engine Number</label>
                                                <input type="text" class="form-control form-control-sm @error('engineno') is-invalid @enderror" value="{{ old('engineno') }}" name="engineno" id="editengineno">
                                                @error('engineno')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Brand Model</label>
                                                <input type="text" class="form-control form-control-sm @error('brand') is-invalid @enderror" value="{{ old('brand') }}" name="brand" id="editbrand">
                                                @error('brand')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom02" class="form-label">Description</label>
                                                <input type="text" class="form-control form-control-sm @error('description') is-invalid @enderror" value="{{ old('description') }}" name="description" id="editdescription">
                                                @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom02" class="form-label">Vehicle Type</label>
                                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="type" id="edittype">
                                                    <option value="Agriculture Equipment">Agriculture Equipment</option>
                                                    <option value="Construction Equipment">Construction Equipment</option>
                                                </select>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustomUsername" class="form-label">Branch</label>
                                                <input type="text" class="form-control form-control-sm @error('branch') is-invalid @enderror" value="{{ old('branch') }}" name="editbranch" id="editbranch">
                                                @error('branch')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom03" class="form-label">Warranty Start</label>
                                                <input type="date" class="form-control form-control-sm @error('warrantystart') is-invalid @enderror" value="{{ old('warrantystart') }}" name="warrantystart" id="editwarrantystart">
                                                @error('warrantystart')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom03" class="form-label">Warranty End</label>
                                                <input type="date" class="form-control form-control-sm @error('warrantyend') is-invalid @enderror" value="{{ old('warrantyend') }}" name="warrantyend" id="editwarrantyend">
                                                @error('warrantyend')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomer') is-invalid @enderror" value="{{ old('endcustomer') }}" name="endcustomer" id="editendcustomer">
                                                @error('endcustomer')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">Registration Number</label>
                                                <input type="text" class="form-control form-control-sm @error('registrationnumber') is-invalid @enderror" value="{{ old('registrationnumber') }}" name="registrationnumber" id="editregistrationnumber">
                                                @error('registrationnumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer/Company Name</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomername') is-invalid @enderror" value="{{ old('endcustomername') }}" name="endcustomername" id="editendcustomername">
                                                @error('endcustomername')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer Address</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomeraddress') is-invalid @enderror" value="{{ old('endcustomeraddress') }}" name="endcustomeraddress" id="editendcustomeraddress">
                                                @error('endcustomeraddress')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer City</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomercity') is-invalid @enderror" value="{{ old('endcustomercity') }}" name="endcustomercity" id="editendcustomercity">
                                                @error('endcustomercity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer State/Province</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomerstate') is-invalid @enderror" value="{{ old('endcustomerstate') }}" name="endcustomerstate" id="editendcustomerstate">
                                                @error('endcustomerstate')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">End Customer Country</label>
                                                <input type="text" class="form-control form-control-sm @error('endcustomercountry') is-invalid @enderror" value="{{ old('endcustomercountry') }}" name="endcustomercountry" id="editendcustomercountry">
                                                @error('endcustomercountry')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="validationCustom05" class="form-label">Nav Customer Code</label>
                                                <input type="text" class="form-control form-control-sm @error('navcustomercode') is-invalid @enderror" value="{{ old('navcustomercode') }}" name="navcustomercode" id="editnavcustomercode">
                                                @error('navcustomercode')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary closemodal" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="editsave">Save Changes</button>
                            </div>
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

        // fetchequipment();

        // function fetchequipment() {
        //     $.ajax({
        //         type: "GET",
        //         url: "/FAS/show-equipment",
        //         dataType: "json",
        //         success: function(response) {
        //             var i = 1;
        //             $.each(response.equipment, function(key, item) {
        //                 $('tbody').append(
        //                     '<tr>\
        //                     <td>' + i++ + '</td>\
        //                     <td>' + item.serialnumber + '</td>\
        //                     <td>' + item.vehiclemodel + '</td>\
        //                     <td>' + item.description + '</td>\
        //                     <td>' + item.branch + '</td>\
        //                     <td>\
        //                         <div class="table-actions d-flex align-items-center gap-3 fs-6">\
        //                             <a href="javascript:;" id="view" data-viewid="' + item.id + '" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>\
        //                             <a href="javascript:;" id="edit"  data-editid="' + item.id + '" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>\
        //                             <a href="javascript:;" id="delete" data-deleteid="' + item.id + '" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>\
        //                         </div>\
        //                     </td>\
        //                 </tr>'
        //                 );
        //             })


        //         }
        //     })
        // }


        //view

        $(document).on("click", ".viewtable", function(e) {
            var url = "{{ url('FAS/view-equipment') }}" + "/" + $(e.currentTarget).data("viewid");

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    //console.log(response.viewequipment);
                    $('#viewserialnumber').val(response.viewequipment.serialnumber);
                    $('#viewvehiclemodel').val(response.viewequipment.vehiclemodel);
                    $('#viewbrand').val(response.viewequipment.brand);
                    $('#viewengineno').val(response.viewequipment.engineno);
                    $('#viewdescription').val(response.viewequipment.description);
                    $('#viewtype').val(response.viewequipment.type);
                    $('#viewbranch').val(response.viewequipment.branch);
                    $('#viewwarrantystart').val(response.viewequipment.warrantystart);
                    $('#viewwarrantyend').val(response.viewequipment.warrantyend);
                    $('#viewendcustomer').val(response.viewequipment.endcustomer);
                    $('#viewregistrationnumber').val(response.viewequipment.registrationnumber);
                    $('#viewendcustomername').val(response.viewequipment.endcustomername);
                    $('#viewendcustomeraddress').val(response.viewequipment.endcustomeraddress);
                    $('#viewendcustomercity').val(response.viewequipment.endcustomercity);
                    $('#viewendcustomerstate').val(response.viewequipment.endcustomerstate);
                    $('#viewendcustomercountry').val(response.viewequipment.endcustomercountry);
                    $('#viewnavcustomercode').val(response.viewequipment.navcustomercode);

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
            $("#editModal").modal('hide');
        })


        //edit
        $(document).on("click", "#edit", function(e) {
            var url = "{{ url('FAS/edit-equipment') }}" + "/" + $(e.currentTarget).data("editid");

            $.ajax({
                type: "GET",
                url: url,
                dataType: "json",
                success: function(response) {
                    //console.log(response.viewequipment);
                    $('#editid').val(response.editequipment.id);
                    $('#editserialnumber').val(response.editequipment.serialnumber);
                    $('#editvehiclemodel').val(response.editequipment.vehiclemodel);
                    $('#editbrand').val(response.editequipment.brand);
                    $('#editengineno').val(response.editequipment.engineno);
                    $('#editdescription').val(response.editequipment.description);
                    $('#edittype').val(response.editequipment.type);
                    $('#editbranch').val(response.editequipment.branch);
                    $('#editwarrantystart').val(response.editequipment.warrantystart);
                    $('#editwarrantyend').val(response.editequipment.warrantyend);
                    $('#editendcustomer').val(response.editequipment.endcustomer);
                    $('#editregistrationnumber').val(response.editequipment.registrationnumber);
                    $('#editendcustomername').val(response.editequipment.endcustomername);
                    $('#editendcustomeraddress').val(response.editequipment.endcustomeraddress);
                    $('#editendcustomercity').val(response.editequipment.endcustomercity);
                    $('#editendcustomerstate').val(response.editequipment.endcustomerstate);
                    $('#editendcustomercountry').val(response.editequipment.endcustomercountry);
                    $('#editnavcustomercode').val(response.editequipment.navcustomercode);

                    $("#editModal").modal('show');
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        })
        //save edit
        $('#editsave').click(function(e) {
            e.preventDefault();
            var url = "{{ url('/FAS/update-equipment') }}" + "/" + $('#editid').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'put',
                data: {
                    serialnumber: $('#editserialnumber').val(),
                    vehiclemodel: $('#editvehiclemodel').val(),
                    brand: $('#editbrand').val(),
                    engineno: $('#editengineno').val(),
                    description: $('#editdescription').val(),
                    type: $('#edittype').val(),
                    branch: $('#editbranch').val(),
                    warrantystart: $('#editwarrantystart').val(),
                    warrantyend: $('#editwarrantyend').val(),
                    endcustomer: $('#editendcustomer').val(),
                    registrationnumber: $('#editregistrationnumber').val(),
                    endcustomername: $('#editendcustomername').val(),
                    endcustomeraddress: $('#editendcustomeraddress').val(),
                    endcustomercity: $('#editendcustomercity').val(),
                    endcustomerstate: $('#editendcustomerstate').val(),
                    endcustomercountry: $('#editendcustomercountry').val(),
                    navcustomercode: $('#editnavcustomercode').val(),
                    _token: '{!! csrf_token() !!}'
                },
                success: function(result) {
                    // $("#tablebody").empty();
                    // fetchequipment();
                    window.location.reload();
                    $("#editModal").modal('hide');


                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        })
        //delete
        $(document).on("click", "#delete", function(e) {
            var url = "{{ url('/FAS/delete-equipment') }}" + "/" + $(e.currentTarget).data("deleteid");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'delete',
                data: {
                    _token: '{!! csrf_token() !!}'
                },
                success: function() {
                    // $("#tablebody").empty();
                    // fetchequipment();
                    window.location.reload();
                }
            });
        })

        //search 
        $('#mytbl').DataTable({
            pagingType: 'full_numbers',
        });

    });
</script>

@endsection