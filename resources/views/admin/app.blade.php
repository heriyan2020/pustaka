<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>PUSTAKA</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dashboard/images/headicon.png')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <div id="main-wrapper">
        @include('admin.templates.header')
        @include('admin.templates.sidebar')
        @yield('content')
        @yield('book')
        @yield('tambah')
        @yield('update')
        @yield('student')
        @yield('create')
        @yield('edit')
        @yield('borrow')
        @yield('bcreate')
    </div>
    
    <script src="{{asset('dashboard/plugins/common/common.min.js')}}"></script>
    <script src="{{asset('dashboard/js/custom.min.js')}}"></script>
    <script src="{{asset('dashboard/js/settings.js')}}"></script>
    <script src="{{asset('dashboard/js/gleek.js')}}"></script>
    <script src="{{asset('dashboard/js/styleSwitcher.js')}}"></script>

</body>

</html>
