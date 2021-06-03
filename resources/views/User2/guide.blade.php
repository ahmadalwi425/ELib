<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Chamb - Responsive E-commerce HTML5 Template</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
   </head>
   <body>
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
                                 <li><a href="#">Login</a></li>
                                 <li><a class="custom-b" href="#">Sign up</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li><a href="{{url("User2/howitworks.blade.php")}}">Guide</a></li>
                                 <li> <a href="#"><img class="h-i" src="{{asset("user2/images/help-icon.png")}}" alt="" /> Contact Us </a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="howitworks.blade.php">Home</a></li>
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
      <!-- Modal -->
      <div class="modal fade lug" id="myModal" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Change</h4>
               </div>
               <div class="modal-body">
                  <ul>
                     <li><a href="#"><img src="images/flag-up-1.png" alt="" /> United States</a></li>
                     <li><a href="#"><img src="images/flag-up-2.png" alt="" /> France </a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div id="sidebar" class="top-nav">
         <ul id="sidebar-nav" class="sidebar-nav">
            <li><a href="#">Help</a></li>
            <li><a href="#">How it works</a></li>
            <li><a href="#">Chamb for Business</a></li>
         </ul>
      </div>
      <div class="section-how-it-works">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="left-works-box wow fadeIn" data-wow-delay="0.2s">
                     <h2>How to borrow some book if <br><span>you’re a Member.</span></h2>
                     <p> but if you are not member yet, you can sign up first
                     </p>
                     <div class="form-email-box">
                        <h3>Sign up for free</h3>
                        <form class="box-email">
                           <input type="email" placeholder="Enter your e-mail" />
                           <button>Continue</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="right-works-box">
                     <div class="small-box wow fadeIn" data-wow-delay="0.2s">
                        <div class="how-text-left">01</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-01.png" alt="" />
                           </div>
                           <h3>Sign In</h3>
                           <h2><span>Use your account data,</span><br> to sign In.</h2>
                           <p>find Login button in the uppper right of the website and
                              you only need your username and password to login.
                           </p>
                           <p>make sure that both of username and password are valid.
                           </p>
                           <div class="line"></div>
                        </div>
                     </div>
                     <div class="searching-box wow fadeIn" data-wow-delay="0.4s">
                        <div class="how-text-left">02</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-02.png" alt="" />
                           </div>
                           <h3>Search</h3>
                           <h2>Find your <br> <span>desired book.</span></h2>
                           <p>there will be some suggestion book that appear, you can find your book by 
                              search it from suggestion list oryoou can use the search feature and type 
                              the title or the genre of the books
                           </p>
                           <p>there also trending book list in the bottom of the website.
                           </p>
                           <div class="line"></div>
                        </div>
                     </div>
                     <div class="sellers-box wow fadeIn" data-wow-delay="0.6s">
                        <div class="how-text-left">03</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-03.png" alt="" />
                           </div>
                           <h3>Fill the borrow form</h3>
                           <h2>there will be some data <span>that you need to fill first</span></h2>
                           <p>not every book that you can borrow there will some condition that make the Books
                              are unable to be borrowed, so you should check for the avilability of the book
                           </p>
                           <p>when all of the borrow condition is already fullfilled, the you can submit the form.
                           </p>
                        </div>
                     </div>
                     <div class="small-box wow fadeIn" data-wow-delay="0.2s">
                        <div class="how-text-left">04</div>
                        <div class="how-dit-right">
                           <div class="dit-img">
                              <img class="img-responsive" src="images/works-icon-05.png" alt="" />
                           </div>
                           <h3>Validation by admin</h3>
                           <h2><span>Your borrow data will be checked</span><br>and Validated by Admin.</h2>
                           <p>Admin will check is there any error or invalid data, and after the vlidation the admin will
                              give the permission to borrow the book
                           </p>
                           <p>then you will get your borrow report.
                           </p>
                           <div class="line"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      {{-- <div class="works-systems">
         <div class="container">
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="sys-box-left-a wow fadeIn" data-wow-delay="0.2s">
                     <h2>Streamlined<br>
                        Communication Systems.
                     </h2>
                     <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                        inventore veritatis
                     </p>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit 
                        voluptatem accusantium doloremque laudantium rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo.
                     </p>
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="sys-box-right-a wow fadeIn" data-wow-delay="0.4s">
                     <img class="img-responsive" src="images/creat_pro.png" alt="" />
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="sys-box-left-b wow fadeIn" data-wow-delay="0.2s">
                     <img src="images/how-is-works-img-02.jpg" alt="" />
                  </div>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="sys-box-right-b wow fadeIn" data-wow-delay="0.4s">
                     <h2>Powerful search tools <br>
                        for finding products.
                     </h2>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit 
                        voluptatem accusantium doloremque laudantium rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo.
                     </p>
                     <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                        inventore veritatis
                     </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-5 col-sm-6 col-xs-12">
                  <div class="sys-box-left-c wow fadeIn" data-wow-delay="0.2s">
                     <h2>Find Exciting and Exotic
                        Products.
                     </h2>
                     <p>Sed ut perspiciatis unde omnis iste natus error sit 
                        voluptatem accusantium doloremque laudantium rem aperiam, 
                        eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo.
                     </p>
                     <p>laudantium rem aperiam, eaque ipsa quae ab illo 
                        inventore veritatis
                     </p>
                  </div>
               </div>
               <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="sys-box-right-c wow fadeIn" data-wow-delay="0.4s">
                     <img src="images/how-is-works-img-03.png" alt="" />
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
      <div class="section-safety">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2>Bwnefis with trust and safety</h2>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b1.png" alt="" />
                     </div>
                     <h3>Branden Minisite</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b2.png" alt="" />
                     </div>
                     <h3>Vetted Sellers</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b3.png" alt="" />
                     </div>
                     <h3>Verified with 3. part</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b4.png" alt="" />
                     </div>
                     <h3>Data Protection</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b5.png" alt="" />
                     </div>
                     <h3>Support</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b1.png" alt="" />
                     </div>
                     <h3>Branden Minisite</h3>
                     <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms 
                        of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="faq-box wow fadeIn" data-wow-delay="0.0s">
         <div class="container">
            <div class="row">
               <div class="faq-main-box">
                  <h2>Questions and answers</h2>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-1">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-a" aria-expanded="true" aria-controls="faq-a">
                                    Is there a fee that members need to pay?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-a" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-1">
                              <div class="panel-body">There are no fees that need to be paid both when registering and when you become a member.</div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-2">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-b" aria-expanded="false" aria-controls="faq-b">
                                    what is the maximum length of borrowing a book?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-b" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-2">
                              <div class="panel-body">Maximum borrowing of books is one week since the book is borrowed</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                     <div class="panel-group" id="accordion-a" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-3">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-c" aria-expanded="false" aria-controls="faq-c">
                                    how much is the fine that must be paid if the return is late?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-3">
                              <div class="panel-body">The fine that must be paid by members who are late in returning books is Rp. 500/day for each book</div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-4">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#faq-d" aria-expanded="false" aria-controls="faq-d">
                                    What is the maximum number of books that can be borrowed?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-d" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-4">
                              <div class="panel-body">For each member account, only 3 books are allowed to borrow at a time</div>
                           </div>
                        </div>
                        {{-- <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-right-3">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-c" aria-expanded="false" aria-controls="faq-right-c">
                                 What if i need a custom solution?
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-right-c" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-3">
                              <div class="panel-body">When creating an account, our ‘guided tour’ tutorial system will walk you through every aspect of the account generation process. From filling in your name to posting your first product or searching for your first item; nothing is left to chance </div>
                           </div>
                        </div>
                        <div class="panel panel-default">
                           <div class="panel-heading" role="tab" id="heading-faq-right-4">
                              <h4 class="panel-title">
                                 <a class="collapsed" data-toggle="collapse" data-parent="#accordion-a" href="#faq-right-d" aria-expanded="false" aria-controls="faq-right-d">
                                 I have more questions..
                                 </a>
                              </h4>
                           </div>
                           <div id="faq-right-d" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-faq-right-4">
                              <div class="panel-body">All accounts, whether you are a buyer or a seller, can register for a free account. Here you should be able to judge if Chamb is the right place to help grow your business. </div>
                           </div>
                        </div> --}}
                     </div>
                  </div>
               </div>
            </div>
         </div>
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
      <script src="js/jquery-1.12.4.min.js"></script> 
      <!--bootstrap js--> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/bootstrap-select.min.js"></script>
      <script src="js/slick.min.js"></script> 
      <script src="js/wow.min.js"></script> 
      <!--custom js--> 
      <script src="js/custom.js"></script>
   </body>
</html>