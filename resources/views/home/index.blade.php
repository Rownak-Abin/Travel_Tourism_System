

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Home</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"> 
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> 

      <style>

        div.adf {
            display: inline-block;
            width: 50%;
        }


      </style>	


   </head>
   <body>

    
     


      <div  style="position: absolute; width: 1600px; box-shadow: 0px -1px 26px -7px rgba(0,0,0,0.75); background-color: #00FFFF; height:82px">
      
               <ul class="nv" >
           <a class="navbar-brand" href="#"><img src="/imgs/log.jpg" style="height:95px; width: auto;max-height: 72px; position:absolute; left:200px; top:0px; max-width: 250px;" alt="#" /></a>
                 <li><a class="active" href="/home">Home</a></li>
                 <li><a href="/tours">Tours</a></li>
                 <li><a href="/hotel/hotels">Hotels</a></li>
                 <li><a href="#about">Blogs</a></li>
                 <li><a href="/login">Log In</a></li>
                  <li style="position: absolute; left:1140px; top:15px">
                       
                        <form>
                           <input style="height:40px; border-radius:5px;padding-left: 10px; width:220px; border: 2px solid #696969" type="search" placeholder="Search">
                        </form>
                     </li>
               </ul>
       </div>


      <div id="home" class="slider" style="background-color: #FCFFE5; position: relative; top:80px">
         <div id="main_slider" class="carousel slide" data-ride="carousel" data-interval="3000">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ">
               <div class="carousel-item card-overlay active">
                  <img class="d-block w-100" src="/imgs/clpic.jpg" alt="slider_img">
                  
			 <div class="carousel-caption">
			               	<p style="font-size:30px;">Cloud and Sunset Mixes Together</p>

			               </div>
               </div>

              

               <div class="carousel-item ">
                  <img class="d-block w-100" src="/imgs/jaf.jpg" alt="slider_img">


                 <div class="carousel-caption">
               	<p style="font-size:30px;">Mountains touching Waterfalls</p>

               </div>
               </div>
              

               <div class="carousel-item">
                  <img class="d-block w-100" src="/imgs/tea.jpg" alt="slider_img">
                   <div class="carousel-caption">
               	<p style="font-size:30px; color: #FDFEFE;">World of Green leaves</p>

               </div>
                
               </div>

            </div>


            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
            </a>
         </div>
      </div>


      <div id="hiw" class="hiw_section layout_padding" style="background: #fff;">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h3 class="black_font">Here you'll get</h3>
                  <p class="black_font">adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="/imgs/blog1.jpg" alt="#"  />
                  <button style="border: 1px solid #2088EC; border-top: none;"><h3 class="blog_head" style="width:348px; ">Tour Package</h3></button>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="/imgs/blog2.jpg" alt="#" />
                 <button style="border: 1px solid #2088EC; border-top: none;"> <h3 class="blog_head" style="width:348px;">Hotels</h3></button>
               </div>
               <div class="col-md-4">
                  <img class="margin_top_30 img-responsive" src="/imgs/blog3.jpg" alt="#" />
                 <button style="border: 1px solid #2088EC; border-top: none;"> <h3 class="blog_head" style="width:348px; " >Bookings</h3></button>
               </div>
            </div>
         </div>
      </div>
      <div id="service" class="hiw_section layout_padding" style="position:relative;top:-50px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
              <h3>OUR POPULAR PACKAGES FROM ANOTHER COMPANY</h3>


           
               

               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-8 service_blog">
                  <img class="margin_top_30 img-responsive" src="/imgs/s1.jpg" alt="#" />
                  <h3 class="blog_head">Book Online</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="/imgs/s2.jpg" alt="#" />
                  <h3 class="blog_head">Confirmation</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="/imgs/s3.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="/imgs/s4.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
               <div class="col-md-4 service_blog">
                  <img class="margin_top_30 img-responsive" src="/imgs/s5.jpg" alt="#" />
                  <h3 class="blog_head">Work Status</h3>
               </div>
            </div>
         </div>
      </div>
      <div id="contact" class="hiw_section layout_padding" style="background: #eeefef;">
         
            
      <div id="wcs" class="hiw_section layout_padding" style="position:relative;top:-50px;">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text_align_center">
                  <h3>Our Client Say</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
               </div>
               <div class="col-md-5">
               </div>
            </div>
            <div class="row">
               <div class="col-md-11">
                  <div class="full testimonial_blog">
                     <p>Jackrok</p>
                     <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="/imgs/log.jpg" style="height: auto; width: auto;max-height: 72px;
   											 max-width: 250px;" alt="#" />
                     <p style="margin-top: 5px;">It is a long established fact that a reader will be distracted by the readable content..</p>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Navigation</h4>
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Features</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Contact Info</h4>
                     <p><strong>Corporate Office Address:</strong></p>
                     <p><img src="/imgs/phone_icon.png" alt="#" /> 1234 River Street New York, NY 36524</p>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="/imgs/location.png" alt="#" /> 987 654 3210</p>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="item">
                     <h4 class="text-uppercase">Discover</h4>
                     <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">How It Works</a></li>
                        <li><a href="#">Subscribe</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
        
      </footer>
      
      <script>
         $(function () {
             
             'use strict';
             
             var winH = $(window).height();
             
             $('header').height(winH);  
             
             $('header .container > div').css('top', (winH / 2) - ( $('header .container > div').height() / 2));
             
             $('.navbar ul li a.search').on('click', function (e) {
                 e.preventDefault();
             });
             $('.navbar a.search').on('click', function () {
                 $('.navbar form').fadeToggle();
             });
             
             $('.navbar ul.navbar-nav li a').on('click', function (e) {
                 
                 var getAttr = $(this).attr('href');
                 
                 e.preventDefault();
                 $('html').animate({scrollTop: $(getAttr).offset().top}, 1000);
             });
         })
      </script>

   </body>
</html>