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
                    <li class="breadcrumb-item active" aria-current="page">Failure Code List</li>
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
                            <form class="row g-3" method="POST" action="{{ url('/FAS/add-failure-code') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Failure Code</label>
                                    <input type="text" class="form-control @error('failure_code') is-invalid @enderror" name="failure_code" value="{{ old('failure_code') }}" autofocus>
                                    @error('failure_code')
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
                                            <th>Defect Code</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-wrap">
                                        @foreach($fc as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->failure_code }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a href="javascript:;" id="edit" data-editid="{{ $data->id }}" data-editview="{{ $data->failure_code }}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
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
                                <h5 class="modal-title"> Update Defect Code</h5>
                                <button type="button" class="btn-close closemodal" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="myForm">
                                <div class="modal-body">
                                    <input type="text" id="eid" hidden>
                                    <div class="col-12">
                                        <label class="form-label">Defect Code</label>
                                        <input type="text" class="form-control" id="enm">
                                    </div>
                                    <br>
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
            var getdealerFromRow = $(e.currentTarget).data("editview");
            $('#eid').val(getidFromRow);
            $('#enm').val(getdealerFromRow);
            $("#editModal").modal('show');
        })

        //close btn
        $(document).on("click", ".closemodal", function(e) {
            $("#editModal").modal('hide');
        })

        $('#editsave').click(function(e) {
            e.preventDefault();
            var url = "{{ url('FAS/add-failure-code') }}" + "/" + $('#eid').val();
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                url: url,
                method: 'PUT',
                data: {
                    defect_code:$('#enm').val(),
                    _token: '{!! csrf_token() !!}'
                },
                success: function(result) {
                    window.location.reload();
                },
                error: function(data, textStatus, errorThrown) {
                    console.log(data);

                }
            });


        })

        //delete
        $(document).on("click", "#delete", function(e) {
            var url = "{{ url('/FAS/deletedc') }}" + "/" + $(e.currentTarget).data("deleteid");
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