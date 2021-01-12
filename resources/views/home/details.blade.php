<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>details</title>
     <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"> 
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
      <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</head>

<body style="overflow-x: hidden; height: auto; background-color: #f4f4f4">


    <div class="Sidenav">
   
         <nav>
            
            
            
            <ul>
                <li><a class="" href=""></a></li>
                 <li><a class="" href=""></a></li>
               <li><a class="active" href="hos.php"> &nbsp &nbsp Home</a></li>
               <li><a href="#"> &nbsp &nbsp News</a></li>
               <li><a href="#"> &nbsp &nbsp Contact us</a></li>
               <li><a href="#"> &nbsp &nbsp About</a></li>
               <li><a href="/login"> &nbsp &nbspLog in</a></li>
            
            </ul>

   
         </nav>

      </div>

      <div  style="position: absolute; width: 1600px; box-shadow: 0px -1px 26px -7px rgba(0,0,0,0.75); background-color: #00FFFF; height:82px">
      
               <ul class="nv" >
           <a class="navbar-brand" href="#"><img src="/imgs/log.jpg" style="height:95px; width: auto;max-height: 72px; position:absolute; left:200px; top:0px; max-width: 250px;" alt="#" /></a>
                 <li><a class="active" href="/home">Home</a></li>
                 <li><a href="/tours">Tours</a></li>
                 <li><a href="/hotels">Hotels</a></li>
                 <li><a href="#about">Blogs</a></li>
                 <li><a href="/login">Log In</a></li>
                  <li style="position: absolute; left:1120px; top:15px">
                       
                        <form>
                           <input style="height:40px; border-radius:5px;padding-left: 10px; width:220px; border: 2px solid #696969" type="search" placeholder="Search">
                        </form>
                     </li>
               </ul>
       </div>
   <div>
    <form method="post" enctype="multipart/form-data">

    	
    	<input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="text" id="nm"  value="{{$details->tname}}" name="tour"  style="position: relative; font-size:47px; left:320px; top:115px; text-shadow: 2px 2px 5px red;">
         
   </div>

      ""

 <div >


  

    <div id="map" style="position: relative; height:350px; width:790px; top:115px; left:322px; background-color: red; display: none;">
      
      <img src="/imgs/{{$details->map}}" style="position: relative; height:350px; width:790px; top:0px; left:0px; box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75); ">

    </div>

      <!--fotoroma div-->
     <div class="fff"  style="position: relative; left:322px; top:125px; box-shadow: 0px -1px 26px -7px rgba(0,0,0,0.75); height:500px; width:790px; ">
        <img src="/imgs/{{$details->mainpic}}" style="height:500px; width:790px;">
       
      </div>

  

    

      <!--price duration-->
            <div style="position: relative; top:180px; left:322px; background-color: #D3FAFC; width:790px; height:250px; border-radius: 8px; box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75);">
                  <div style="position: absolute; background-color: #30AE30; width:790px; height:55px;     border-top-left-radius:8px; border-top-right-radius:8px; ">

                        <h4 style="position: relative;top:10px; left:30px; color: white; ">Price and Duration</h4>
                        
                  </div>


                  <h4 style="position: relative; font-family: serif; ; top:90px; left:50px">Per person cost:     {{$details->tprice}}</h4>

                  <h4 style="position: relative; font-family: serif ; top:110px; left:50px">Tour Duration:       {{$details->duration}}</h4>

            </div>




         <!--TOur description-->
        <div style="position: relative; top:220px; left:322px; background-color: #D3FAFC; width:790px; height:400px; border-radius: 8px; box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75);">
              <div style="position: absolute; background-color: #800080; width:790px; height:55px;     border-top-left-radius:8px; border-top-right-radius:8px; ">

                    <h4 style="position: relative;top:10px; left:30px; color: white; ">Tour Description:</h4>

                    <p style="font-family: serif; position: relative; width:700px; top:50px; left:50px">{{$details->description}}</p>


                  </div>
             </div>     
             <br><br><br><br><br><br><br><br><br><br>

</div>





      <div style="position: absolute; top:215px">
      <!--Cost bar-->
      <div style="position: relative; height:auto; width:270px; background-color:#000; top:0px; left:1170px; border: 1px solid #C0C0C0; border-radius: 5px;  box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75);">

                  <button type="button" id="mapbutt" class="btn btn-danger" style="position: relative; height:50px; width:220px;margin:20px 25px;  font-size: 20px;">See On Map</button>/**/
               

               <div style="position: relative;left:85px; color:#fff;  font-size: 17px; top:-10px">--Total Cost--</div>  

              
               <input id="cost" value="{{$details->tprice}}" type="text" name="cos" style="position: relative; height:50px; padding:10px; width:220px;margin:5px 25px;  font-size: 20px;">     

                <div style="position: relative;left:85px; color:#fff;  font-size: 17px; top:-0px">--Add People--</div>  

                 

                <input id="quan" type="number" value=1 min="0" max="40" step="1" style="position: relative; top:10px; left:25px; height: 50px; padding:10px; font-size: 20px; width:220px;">

                 <button type="button" id="request" class="btn btn-primary" style="position: relative; height:50px; width:220px;margin:35px 25px;  font-size: 20px;">Request Booking</button>

                <div id="newcus" style="position: relative; padding:0px;  height:420px; width:270px; display: none;">

                <div style="position: relative;left:85px; color:#fff;  font-size: 17px; top:0px">--Name--</div> 
                
               <input type="text" name="name" style="position: relative; height:50px; padding:10px; width:220px;margin:5px 25px;  font-size: 20px;">    
                	
                 <div style="position: relative;left:85px; color:#fff;  font-size: 17px; top:0px">--Email--</div>   
                
               <input type="text" name="email" style="position: relative; height:50px; padding:10px; width:220px;margin:5px 25px;  font-size: 20px;"> 	

               <div style="position: relative;left:85px; color:#fff;  font-size: 17px; top:0px">--Password--</div>   

              
               <input type="password" name="pass" style="position: relative; height:50px; padding:10px; width:220px;margin:5px 25px;  font-size: 20px;">  

                <div style="position: relative;left:85px; color:#fff;  font-size: 17px; top:0px">--Picture--</div>

                 <input type="file" name="pict" style="position: relative; height:50px; left:43px; padding:10px; width:180px;margin:5px 25px;  font-size: 15px;">  


              

             <input type="submit" name="submit" value="submit" class="btn btn-success" style="position: relative; height:50px; width:220px;margin:10px 25px;  font-size: 20px;"> 


            <!--  <a href="/details" class="btn btn-success" style="position: relative; height:50px; width:220px;margin:10px 25px;  font-size: 20px;">Submit</a> -->
                </div>

             
            @foreach($errors->all() as $err)
              <div style="color:red;  text-align: center">
                {{$err}} <br>
              </div>
            @endforeach



                </div>



  </form>
               

               
                <script src="bootstrap-input-spinner.js"></script>      

                <script>

                  $(document).ready(function(){

                 $('#request').click(function(){
              
						$('#newcus').toggle(400);

                  });


                  $('#mapbutt').click(function(){
              
            $('#map').toggle(400);

                  });

                var i =  $("#cost").val();

               $(":input").on('keyup mouseup', function () {
                    var q = $("#quan").val();
                 
                    var x = i*q;

                   $("#cost").val(x);

                  });

            

                 
             });               	

                </script>


            </div>


  

              <!--footer-->
             <footer style="position: relative; top:100px; left:00px; width:auto">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-12">
                  <div class="footer_blog_section">
                     <img src="../imgs/log.jpg" style="height: auto; width: auto;max-height: 72px;
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
                     <p><img src="../imgs/phone_icon.png" alt="#" /> 1234 River Street New York, NY 36524</p>
                     <p><strong>Customer Service:</strong></p>
                     <p><img src="../imgs/location.png" alt="#" /> 987 654 3210</p>
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



            <!--side nav-->
     

  



      
</body>


</html>