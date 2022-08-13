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
                    <li class="breadcrumb-item active" aria-current="page">Technicians List</li>
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
                            <form class="row g-3" method="POST" action="{{ url('/FAS/addtechnician') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Fullname" autofocus>
                                    @error('name')
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
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($technician as $data)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a href="javascript:;" class="text-primary" id="view" data-toggle="modal" data-name="{{ $data->name }}" data-position="{{ $data->position }}" data-target="#viewModal" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="javascript:;" id="edit" data-toggle="modal" data-eid="{{ $data->id }}" data-ename="{{ $data->name }}" data-eposition="{{ $data->position }}" data-target="#editModal" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                    <form action="{{ url('/FAS/delete-technician/'.$data->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" style="outline: none; border-color: white; border-style: none; background-color: white;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Delete" aria-label="Delete"><i class="bi bi-trash-fill"></i></button>
                                                    </form>
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


                <!-- View Modal -->
                <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewModalLabel"> Technician Details</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <label class="form-control" id="nm"></label>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" role="dialog" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"> Update Technician</h5>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="myForm">
                                <div class="modal-body">
                                    <input type="text" id="eid" hidden>
                                    <div class="col-12">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" id="enm">
                                    </div>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
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

        $(document).on("click", "#view", function(e) {
            var getnameFromRow = $(e.currentTarget).data("name");
            var getpositionFromRow = $(e.currentTarget).data("position");
            document.getElementById('nm').innerHTML = getnameFromRow;
            document.getElementById('pos').innerHTML = getpositionFromRow;

        })


        $(document).on("click", "#edit", function(e) {
            var getidFromRow = $(e.currentTarget).data("eid");
            var getnameFromRow = $(e.currentTarget).data("ename");
            var getpositionFromRow = $(e.currentTarget).data("eposition");
            $('#eid').val(getidFromRow);
            $('#enm').val(getnameFromRow);
            $('#position').val(getpositionFromRow);
        })

        $('#editsave').click(function(e) {
            e.preventDefault();
            var url = "{{ url('/FAS/update-technician') }}" + "/" + $('#eid').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                url: url,
                method: 'put',
                data: {
                    name: $('#enm').val(),
                    position: $('#position').val(),
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
        var table = $('#mytbl').DataTable({
            pagingType: 'full_numbers',
        });
        table.buttons().container()
            .appendTo('#example_wrapper .col-md-5:eq(0)');

    });
</script>

@endsection