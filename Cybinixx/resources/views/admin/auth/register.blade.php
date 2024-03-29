<!DOCTYPE html>
<html>

<head>
    <title>Cybinix - User Register</title>
    <link rel="shortcut icon" href="{{asset('admin')}}/assets/images/favicon.ico">
    <link href="{{asset('admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('admin')}}/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
    alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</head>

<body class="fixed-left">
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mt-0 m-b-15">
                    <a  class="logo logo-admin"><b><h2>Admin Register</h2></b></a>
                </h3>
                <div class="p-3">
                    <form  action="/save" method="POST">
                        @csrf
                        <div class="form-group row">
                            <div class="col-12"><input class="form-control" type="text"  name="name" placeholder="Name"> @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif</div>

                        </div>
                        <div class="form-group row">
                            <div class="col-12"><input class="form-control" type="email"  name="email" placeholder="Email"> @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif</div>

                        </div>

                        <div class="form-group row">
                            <div class="col-12"><input class="form-control" type="password" name="password" placeholder="Password"> @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif</div>

                        </div>
                        <div class="form-group row">
                            <div class="col-12"><input class="form-control" name="password_confirmation" type="password" placeholder="Confirm Password">@if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                                @endif</div>

                        </div>

                        <div class="form-group row">
                            <div class="col-12">
                                <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-muted">Terms and Conditions</a></label></div>
                            </div>
                        </div>
                        <div class="form-group text-center row m-t-20">
                            <div class="col-12"><button class="btn btn-danger btn-block waves-effect waves-light" type="submit">Register</button></div>
                        </div>
                        <div class="form-group text-center row m-t-20">
                            <div class="col-12"><a class="btn btn-danger btn-block waves-effect waves-light" href="{{ url('auth/linkedin') }}"><i class="mdi mdi-linkedin-box"></i> Sign in with LinkedIn</a></div>
                        </div>
                        <div class="form-group text-center row m-t-20">
                            <div class="col-12"><a class="btn btn-danger btn-block waves-effect waves-light" href="{{ url('auth/google') }}" ><i class="mdi mdi-google"></i>  Sign in with Google</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin')}}/assets/js/jquery.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/modernizr.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/detect.js"></script>
    <script src="{{asset('admin')}}/assets/js/fastclick.js"></script>
    <script src="{{asset('admin')}}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{asset('admin')}}/assets/js/jquery.blockUI.js"></script>
    <script src="{{asset('admin')}}/assets/js/waves.js"></script>
    <script src="{{asset('admin')}}/assets/js/jquery.nicescroll.js"></script>
    <script src="{{asset('admin')}}/assets/js/jquery.scrollTo.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/app.js"></script>

<script>
    @if (Session::has('message'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true
        }
        toastr.success("{{ session('message') }}");
    @endif
</script>
</body>

</html>
