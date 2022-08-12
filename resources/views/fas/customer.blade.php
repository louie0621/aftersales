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
                    <li class="breadcrumb-item active" aria-current="page"> Customers Master List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive mt-3">
                <table class="table align-middle table-sm" id="mytbl">
                    <thead class="table-secondary">
                        <tr>
                            <th>#</th>
                            <th>Customers Code</th>
                            <th>Name</th>
                            <th>City</th>
                            <th>Phone No.</th>
                            <th>Contact Person</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->customercode }}</td>
                            <td>{{ $data->city }}</td>
                            <td>{{ $data->customername}}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>
                                <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                    <a href="javascript:;" id="view" data-toggle="modal" data-target="#viewModal" data-viewcustomercode="{{ $data->customercode }}" data-viewcustomername="{{ $data->customername }}" data-viewaddress="{{ $data->address }}" data-viewcity="{{ $data->city }}" data-viewtin="{{ $data->tin }}" data-viewstate="{{ $data->state }}" data-viewphone="{{ $data->phone }}" data-viewcontact="{{ $data->contact }}" data-viewemail="{{ $data->email }}" data-viewchannelgroup="{{ $data->channelgroup }}" data-viewpaymenttermscode="{{ $data->paymenttermscode }}" data-viewunits="{{ $data->units }}" data-viewcreditlimit="{{ $data->creditlimit }}" data-viewbrand="{{ $data->brand }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>
                                    <a href="javascript:;" id="edit" data-toggle="modal" data-target="#editModal" data-editcustomercode="{{ $data->customercode }}" data-editcustomername="{{ $data->customername }}" data-editaddress="{{ $data->address }}" data-editcity="{{ $data->city }}" data-edittin="{{ $data->tin }}" data-editstate="{{ $data->state }}" data-editphone="{{ $data->phone }}" data-editcontact="{{ $data->contact }}" data-editemail="{{ $data->email }}" data-editchannelgroup="{{ $data->channelgroup }}" data-editpaymenttermscode="{{ $data->paymenttermscode }}" data-editunits="{{ $data->units }}" data-editcreditlimit="{{ $data->creditlimit }}" data-editbrand="{{ $data->brand }}" data-editid="{{ $data->id }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
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
                                <h5 class="modal-title" id="viewModalLabel"> Customer detials</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-xl-12 mx-auto">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3">
                                            <div class="col-mb-3">
                                                <label for="customercode" class="form-label">Customers Code</label>
                                                <label class="form-control" id="view-customercode"></label>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="customername" class="form-label">Customer Name</label>
                                                <label class="form-control" id="view-customername"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <label class="form-control" id="view-address"></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city" class="form-label">City</label>
                                                <label class="form-control" id="view-city"></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state" class="form-label">State/Province</label>
                                                <label class="form-control" id="view-state"></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tin" class="form-label">TIN</label>
                                                <label class="form-control" id="view-tin"></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="phone" class="form-label">Phone No.</label>
                                                <label class="form-control" id="view-phone"></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="contact" class="form-label">Contact Person</label>
                                                <label class="form-control" id="view-contact"></label>
                                            </div>
                                            <div class="col-md-3">
                                                <label for="email" class="form-label">Email</label>
                                                <label class="form-control" id="view-email"></label>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="channelgroup" class="form-label">Channel Group</label>
                                                <label class="form-control" id="view-channelgroup"></label>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="paymenttermscode" class="form-label">Payment Terms Code</label>
                                                <label class="form-control" id="view-paymenttermscode"></label>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="units" class="form-label">Units</label>
                                                <label class="form-control" id="view-units"></label>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="" class="form-label">Credit Limit (LCY)</label>
                                                <label class="form-control" id="view-creditlimit"></label>
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="" class="form-label">Brand</label>
                                                <label class="form-control" id="view-brand"></label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel"> Update Customer detials</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-xl-12 mx-auto">
                                    <div class="p-4 border rounded">
                                        <form class="row g-3">
                                            <input type="text" class="form-control" id="edit-id" hidden>
                                            <div class="col-mb-3">
                                                <label for="customercode" class="form-label">Customers Code</label>
                                                <input type="text" class="form-control" id="edit-customercode">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="customername" class="form-label">Customer Name</label>
                                                <input type="text" class="form-control" id="edit-customername">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="edit-address">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="edit-city">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="state" class="form-label">State/Province</label>
                                                <input type="text" class="form-control" id="edit-state">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="tin" class="form-label">TIN</label>
                                                <input type="text" class="form-control" id="edit-tin">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="phone" class="form-label">Phone No.</label>
                                                <input type="text" class="form-control" id="edit-phone">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="contact" class="form-label">Contact Person</label>
                                                <input type="text" class="form-control" id="edit-contact">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="edit-email">
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="channelgroup" class="form-label">Channel Group</label>
                                                <input type="text" class="form-control" id="edit-channelgroup">
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="paymenttermscode" class="form-label">Payment Terms Code</label>
                                                <input type="text" class="form-control" id="edit-paymenttermscode">
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="units" class="form-label">Units</label>
                                                <input type="text" class="form-control" id="edit-units">
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="" class="form-label">Credit Limit (LCY)</label>
                                                <input type="text" class="form-control" id="edit-creditlimit">
                                            </div>
                                            <div class="col-mb-3">
                                                <label for="" class="form-label">Brand</label>
                                                <input type="text" class="form-control" id="edit-brand">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
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
        //view
        $(document).on("click", "#view", function(e) {
            var a = $(e.currentTarget).data("viewcustomercode");
            var b = $(e.currentTarget).data("viewcustomername");
            var c = $(e.currentTarget).data("viewaddress");
            var d = $(e.currentTarget).data("viewcity");
            var f = $(e.currentTarget).data("viewstate");
            var g = $(e.currentTarget).data("viewtin");
            var h = $(e.currentTarget).data("viewphone");
            var i = $(e.currentTarget).data("viewcontact");
            var j = $(e.currentTarget).data("viewemail");
            var k = $(e.currentTarget).data("viewchannelgroup");
            var l = $(e.currentTarget).data("viewpaymenttermscode");
            var m = $(e.currentTarget).data("viewunits");
            var n = $(e.currentTarget).data("viewcreditlimit");
            var o = $(e.currentTarget).data("viewbrand");
            document.getElementById('view-customercode').innerHTML = a;
            document.getElementById('view-customername').innerHTML = b;
            document.getElementById('view-address').innerHTML = c;
            document.getElementById('view-city').innerHTML = d;
            document.getElementById('view-state').innerHTML = f;
            document.getElementById('view-tin').innerHTML = g;
            document.getElementById('view-phone').innerHTML = h;
            document.getElementById('view-contact').innerHTML = i;
            document.getElementById('view-email').innerHTML = j;
            document.getElementById('view-channelgroup').innerHTML = k;
            document.getElementById('view-paymenttermscode').innerHTML = l;
            document.getElementById('view-units').innerHTML = m;
            document.getElementById('view-creditlimit').innerHTML = n;
            document.getElementById('view-brand').innerHTML = o;
        })

        //edit
        $(document).on("click", "#edit", function(e) {
            var a = $(e.currentTarget).data("editcustomercode");
            var b = $(e.currentTarget).data("editcustomername");
            var c = $(e.currentTarget).data("editaddress");
            var d = $(e.currentTarget).data("editcity");
            var f = $(e.currentTarget).data("editstate");
            var g = $(e.currentTarget).data("edittin");
            var h = $(e.currentTarget).data("editphone");
            var i = $(e.currentTarget).data("editcontact");
            var j = $(e.currentTarget).data("editemail");
            var k = $(e.currentTarget).data("editchannelgroup");
            var l = $(e.currentTarget).data("editpaymenttermscode");
            var m = $(e.currentTarget).data("editunits");
            var n = $(e.currentTarget).data("editcreditlimit");
            var o = $(e.currentTarget).data("editbrand");
            var p = $(e.currentTarget).data("editid");
            $('#edit-customercode').val(a);
            $('#edit-customername').val(b);
            $('#edit-address').val(c);
            $('#edit-city').val(d);
            $('#edit-state').val(f);
            $('#edit-tin').val(g);
            $('#edit-phone').val(h);
            $('#edit-contact').val(i);
            $('#edit-email').val(j);
            $('#edit-channelgroup').val(k);
            $('#edit-paymenttermscode').val(l);
            $('#edit-units').val(m);
            $('#edit-creditlimit').val(n);
            $('#edit-brand').val(o);
            $('#edit-id').val(p);
        })
        //save edit
        $('#editsave').click(function(e) {
            e.preventDefault();
            var url = "{{ url('/FAS/update-customer') }}" + "/" + $('#edit-id').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'put',
                data: {
                    customercode: $('#edit-customercode').val(),
                    customername: $('#edit-customername').val(),
                    address: $('#edit-address').val(),
                    city: $('#edit-city').val(),
                    state: $('#edit-state').val(),
                    tin: $('#edit-tin').val(),
                    phone: $('#edit-phone').val(),
                    contact: $('#edit-contact').val(),
                    email: $('#edit-email').val(),
                    channelgroup: $('#edit-channelgroup').val(),
                    paymenttermscode: $('#edit-paymenttermscode').val(),
                    units: $('#edit-units').val(),
                    creditlimit: $('#edit-creditlimit').val(),
                    brand: $('#edit-brand').val(),
                    _token: '{!! csrf_token() !!}'
                },
                success: function(result) {
                    window.location.reload();

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        })
        //delete
        $(document).on("click", "#delete", function(e) {
            var url = "{{ url('/FAS/delete-customer') }}" + "/" + $(e.currentTarget).data("deleteid");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'delete',
                data: {
                    customercode: $('#edit-customercode').val(),
                    _token: '{!! csrf_token() !!}'
                },
                success: function(result) {
                    window.location.reload();

                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                },
            });
        })

        //search 
        $('#mytbl').DataTable({
            pagingType: 'full_numbers',
        });

    });
</script>

@endsection