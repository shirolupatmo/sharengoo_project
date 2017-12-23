<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  @include('layouts/include-css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts/include-header')
  @include('layouts/include-menu')

  @yield('content')

  @include('layouts/include-footer')
  @include('layouts/include-controlsidebar')

</div>
<!-- ./wrapper -->

@include('layouts/include-js')

</body>
</html>
