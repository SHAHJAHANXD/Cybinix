@extends('admin.layout')
@section('title')
    Get In Touch Messages
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
                    <h4 class="mt-0 header-title">Get In Touch Messages</h4>
                  <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="text-center">Sr.No</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Messages</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @isset($message)
                                @foreach ($message as $user)
                                    <tr>
                                        <td class="text-center">
                                            {{$i++}}
                                        </td>
                                        <td class="text-center">{{ $user->name }}</td>
                                        <td class="text-center">{{ $user->email }}</td>
                                        <td class="text-center">{{ $user->message }}</td>
                                    </tr>
                                @endforeach
                            @endisset
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-scripts')

    <script src="assets/plugins/sweet-alert2/sweetalert2.min.js"></script>
    <script src="assets/pages/sweet-alert.init.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('panel') }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/jszip.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/buttons.colVis.min.js"></script>

    <script src="{{ asset('panel') }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('panel') }}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('panel') }}/assets/pages/datatables.init.js"></script>
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
