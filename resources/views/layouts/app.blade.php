<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <title>{{ config('app.name', 'Funpacol') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />


    <!-- Custom styles for this template -->
    <link href=" {{ asset('css/normalize.css') }} " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href=" {{ asset('css/funpacol.css') }} " rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

@include('layouts.header')

@if(Auth::check())
    @include('layouts.nav')
@endif



<div class="sections">
    <div class="section">
        @yield('content')
    </div>
</div>


@include('layouts.footer')

<script src=" {{ asset('js/jquery.min.js') }} "></script>


<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
<!-- Scripts -->
<script src="{{asset('/js/app.js')}}"></script>

<!-- Placed at the end of the document so the pages load faster -->
<script src=" {{ asset('js/funpacol.js') }} "></script>

<script src=" {{ asset('js/bootstrap.min.js') }} "></script>


<script src="{{asset('https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js')}}"></script>

@yield('js')

<!--  Charts Plugin -->
<script src="{{asset('assets/js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{{asset('assets/js/material-dashboard.js')}}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('assets/js/demo.js')}}"></script>

</body>


</html>
