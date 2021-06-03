@extends('User2.layout')
@section('content')
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h1>{{$data->title}}</h1><br>
                     
                  </div>
               </div>
            </div>
            <div class="row">
               {{-- <div class="col-md-2 col-sm-4">
                  <div class="left-profile-box-m prod-page">
                     <div class="pro-img">
                        <img src="images/150x150.png" alt="#" />
                     </div>
                     <div class="pof-text">
                        <h3>Morgan Mobilya</h3>
                        <div class="check-box"></div>
                     </div>
                     <a href="#">Visit store</a>
                  </div>
               </div> --}}
               <div class="col-md-9 col-sm-12">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active" id="pic-1"><img src="{{asset('storage/'.$data->cover)}}" alt="#" /></div>
                              </div>
                           </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                           <div class="left-dit-p">
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More details</a>
                                 <a href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this</a>
                                 <p>23 likes</p>
                              </div>
                           </div>
                           <div class="right-dit-p">
                              <div class="like-list">
                                 <ul>
                                    <li>
                                       <div class="im-b"><img class="" src="images/list-img-01.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-02.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-03.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-04.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-05.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><img src="images/list-img-06.png" alt=""></div>
                                    </li>
                                    <li>
                                       <div class="im-b"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="description-box">
                        <div class="dex-a">
                           <h4>Description</h4>
                           <p>{{$data->description}}
                           </p>
                           <br>
                        </div>
                        <div class="spe-a">
                           <h4>More Information</h4>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Jumlah Halaman</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>123 Halaman</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Penerbit</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>PT Jaya Sentosa</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Tanggal Terbit</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Maret 12 April 2020</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Penulis</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Paul luin</p>
                                 </div>
                              </li>
                              {{-- <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>SKU number</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>SKU number</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Shipping</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Shipping worldwide</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Warranty</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>1 years</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Delivery</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Choose country</p>
                                 </div>
                              </li> --}}
                           </ul>
                        </div>
                     </div>
                  </div>
                  {{-- <div class="similar-box">
                     <h2>Similiar products from Morgan Mobilya</h2>
                     <div class="row cat-pd">
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/tr1.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Product</h4>
                                    <p>By <span>Beko</span> under <span>Lights</span></p>
                                 </div>
                                 <a href="#" tabindex="0">$1220</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                 <p>23 likes</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/tr2.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Product</h4>
                                    <p>By <span>Beko</span> under <span>Chairs</span></p>
                                 </div>
                                 <a href="#" tabindex="0">$1220</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                 <p>23 likes</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row cat-pd">
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/tr3.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Product</h4>
                                    <p>By <span>Beko</span> under <span>Lights</span></p>
                                 </div>
                                 <a href="#" tabindex="0">$1220</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                 <p>23 likes</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="small-box-c">
                              <div class="small-img-b">
                                 <img class="img-responsive" src="images/tr4.png" alt="#" />
                              </div>
                              <div class="dit-t clearfix">
                                 <div class="left-ti">
                                    <h4>Product</h4>
                                    <p>By <span>Beko</span> under <span>Chairs</span></p>
                                 </div>
                                 <a href="#" tabindex="0">$1220</a>
                              </div>
                              <div class="prod-btn">
                                 <a href="#"><i class="fa fa-star" aria-hidden="true"></i> Save to wishlist</a>
                                 <a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like this</a>
                                 <p>23 likes</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div> --}}
               </div>
               <div class="col-md-3 col-sm-12">
                  <div class="price-box-right">
                     <h4>Price</h4>
                     <h3>$1.320 <span>pr.peice</span></h3>
                     <p>Option</p>
                     <select class="form-control select2">
                        <option>Flying Carpet Green rug</option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                     </select>
                     <a href="#">Contact company</a>
                     <h5><i class="fa fa-clock-o" aria-hidden="true"></i> <strong>16 hours</strong> avg. responsive time</h5>
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
      <script src="js/select2.full.min.js"></script> 
      <script src="js/wow.min.js"></script> 
      <!--custom js--> 
      <script src="js/custom.js"></script>
   </body>
   @endsection