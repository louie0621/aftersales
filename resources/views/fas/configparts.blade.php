@extends('fas.layout.mainlayout')

@section('content')
<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dasboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Parts List</li>
                </ol>
            </nav>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-lg-4 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <form class="row g-3" method="POST" action="{{ url('/FAS/add-parts') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Part Number</label>
                                    <input type="text" class="form-control @error('part_number') is-invalid @enderror" name="part_number" value="{{ old('part_number') }}" autofocus>
                                    @error('part_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description</label>
                                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" autofocus>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Item category code</label>
                                    <input type="text" class="form-control @error('item_category_code') is-invalid @enderror" name="item_category_code" value="{{ old('item_category_code') }}" autofocus>
                                    @error('item_category_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">UOM</label>
                                    <input type="text" class="form-control @error('uom') is-invalid @enderror" name="uom" value="{{ old('uom') }}" autofocus>
                                    @error('uom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">SRP</label>
                                    <input type="text" class="form-control @error('srp') is-invalid @enderror numberonly" name="srp" value="{{ old('srp') }}" autofocus>
                                    @error('srp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 d-flex">
                    <div class="card border shadow-none w-100">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-middle" id="mytbl">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Parts no.</th>
                                            <th>Description</th>
                                            <th>Item Category Code</th>
                                            <th>UOM</th>
                                            <th>SRP</th>
                                            <th>Availability</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-wrap">
                                        @foreach($parts as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->part_number }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>{{ $data->item_category_code }}</td>
                                            <td>{{ $data->uom}}</td>
                                            <td>{{ $data->srp}}</td>
                                            <td>@if( $data->status > 0 )
                                                <span class="badge rounded-pill alert-success">Available</span>
                                                @else
                                                <span class="badge rounded-pill alert-danger">Not Available</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a href="javascript:;" id="edit" data-editid="{{ $data->id }}" data-editpart="{{ $data->part_number }}" data-editdes="{{ $data->description }}" data-edititem="{{ $data->item_category_code }}" data-edituom="{{ $data->uom }}" data-editsrp="{{ $data->srp }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                    <a href="javascript:;" id="delete" data-deleteid="{{ $data->id }}" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete"><i class="bi bi-trash-fill"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" role="dialog" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Update Parts</h5>
                                <button type="button" class="btn-close closemodal" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="myForm">
                                <div class="modal-body">
                                    <input type="text" id="eid" hidden>
                                    <div class="col-12">
                                        <label class="form-label">Part Number</label>
                                        <input type="text" class="form-control" id="epart">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label">Description</label>
                                        <input type="text" class="form-control" id="edes">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label">Item Category Code</label>
                                        <input type="text" class="form-control" id="eitemcategorycode">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label">UOM</label>
                                        <input type="text" class="form-control" id="euom">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label">SRP</label>
                                        <input type="text" class="form-control" id="esrp">
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <label class="form-label">Availability</label>
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="editavail">
                                            <option value="0">Not Available</option>
                                            <option value="1">Available</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary closemodal">Close</button>
                                    <button type="button" class="btn btn-primary" id="editsave">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <!--end row-->
        </div>
    </div>

</main>
<!--end page main-->
@endsection


@section('script')

<script>
    $(document).ready(function() {


        $(document).on("click", "#edit", function(e) {

            var getidFromRow = $(e.currentTarget).data("editid");
            var getpartFromRow = $(e.currentTarget).data("editpart");
            var getdesFromRow = $(e.currentTarget).data("editdes");
            var getitemFromRow = $(e.currentTarget).data("edititem");
            var getuomFromRow = $(e.currentTarget).data("edituom");
            var getsrpFromRow = $(e.currentTarget).data("editsrp");

            $('#eid').val(getidFromRow);
            $('#epart').val(getpartFromRow);
            $('#edes').val(getdesFromRow);
            $('#eitemcategorycode').val(getitemFromRow);
            $('#euom').val(getuomFromRow);
            $('#esrp').val(getsrpFromRow);
            $("#editModal").modal('show');
        })

        //close btn
        $(document).on("click", ".closemodal", function(e) {
            $("#editModal").modal('hide');
        })

        $('#editsave').click(function(e) {
            e.preventDefault();
            var url = "{{ url('FAS/parts') }}" + "/" + $('#eid').val();
            if ($('#epart').val().length > 0) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url: url,
                    method: 'put',
                    data: {
                        part_number: $('#epart').val(),
                        description: $('#edes').val(),
                        item_category_code: $('#eitemcategorycode').val(),
                        uom: $('#euom').val(),
                        srp: $('#esrp').val(),
                        status: $("#editavail").children("option:selected").val(),
                        _token: '{!! csrf_token() !!}'
                    },
                    success: function(result) {
                        window.location.reload();
                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(data);

                    }
                });
            } else {
                $('#epart').addClass("is-invalid")

            }

        })

        //delete
        $(document).on("click", "#delete", function(e) {
            var url = "{{ url('/FAS/deleteparts') }}" + "/" + $(e.currentTarget).data("deleteid");

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
                success: function(response) {
                    // $("#tablebody").empty();
                    // fetchequipment();
                    window.location.reload();
                    console.log(data);
                }
            });
        })

        //search 
        var table = $('#mytbl').DataTable({
            pagingType: 'full_numbers',
        });
    });
</script>

@endsection