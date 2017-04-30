<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@lang('acp.title')</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ URL::asset("bootstrap/css/bootstrap.min.css") }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::asset("adminlte/css/AdminLTE.min.css") }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ URL::asset("adminlte/css/skins/_all-skins.min.css") }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom Styles -->
    @yield("styles")

    <!-- Custom Head-Scripts -->
    @yield("head-scripts")
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

    @include("acp.layout.header")

    @include("acp.layout.sidebar")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php /*
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>*/ ?>

        <!-- Main content -->
        <section class="content">
            @if( Session::has("success") )
                <div class="alert alert-success">
                    {{ Session::get("success") }}
                </div>
            @endif

            @yield("content")
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include("acp.layout.footer")

</div>

<!-- jQuery 2.2.3 -->
<script src="{{ URL::asset("adminlte/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset("bootstrap/js/bootstrap.min.js") }}"></script>
<!-- SlimScroll -->
<script src="{{ URL::asset("adminlte/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ URL::asset("adminlte/plugins/fastclick/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset("adminlte/js/app.min.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset("adminlte/js/demo.js") }}"></script>
@yield("scripts")
</body>
</html>