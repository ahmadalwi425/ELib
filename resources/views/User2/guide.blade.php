@extends('User2.layout')
@section('content')
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
                  <h2>Benefits Use our website</h2>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b1.png" alt="" />
                     </div>
                     <h3>Online Web Based</h3>
                     <p>You can access it Anywhere and Anytime with your device and go to our website
                     </p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b2.png" alt="" />
                     </div>
                     <h3>Easy to Join</h3>
                     <p>You only need to register and fill the registration data, when your data is valid you can submit it and your account is ready</p>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.2s">
                  <div class="benenfit-box">
                     <div class="icon-b">
                        <img src="images/icon-b4.png" alt="" />
                     </div>
                     <h3>Data Protection</h3>
                     <p>Don't worry about your data in registration will be abused, we protect your data securely</p>
                  </div>
               </div>
               {{-- <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.6s">
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
               </div> --}}
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
   @endsection