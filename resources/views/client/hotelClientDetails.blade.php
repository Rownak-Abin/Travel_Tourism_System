<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Client ID</title>
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
</head>

<body style="overflow-x: hidden; background-color: #f4f4f4;">
  
    

      <!--header-->
       <div id="header" class="header" style="background-color: #FCFFE5; ">
         <nav class="navbar navbar-expand-lg navbar-dark text-capitalize" style="box-shadow: 0px -1px 26px -7px rgba(0,0,0,0.75);">
            <div class="container">
               <a class="navbar-brand" href="#"><img src="/public/assets/imgs/log.jpg" style="height: auto; width: auto;max-height: 72px;
                                     max-width: 250px;" alt="#" /></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="show-menu" >
                  <ul class="navbar-nav m-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="#home">HOME</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#about">TOUR</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#service">HOTELS</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" style="color: red;" href="#hiw">BLOGS</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#wcs">CONTACT</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">LOG IN</a>
                     </li>
                     <li class="nav-item .search-container">
                       
                        
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
   </div>


     
         <div style="position: absolute; top:160px; left:300px; background-color: #FFFFE0; width:890px; height:360px; border-radius: 8px; box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75);">

<form method="post">

            <div style="position: absolute;  background-color: #F7D8AF; height:180px; width:890px;"></div>
                 
<img src= "<%= info[0].picture %>" width='200px;' height='150px;' style="border:1px solid black; padding:2px;  float:left; margin-right:10px; margin-bottom:5px; position:relative; top:15px; left:650px;">

         <h4 style="position: absolute; top:50px; font-family: arial;color: #B22222;font-weight: bold; left:50px">Name: <%= info[0].Cname %></h4>

         <h4 style="position: absolute; top:110px; left:50px">Email: <%= info[0].Cemail %></h4>


         <h5  style="position: absolute; top:200px; left:50px">Requested Package:  <input type="text"   id="trnm"       name="tournm"           value="<%= info[0].tour %>"   style="background-color:   #FF6347; border:none; border-radius: 3px; width:160px; padding-left: 5px;"></h5>

           <h5 style="position: absolute; top:250px; left:50px">Total Amount:  <%= info[0].payable %></h5>

   <h5 style="position: absolute; top:300px; left:50px">Status:   <input type="text"   id="status"                  value=" <%= info[0].status %>"   style="background-color:   #FF6347; border:none; border-radius: 3px; width:120px; padding-left: 5px;">  </h5>
  


            </div>


              <!--rate us-->
           <div id="rate" style="position: relative; top:60px; left:1220px; background-color: #FFFAF0; height:290px; width:270px; border-radius: 8px; box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75); ">
                  
                  <div style="position: absolute; height:50px; width:270px; background-color: black;border-top-left-radius:8px; border-top-right-radius:8px;">

                        <h5 style="position: relative; top:13px; left:25px; color:white">Rate this Tour</h5>
                        

                  </div>
                  <div style="position: relative; top:70px;left:40px; font-size: 20px; font-weight:bold">

                  <input type="radio" name="rate" value=1 checked="checked" > *<br>
                              <input type="radio" name="rate" value=2 > * *<br>
                              <input type="radio" name="rate" value=3 > * * *<br>
                              <input type="radio" name="rate" value=4 > * * * *<br>
                              <input type="radio" name="rate" value=5 > * * * * *<br>
                  </div>
 
                 <input type="submit" name="submit" value="submit" class="btn btn-success" style="position: relative; top:70px; height:45px; width:220px;margin:10px 25px;  font-size: 20px;">  

                <!--  <a href="" class="btn btn-success" style="position: relative; top:70px; height:45px; width:220px;margin:10px 25px;  font-size: 20px;" >Submit</a>  -->

                <!--   -->
            </div>

             <a href="/home"   class="btn btn-danger" style="position: absolute; top:450px;left:1000px; height:45px; width:140px;margin:10px 25px;  font-size: 20px;">Logout</a>
</form>
        </div>




     



         <div class="Sidenav">
   
         <nav>
            
            
            
            <ul>
                <li><a class="" href=""></a></li>
                 <li><a class="" href=""></a></li>
               <li><a class="active" href="hos.php"><i class="fa fa-home"></i> &nbsp &nbsp Home</a></li>
               <li><a href="#"><i class="fa fa-list"></i> &nbsp &nbsp News</a></li>
               <li><a href="#"><i class="fa fa-phone"></i> &nbsp &nbsp Contact us</a></li>
               <li><a href="#"><i class="fa fa-print"></i> &nbsp &nbsp About</a></li>
               <li><a href="Login.php"><i class="fa fa-user-circle"></i> &nbsp &nbspLog in</a></li>
            
            </ul>

   
         </nav>

      </div>


      <script>
         
         $(document).ready(function(){

        

            var st =    $('#status').val();

            if(st == " Pending"){

                   console.log("ppp");

                $('#rate').hide();

            }
            else{
               $('#rate').show();
            }



            console.log(st);





         });



      </script>




   

</body>
</html>