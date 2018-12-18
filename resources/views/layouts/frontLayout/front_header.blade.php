<?php
use App\Http\Controllers\Controller;
use App\Category;

$mainCategories = Controller::mainCategories();
$categories= Category::with('subcategories')->where(['parent_id'=>0])->get();


// $sub_categories = Category::where(['parent_id'=>$cat->id])->get();


?>

 <!--header-->
  <header id="header">
    <div class = "header_one">
      <span>"We Flourish In The Attitude Of Gratitude"</span>
    </div>
    <div class="header_top"><!--header_top-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contactinfo">
              <ul class="nav nav-pills">
                <li><a href = "{{url('/about-us')}}">About Us</a></li>
                <li><a href = "{{url('/our-artist')}}">Our Artists</a></li>
                <li><a href = "{{url('/customer-service')}}">Customer Service</a></li>
                <li><a href = "{{url('/wholesale')}}">Wholesale</a></li>
                <li><a href = "{{url('/blog')}}">Blog</a></li>
                <li><a href = "{{url('/new-items')}}">New ITEMS</a></li>
                <li><a href = "{{url('/sale')}}">Sale</a></li>
                <li><a href = "{{url('/gift-certifications')}}">Gift Certificates</a></li>
                <li><a>Store</a></li>
                <li><a>Our Collections</a></li>
                <li><a>Meet Us</a></li>
              </ul>
            </div>
          
            <div class="social-icons" style="margin-left: 44%" >
              <ul class="nav navbar-nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div><!--/header_top-->
    
    <div class="header-middle"><!--header-middle-->
      <div class="container">
        <div class="row">
          <div class = "col-sm-2">
            <div class="logo pull-left">
              <a href="{{url('/')}}"><img src="{{asset('images/frontend_images/logo.jpg')}}" width = "150px"alt="" /></a>
            </div>
          </div>

          <div class = "col-sm-10" style="">
          <div class = "main-banner" id = "main-banner">
            <div class = "imgban" id = "imgban3">
            </div>

            <div class = "imgban" id = "imgban2">
            </div>

            <div class = "imgban" id = "imgban1">
            </div>

          </div>
          </div>

          <script>
            var bannerStatus = 1;
            var bannerTimer = 4000;

            window.onload = function(){
              bannerLoop();
            }

            var startBannerLoop = setInterval(function(){
              bannerLoop();              
            }, bannerTimer); // the bannerloop function needs to be called every 4000ms so that the else if statement executes

            document.getElementById("main-banner").onmouseenter = function(){
              clearInterval(startBannerLoop);
            } // when you enter the mouse over main banner the startBannerLoop continuity will be broken means no function call

            document.getElementById("main-banner").onmouseleave = function(){
              startBannerLoop = setInterval(function(){
                bannerLoop();              
              }, bannerTimer); 
            } // when you leave the mouse the continuity will begin again



            function bannerLoop(){
              if(bannerStatus === 1){
                document.getElementById('imgban2').style.opacity = "0";                

                setTimeout(function(){

                  document.getElementById('imgban1').style.right = "0px";
                  document.getElementById('imgban1').style.zIndex = "1000";
                  document.getElementById('imgban2').style.right = "-920px";
                  document.getElementById('imgban2').style.zIndex = "1500";
                  document.getElementById('imgban3').style.right = "920px";
                  document.getElementById('imgban3').style.zIndex = "500";
                }, 500); // how much of second must it pass before we run all the above code

                setTimeout(function(){
                  document.getElementById('imgban2').style.opacity = "1";              
                }, 1000);

                bannerStatus = 2;
              }
              else if(bannerStatus === 2){
                document.getElementById('imgban3').style.opacity = "0";                

                setTimeout(function(){

                  document.getElementById('imgban2').style.right = "0px";
                  document.getElementById('imgban2').style.zIndex = "1000";
                  document.getElementById('imgban3').style.right = "-920px";
                  document.getElementById('imgban3').style.zIndex = "1500";
                  document.getElementById('imgban1').style.right = "920px";
                  document.getElementById('imgban1').style.zIndex = "500";
                }, 500);

                setTimeout(function(){
                  document.getElementById('imgban3').style.opacity = "1";              
                }, 1000);

                bannerStatus = 3;

              }

              else if(bannerStatus === 3){
                document.getElementById('imgban1').style.opacity = "0";                

                setTimeout(function(){

                  document.getElementById('imgban3').style.right = "0px";
                  document.getElementById('imgban3').style.zIndex = "1000";
                  document.getElementById('imgban1').style.right = "-920px";
                  document.getElementById('imgban1').style.zIndex = "1500";
                  document.getElementById('imgban2').style.right = "920px";
                  document.getElementById('imgban2').style.zIndex = "500";
                },500);

                setTimeout(function(){
                  document.getElementById('imgban1').style.opacity = "1";              
                }, 1000);

                bannerStatus = 1;

              }              
            }

          
          </script>
         <!--  <div class = "image_try" style="display: inline;">
            <img src = "{{asset('images/frontend_images/humba.png')}}" width = "200px" style="margin-left: -10px; " alt="" />
          </div> -->
          <!-- <div class = "tumba_tumba"> --> 
          <div class="col-sm-3" style="float: right; margin-top: 10px; border-color: red;">
              <div class="search_box pull-right">
                <input type="text" placeholder="Search" name = "search_box" id = "search_box" autocomplete = "off" />         
              </div>

              <div id = "search-results">

              </div>
              {{ csrf_field() }}

         
          </div>


        </div>
      </div>
    </div><!--/header-middle-->
  
    <div class="header-bottom" id = "one_nav"><!--header-bottom-->
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="mainmenu">
              <ul class="nav navbar-nav collapse navbar-collapse">
                @foreach($categories as $cat)
                  @if($cat->status == '1')
                    <li><a href="{{url('/category/'.$cat->url)}}"`>{{$cat->name}}
                      <i class="fa fa-angle-down"></i></a>
                          <ul class="sub-menu {{$cat->name}}">
                            <!-- <div id = "{{$cat->name}}"></div> -->
                            @foreach($cat->subcategories as $subc)
                              @if($subc->status == '1')
                              <!-- <div class = "row"> -->
                                <div class = "col-sm-4">
                                  <li><a href='{{ url("$cat->url/$subc->url") }}' class = "hamba">{{$subc->name}}</a></li>
                                </div>
                              <!-- </div> -->
                                
                              @endif
                            @endforeach
                        
                          </ul>
              

                  @endif
                @endforeach
            </div>
            <style>
              #one_nav{
                z-index: 1100;
              }
            </style>
            <script>
              const nav = document.querySelector('#one_nav');
              const topofNav = nav.offsetTop;

              function fixNav(){
                // console.log(topofNav, window.scrollY);
                if(window.scrollY >= topofNav){
                  document.body.classList.add('fixed-nav');
                }else{
                  document.body.classList.remove('fixed-nav');
                }
              }

              window.addEventListener('scroll', fixNav);

            </script>                  

          </div>

          <div class="col-sm-3" >
            <div class="shop-menu pull-right">
              <ul class="nav navbar-nav">

                <li><a href="{{url('/cart')}}"><i class="fa fa-shopping-cart" style="font-size: 15px;"></i> 
                <span style="font-size: 20px;">Cart</span></a></li>
                @if(Auth::check())
                  <li><a href="{{url('/account')}}"><i class="fa fa-user" style="font-size: 15px;"></i> 
                  <span style="font-size: 20px;">Account</span></a></li>                
                  <li><a href="{{url('/user-logout')}}"><i class="fa fa-sign-out" style="font-size: 15px;"></i>
                  <span style="font-size: 20px;">Logout</span></a></li>
                @else
                  <li><a href="{{url('/login-register')}}"><i class="fa fa-lock" style="font-size: 15px;"></i>
                  <span style="font-size: 20px;">Login</span></a></li>
                @endif                
              </ul>
            </div>
          </div>








        </div>
      </div>
    </div><!--/header-bottom-->
  </header><!--/header-->

  <!-- <div class = "parent"> -->

