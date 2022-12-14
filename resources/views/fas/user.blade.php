@extends('fas.layout.mainlayout')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css">
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dasboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item active" aria-current="page">Users List</li>
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
                            <form class="row g-3" method="POST" action="{{ url('/FAS/adduser') }}">
                                @csrf
                                <div class="col-12">
                                    <label class="form-label">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Fullname">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Example@email.com">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Username</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="username" placeholder="Username">
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">User Type</label>
                                    <select id="usertype" class="form-control form-select @error('usertype') is-invalid @enderror" name="usertype" value="{{ old('usertype') }}">
                                        <option value="1">Administrator</option>
                                        <option value="2">Supervisor</option>
                                    </select>
                                    @error('usertype')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
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
                                <table id="mytbl" class="table align-middle col-7 col-lg-5">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>User Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>@if ($user->usertype == 1)
                                                Administrator
                                                @else
                                                Supervisor
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-3 fs-6">
                                                    <a href="javascript:;" id="view" data-toggle="modal" data-name="{{ $user->name }}" data-email="{{ $user->email }}" data-username="{{ $user->username }}" data-usertype="@if ($user->usertype == 1) Administrator @else Supervisor @endif" data-target="#viewModal" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="View detail" aria-label="Views"><i class="bi bi-eye-fill"></i></a>
                                                    <a href="javascript:;" id="edit" data-toggle="modal" data-eid="{{ $user->id }}" data-ename="{{ $user->name }}" data-eemail="{{ $user->email }}" data-eusername="{{ $user->username }}" data-eusertype="{{ $user->usertype }}" data-target="#editModal" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                                                    <form action="{{ url('/FAS/delete-user/'.$user->id) }}" method="POST">
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
            </div>
            <!--end row-->
        </div>
    </div>

</main>
<!--end page main-->

<!-- View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModalLabel"> Users Details</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <label class="form-label">Name</label>
                    <label class="form-control" id="nm"></label>
                </div>
                <br>
                <div class="col-12">
                    <label class="form-label">Email</label>
                    <label class="form-control" id="em"></label>
                </div>
                <br>
                <div class="col-12">
                    <label class="form-label">Username</label>
                    <label class="form-control" id="un"></label>
                </div>
                <br>
                <div class="col-12">
                    <label class="form-label">User Type</label>
                    <label class="form-control" id="ut"></label>

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
                <h5 class="modal-title"> Update User</h5>
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
                    <div class="col-12">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" id="eem">
                    </div>
                    <br>
                    <div class="col-12">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" id="eun">
                    </div>
                    <br>
                    <div class="col-12">
                        <label class="form-label">User Type</label>
                        <select id="eut" class="form-control form-select " name="eut">
                            <option value="1">Administrator</option>
                            <option value="2">Supervisor</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-12">
                        <label class="form-label">Password</label>
                        <input id="psswrd" type="password" class="form-control " name="password" autocomplete="new-password" placeholder="***************">
                    </div>
                    <br>
                    <div class="col-12">
                        <label class="form-label">Confirm Password</label>
                        <input id="psswrd-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="Confirm Password">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
                    <button type="button" class="btn btn-primary" id="editsave">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('script')
<script>
    $(document).ready(function() {
        //view
        $(document).on("click", "#view", function(e) {
            var getnameFromRow = $(e.currentTarget).data("name");
            var getemailFromRow = $(e.currentTarget).data("email");
            var getusernameFromRow = $(e.currentTarget).data("username");
            var getusertypeFromRow = $(e.currentTarget).data("usertype");
            document.getElementById('nm').innerHTML = getnameFromRow;
            document.getElementById('em').innerHTML = getemailFromRow;
            document.getElementById('un').innerHTML = getusernameFromRow;
            document.getElementById('ut').innerHTML = getusertypeFromRow;
        })

        //edit
        $(document).on("click", "#edit", function(e) {
            var getidFromRow = $(e.currentTarget).data("eid");
            var getnameFromRow = $(e.currentTarget).data("ename");
            var getemailFromRow = $(e.currentTarget).data("eemail");
            var getusernameFromRow = $(e.currentTarget).data("eusername");
            var getusertypeFromRow = $(e.currentTarget).data("eusertype");
            $('#eid').val(getidFromRow);
            $('#enm').val(getnameFromRow);
            $('#eem').val(getemailFromRow);
            $('#eun').val(getusernameFromRow);
            $('#eut').val(getusertypeFromRow);
        })
        //save edit
        $('#editsave').click(function(e) {
            e.preventDefault();
            var url = "{{ url('/FAS/update-user') }}" + "/" + $('#eid').val();
            if ($('#psswrd').val() == $('#psswrd-confirm').val() || $('#psswrd').val() == " ") {
                var password = $('#psswrd').val();

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
                        email: $('#eem').val(),
                        username: $('#eun').val(),
                        usertype: $('#eut').val(),
                        password: password,
                        _token: '{!! csrf_token() !!}'
                    },
                    success: function(result) {
                        window.location.reload();

                    },
                    error: function(data, textStatus, errorThrown) {
                        console.log(data);

                    },
                });
            } else {
                alert("Password not match!");
            }
        })

        //search 
        $('#mytbl').DataTable({
            pagingType: 'full_numbers',
        });

    });
</script>

@endsection