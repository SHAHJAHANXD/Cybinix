@extends('admin.layout')
@section('title')
    Add New Team Member
@endsection

@section('extra-heads')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
                                        alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/dropify/css/dropify.min.css" rel="stylesheet">
@endsection
@section('content')
    <div class="row" style="margin-top: 25px">
        <div class="col-lg-6" style="    margin-left: auto; margin-right: auto;">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Add New Team Member</h4>
                    <form action="{{ route('admin.save.team') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group"><label>Name</label>
                            <div>
                                <input type="text" name="name" class="form-control" required placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="form-group"><label>Designation</label>
                            <div>
                                <select required name="designation" class="select2 form-control mb-3 custom-select"
                                    style="width: 100%; height:36px;">
                                    <optgroup label="Website Development Frontend">
                                        <option value="Html, CSS, Bootstrap Developer">Html, CSS, Bootstrap Developer</option>
                                        <option value="Javascript Developer">Javascript Developer</option>
                                        <option value="React.js Developer">React.js Developer </option>
                                        <option value="Angular Developer">Angular Developer</option>
                                    <optgroup label="Website Development Backend">
                                        <option value="Laravel Developer">Laravel Developer</option>
                                        <option value="CodeIgniter Developer">CodeIgniter Developer</option>
                                        <option value="Node.js Developer">Node.js Developer</option>
                                        <option value="Vue.js Developer">Vue.js Developer</option>
                                        <option value="Core PHP Developer">Core PHP Developer</option>
                                    <optgroup label="Application Development">
                                        <option value="Java Developer">Java Developer</option>
                                        <option value="Kotlin Developer">Kotlin Developer</option>
                                        <option value="React Native Developer">React Native Developer</option>
                                        <option value="Flutter Developer">Flutter Developer</option>
                                        <option value="Python Developer">Python Developer</option>
                                    <optgroup label="Social Media">
                                        <option value="Social Media Expert">Social Media Expert</option>
                                        <option value="SEO Expert">SEO Expert</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"><label>Image</label>
                            <div class="card m-b-30">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">File Upload</h4>
                                    <p class="text-muted m-b-30 font-14"></p><input multiple type="file" name="Image"
                                        id="input-file-now" class="dropify">
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div><button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('extra-scripts')
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
    <script src="assets/plugins/dropzone/dist/dropzone.js"></script>
    <script src="assets/plugins/dropify/js/dropify.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove: 'Supprimer',
                    error: 'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element) {
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element) {
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
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
