@extends('User2.layout')
@section('content')
   <div id="sidebar" class="top-nav">
      <ul id="sidebar-nav" class="sidebar-nav">
         <li><a href="#">Help</a></li>
         <li><a href="howitworks.html">How it works</a></li>
         <li><a href="#">chamb for Business</a></li>
      </ul>
   </div>
   <div class="page-content-product">
      <div class="main-product">
         <div class="container">
            <div class="row clearfix">
               <div class="find-box">
                  <h1>Welcome To Elib Website<br>You can access us anywhere and anytime.</h1>
                  <h4>What would you like to find.</h4>
                  <div class="product-sh">
                     <form action="{{url('user2/index')}}" method="GET" id="search">
                     <div class="col-sm-6">
                        <div class="form-sh">
                           <input type="text" name="search" placeholder="Search something you love" >
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-sh">
                           <select name="category" class="selectpicker">
                              @foreach($cat as $catdata)
                              <option value="{{$catdata->id}}">{{$catdata->category_name}}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-3">
                        <div class="form-sh2"><button class="btn btn-primary" type="submit">Search</button></div>
                        {{-- <div class="form-sh2"><input type="submit" value="" class="btn btn-primary" value="Submit"></div> --}}
                        {{-- <div class="form-sh"> <a class="btn" type="submit" href="#">Search</a> </div> --}}
                     </div>
                     </form>
                     <p>Or simply<a href="#"> click here </a> and get inspired!</p>
                  </div>
               </div>
            </div>       
            <div class="row clearfix">
               @if (count($data) > 0)
                  @foreach ($data as $bk)
                     <div class="col-lg-2 col-sm-6 col-md-2">
                        <a>
                           <div class="box-img2">
                              <h4>{{ $bk->title }}</h4>
                           </div>
                           <div class="box-img">
                              <img width="150px" src="{{asset('storage/'.$bk->cover)}}" alt="" />
                           </div>
                           <a></a>
                           <div class="dit-btn clearfix">
                              <a class="wis" href="{{ url('user2/bookpage',$bk->id) }}" id="moredetail" style="width:100%;"><i class="fa fa-info-circle" aria-hidden="true"></i>See More Detail</a>
                              <!-- @guest
                              @else
                              <form action="{{ url('user2/req') }}" method="post">
                              @csrf
                              <input type="hidden" name="id_book" value="{{$bk->id}}">
                              <input class="thi" type="submit" value="Select">
                              <a class="thi" type="submit"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select</a> 
                              </form>
                              
                              @endguest -->
                           </div>
                        </a>
                     </div>
                  @endforeach
                  <div>
                     {{$data->links('pagination::bootstrap-4')}}
                  </div>
            @else
                  <td colspan="7"><b class="text-danger">Book not found</b></td>
            @endif
               
               {{-- <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr2.jpg")}}" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr3.jpg")}}" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr4.jpg")}}" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr5.jpg")}}" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr6.jpg")}}" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr7.jpg")}}" alt="" />
                     </div>
                  </a>
               </div>
               <div class="col-lg-3 col-sm-6 col-md-3">
                  <a href="productpage.html">
                     <div class="box-img">
                        <h4>Product</h4>
                        <img src="{{asset("user2/images/trr8.jpg")}}" alt="" />
                     </div>
                  </a>
               </div> --}}
               <div class="categories_link">
                  <a href="#">Browse all categories here</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="cat-main-box">
      <div class="container">
         <div class="row panel-row">
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.0s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="{{asset("user2/images/xpann-icon.jpg")}}" class="icon-small" alt="">
                     <h4>“Find” Your Desired Book</h4>
                     <p>You can search by looking at the list of book.
                        or you can just use Search Feature in Home.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="{{asset("user2/images/create-icon.jpg")}}" class="icon-small" alt="">
                     <h4>Fill Borrow Form</h4>
                     <p>there some form that need to be filled.
                        the filled it with the right data.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-4 col-sm-6 wow fadeIn hidden-sm" data-wow-delay="0.4s">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <img src="{{asset("user2/images/get-icon.jpg")}}" class="icon-small" alt="">
                     <h4>Get your Report</h4>
                     <p>After the Data sent and has been confirmed.
                        You will get your Report information.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="products">
      <div class="main-products">
         <h2>TRENDING BOOKS ON THIS YEAR</h2>
         <div class="product-slidr">
            <div class="slider">
               @foreach ($data as $bk)
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img width="150px" src="{{asset('storage/'.$bk->cover)}}" alt="" />
                        {{-- <img src="{{asset("user2/images/trr7.jpg")}}" alt="#" /> --}}
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>{{ $bk->title }}</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           {{-- <a href="#">Available</a> --}}
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           @guest
                           @else
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this </a>
                           @endguest
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
               {{-- <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="{{asset("user2/images/trr8.jpg")}}" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Pulang pergi</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           <a href="#">Available</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="{{asset("user2/images/trr5.jpg")}}" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Pulang pergi</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           <a href="#">Available</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="{{asset("user2/images/trr4.jpg")}}" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Pulang pergi</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           <a href="#">Available</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="{{asset("user2/images/trr1.jpg")}}" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Pulang pergi</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           <a href="#">Available</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="{{asset("user2/images/trr2.jpg")}}" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Pulang pergi</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           <a href="#">Available</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
                  <div class="prod-box">
                     <div class="prod-i">
                        <img src="{{asset("user2/images/trr3.jpg")}}" alt="#" />
                     </div>
                     <div class="prod-dit clearfix">
                        <div class="dit-t clearfix">
                           <div class="left-ti">
                              <h4>Pulang pergi</h4>
                              <p>By <span>Tereliye</span> in <span>2021</span></p>
                           </div>
                           <a href="#">Available</a>
                        </div>
                        <div class="dit-btn clearfix">
                           <a class="wis" href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> More Detail </a>
                           <a class="thi" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i> Select this</a>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
   </div>
   <div class="products_exciting_box">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
               <div class="exciting_box f_pd">
                  <img src="{{asset("user2/images/exciting_img-02.jpg")}}" class="icon-small" alt="" />
                  <h4>terms of borrowing books
                  </h4>
                  <p>- Must be a member first <br>
                     - the selected book is currently available<br>
                     - borrowing is only allowed for a certain time
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
               <div class="exciting_box l_pd">
                  <img src="{{asset("user2/images/exciting_img-01.jpg")}}" class="icon-small" alt="" />
                  <h4> terms of returning books</h4>
                  <p>- the condition of the book must be the same as when borrowed<br>
                     - return of books according to the specified time<br>
                     - pay a fine (Rp. 500/day) if you are late
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--<div class="start-free-box">
      <div class="container">
         <div class="row">
            <div class="container">
               <div class="main-start-box">
                  <div class="free-box-a clearfix">
                     <div class="col-md-6 col-sm-6">
                        <div class="left-a-f">
                           <h3>A platform built for scale & expansion. Start for free.</h3>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6">
                        <div class="right-a-f">
                           <p>Over the comming years, way thet business through the web
                              works will change at agreat - and chamb is the
                              gamebreaker.
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="main-start-box">
               <div class="bg_img_left"><img src="{{asset("user2/images/bg_img1.png")}}" alt="#" /></div>
               <div class="container">
                  <div class="buyer-box clearfix">
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="left-buyer">
                           <img class="img-responsive" src="{{asset("user2/images/creat_pro.png")}}" alt="#" />
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="right-buyer">
                           <h4>buyer</h4>
                           <h2>Empower your factory<br>
                              <span>With a new lead Channel</span>
                           </h2>
                           <p>Never worry about sales or income ftom outbound
                              channels. with chamb your store is directly
                              connected to thousands of interested in your
                              products.
                           </p>
                           <a href="#">Create a buyer account</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="bg_img_right"><img src="{{asset("user2/images/bg_img1.png")}}" alt="#" /></div>
            <div class="main-start-box">
               <div class="container">
                  <div class="supplier clearfix">
                     <div class="col-md-5 col-sm-6">
                        <div class="left-supplier">
                           <h4>supplier</h4>
                           <h2>Grow your store <br><span>With a new sales channel</span></h2>
                           <p>Never worry about sales or income ftom outbound
                              channels. with chamb your store is directly
                              connected to thousands of interested in your
                              products.
                           </p>
                           .
                           <a href="#">Create a supplier account</a>
                        </div>
                     </div>
                     <div class="col-md-7 col-sm-6">
                        <div class="right-supplier">
                           <img class="img-responsive" src="{{asset("user2/images/supplier-pc-img.png")}}" alt="#" />
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>-->
@endsection