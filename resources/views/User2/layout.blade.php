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
   <header id="header" class="top-head">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-sm-12 left-rs">
                  <div class="navbar-header">
                     <button type="button" id="top-menu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
                     <span class="sr-only">Toggle navigation</span> 
                     <span class="icon-bar"></span> 
                     <span class="icon-bar"></span> 
                     <span class="icon-bar"></span> 
                     </button>
                     <a href="index.html" class="navbar-brand">ELIB<img src="{{("user2/images/logo.png")}}" alt="" /></a>
                  </div>
               </div>
               <div class="col-md-8 col-sm-12">
                  <div class="right-nav">
                     <div class="login-sr">
                        <div class="login-signup">
                           <ul>
                              <li><a href="{{url("login")}}">Login</a></li>
                              <li><a class="custom-b" href="{{ route('register') }}">Sign up</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="help-r hidden-xs">
                        <div class="help-box">
                           <ul>
                              <li><a href="{{url("user2/guide")}}">Guide</a></li>
                              <li> <a href="#"><img class="h-i" src="{{asset("user2/images/help-icon.png")}}" alt="" /> Contact Us </a> </li>
                           </ul>
                        </div>
                     </div>
                     <div class="nav-b hidden-xs">
                        <div class="nav-box">
                           <ul>
                              <li><a href="{{url("user2/index")}}">Home</a></li>
                              <li><a href="about-us.blade.php">About Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!--/.container-fluid --> 
      </nav>
   </header>
   <body>
    <div>
        @yield('content')
    </div>
    <footer>
      <div class="main-footer">
         <div class="container">
            <div class="row">
               <!--<div class="footer-top clearfix">
                  <div class="col-md-2 col-sm-6">
                     <h2>Start a free
                        account today
                     </h2>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-box">
                        <input type="text" placeholder="Enter yopur e-mail" />
                        <button>Continue</button>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-12">
                     <div class="help-box-f">
                        <h4>Question? Call us on 12 34 56 78 for help</h4>
                        <p>Easy setup - no payment fees - up to 100 products for free</p>
                     </div>
                  </div>
               </div>-->
               <div class="footer-link-box clearfix">
                  <div class="col-md-6 col-sm-6">
                     <div class="left-f-box">
                        <div class="col-sm-4">
                           <h2>INFORMATION</h2>
                           <ul>
                              <li><a href="#">Guide</a></li>
                              <li><a href="#">Rule and Regulations</a></li>
                              <li><a href="#">Term and Conditions</a></li>
                           </ul>
                        </div>
                        <div class="col-sm-4">
                           <h2>RESOURCE</h2>
                           <ul>
                              <li><a href="#">Home </a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Contact Us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="col-md-12 col-sm-12">
                        <div class="help-box-f">
                           <h1 style="color: white">Start your new Account</h1><br><br>
                           <h4>Question? Call us on 12 34 56 78 for help</h4>
                           <p>Easy setup - no payment fees - up to 100 products for free</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <p><img width="90" src="{{("user2/images/logo.png")}}" alt="#" style="margin-top: -5px;" /> All Rights Reserved.Elib © 2021</p>
               </div>
               <div class="col-md-4">
                  <ul class="list-inline socials">
                     <li>
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                     </li>
                  </ul>
                  <!--<ul class="right-flag">
                     <li><a href="#"><img src="{{asset("user2/images/flag.png")}}" alt="" /> <span>Change</span></a></li>
                  </ul>-->
               </div>
            </div>
         </div>
      </div>
   </footer>
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