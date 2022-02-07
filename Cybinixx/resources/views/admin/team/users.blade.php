@extends('admin.layout')
@section('title')
    All Team
@endsection

@section('extra-heads')
    <link href="assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
                        alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection
@section('content')
    <div class="row" style="margin-top: 25px">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">All Team</h4>
                    <h4 style="text-align: right"><a href="{{ route('admin.add.team') }}"
                            class="btn btn-success waves-effect waves-light">Add New Team Member</a></h4>
                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                                <th class="text-center">Delete Member</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @isset($user)
                                @foreach ($user as $user)
                                    <tr>
                                        <td class="text-center">
                                            {{$i++}}
                                        </td>
                                        <td class="text-center">{{ $user->name }}</td>
                                        <td class="text-center">{{ $user->designation }}</td>
                                        <td class="text-center"><a href="/images/{{ $user->Image }}">View Image</a></td>
                                        @if ($user->status == 1)
                                            <td class="text-center"><span class="badge badge-success">Active</span></td>
                                        @endif
                                        @if ($user->status == 0)
                                            <td class="text-center"><span class="badge badge-danger">Blocked</span></td>
                                        @endif
                                        <td class="text-center">
                                            <a href="/team-status-active/{{ $user->id }}"
                                                class="badge badge-success text-white" style="cursor: pointer;">Active</a>

                                            <a href="/team-status-block/{{ $user->id }}"
                                                class="badge badge-danger text-white" style="cursor: pointer;">Block</a>

                                        </td>
                                        <td class="text-center">
                                            <a href="/admin/delete-team-member/{{ $user->id }}"
                                                class="btn btn-danger text-white" style="cursor: pointer;">Delete</a>

                                        </td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>

@endsection

@section('extra-scripts')
    <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="assets/pages/sweet-alert.init.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('panel') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('panel') }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="{{ asset('panel') }}/assets/pages/datatables.init.js"></script>
    <!-- App js -->
    <script src="{{ asset('panel') }}/assets/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable2').DataTable();
        });
    </script>
    <script>
        @if (Session::has('success'))
            toastr.options =
            {
            "closeButton" : true,
            "progressBar" : true
            }
            toastr.success("{{ session('success') }}");
        @endif
    </script>
@endsection
