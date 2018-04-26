<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('_source/vendors/dataTables/datatables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('_source/vendors/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('_source/vendors/trumbowyg-master/dist/ui/trumbowyg.min.css')}}" rel="stylesheet">
    <link href="{{ asset('_source/vendors/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <link href="{{ asset('_source/css/main.css') }}" rel="stylesheet">

    <script src="{{ asset('_source/js/jquery.min.js') }}"></script>

    <!-- Start: formBuilder -->
    <link href="{{ asset('_source/vendors/formBuilder/demo/assets/css/demo.css')}}" rel="stylesheet">
    <!-- End: formBuilder -->
</head>
<body>
<div id="app">

    <div class="wrapper">
        @include('admin.partials.nav')
        <div class="main-wrapper clearfix">
            @include('admin.partials.menu')
            <div class="aside">
                <div class="side-left-main pages">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('_source/vendors/trumbowyg-master/dist/trumbowyg.js')}}"></script>
    <script src="{{ asset('_source/vendors/ace-builder/src-noconflict/ace.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{ asset('_source/vendors/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('_source/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('_source/vendors/magnific-popup/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('_source/js/main.js') }}"></script>

    <!-- Start: formBuilder -->
    <script src="{{ asset('_source/vendors/formBuilder/demo/assets/js/vendor.js')}} "></script>
    <script src="{{ asset('_source/vendors/formBuilder/demo/assets/js/form-builder.min.js')}}"></script>
    <script src="{{ asset('_source/vendors/formBuilder/demo/assets/js/form-render.min.js')}}"></script>
    <script src="{{ asset('_source/vendors/formBuilder/demo/assets/js/test.js')}}"></script>
    <!-- End: formBuilder -->
</div>
</body>
</html>

