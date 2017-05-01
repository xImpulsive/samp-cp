<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SAMP-CP</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link href="{{ URL::asset("assets/front/css/bootstrap.min.css") }}" rel="stylesheet">
    <link href="{{ URL::asset("assets/front/css/mdb.min.css") }}" rel="stylesheet">
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #304a74;
        }

        footer.page-footer {
            background-color: #304a74;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #4285F4;
            }
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        /* Carousel*/

        .carousel {
            height: 50%;
        }

        @media (max-width: 776px) {
            .carousel {
                height: 100%;
            }
        }

        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        /*Caption*/

        .flex-center {
            color: #fff;
        }
    </style>
</head>
<body>
@include("layout::header")

@yield("absolute-content")
@if(View::hasSection('content'))
    <div class="container">
        <div class="row">
            @if( $options->get("UCP_USE_SIDEBAR", 0) == 1 )
                <div class="col-md-9">
                    {!! Injector::event("content-before") !!}

                    @yield("content")
                    {!! Injector::event("content") !!}

                    {!! Injector::event("content-after") !!}
                </div>
                <div class="col-md-3">
                    <div id="sidebar">
                        <h2>Sidebar etc.</h2>
                        {!! Injector::event("sidebar-before") !!}

                        @yield("sidebar")
                        {!! Injector::event("sidebar") !!}

                        {!! Injector::event("sidebar-after") !!}
                    </div>

                </div>
            @else
                <div class="col-md-12">
                    @yield("content")
                </div>
            @endif
        </div>

    </div>
@endif

@include("layout::footer")
<script type="text/javascript" src="{{ URL::asset("assets/front/js/jquery-2.2.3.min.js") }}"></script>
<script type="text/javascript" src="{{ URL::asset("assets/front/js/tether.min.js") }}"></script>
<script type="text/javascript" src="{{ URL::asset("assets/front/js/bootstrap.min.js") }}"></script>
<script type="text/javascript" src="{{ URL::asset("assets/front/js/mdb.min.js") }}"></script>
<script>
    new WOW().init();
</script>
</body>
</html>