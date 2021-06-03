<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{ asset('user2/css/font-awesome.min.css') }}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{ asset('user2/css/bootstrap.min.css') }}">
      <!--animate css-->
      <link rel="stylesheet" href="{{ asset('user2/css/animate-wow.css') }}">
      <!--main css-->
      <link rel="stylesheet" href="{{ asset('user2/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('css/bootstrap-select.min.css') }}">
      <link rel="stylesheet" href="{{ asset('user2/css/slick.min.css') }}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{ asset('user2/css/responsive.css') }}">
   </head>
   <body>
    <div>
        @yield('content')
    </div>
      <!--main js--> 
      <script src="{{ asset('user2/js/jquery-1.12.4.min.js') }}"></script> 
      <!--bootstrap js--> 
      <script src="{{ asset('user2/js/bootstrap.min.js') }}"></script> 
      <script src="{{ asset('user2/js/bootstrap-select.min.js') }}"></script>
      <script src="{{ asset('user2/js/slick.min.js') }}"></script> 
      <script src="{{ asset('user2/js/wow.min.js') }}"></script>
      <!--custom js--> 
      <script src="{{ asset('user2/js/custom.js') }}"></script>
   </body>
</html>