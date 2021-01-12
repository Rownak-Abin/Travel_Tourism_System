<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Hotels</title>
      <link rel="stylesheet" type="text/css" href="/css/bootstrap.css"> 
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome.min.css') }}">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
   </head>
<style>
  
 
</style>


    <body style="background-color: #f4f4f4; ">

      <div>

     <div class="Sidenav">
   
         <nav>
            
            
            
            <ul>
                <li><a class="" href=""></a></li>
                 <li><a class="" href=""></a></li>
               <li><a class="active" href="hos.php"> &nbsp &nbsp Home</a></li>
               <li><a href="#"> &nbsp &nbsp News</a></li>
               <li><a href="#"> &nbsp &nbsp Contact us</a></li>
               <li><a href="#"> &nbsp &nbsp About</a></li>
               <li><a href="Login.php"> &nbsp &nbspLog in</a></li>
            
            </ul>

   
         </nav>

      </div>

      <div  style="position: absolute; width: 1600px; box-shadow: 0px -1px 26px -7px rgba(0,0,0,0.75); background-color: #00FFFF; height:82px; top:0px">
      
               <ul class="nv" >
           <a class="navbar-brand" href="#"><img src="/imgs/log.jpg" style="height:95px; width: auto;max-height: 72px; position:absolute; left:200px; top:0px; max-width: 250px;" alt="#" /></a>
                 <li><a class="active" href="/home">Home</a></li>
                 <li><a href="/tours">Tours</a></li>
                 <li><a href="/hotels">Hotels</a></li>
                 <li><a href="#about">Blogs</a></li>
                 <li><a href="/login">Log In</a></li>
                  <li style="position: absolute; left:1120px; top:15px">
                       
                      
                     </li>
               </ul>
       </div>
   <div style="position:relative; height:85px; width:64%; background-color: #FCFAE8;  left: 300px; margin-top: 110px; border-radius: 2px;
   				box-shadow: 0px -1px 30px -11px rgba(0,0,0,0.75); border: 1px solid #C0C0C0">


   				<div>
   					<p style="position: relative; top:20px; left:180px; font-weight: normal; font-size: 25px;">Enter Hotel Place: </p>
				</div>

				
 <input type="text" id="htnm" name="sr" placeholder="Search" style="position: relative; top:-35px;left:400px ; height:45px; width:400px; border-radius: 3px; border: 2px solid #C0C0C0" >


      

           </div>                
                       


   </div>

   @for($i=0; $i < count($hotel); $i++)

	
      <div id="hote">


         <div  style="position: relative; width:980px; height: 205px; background-color: #ccffff; border-radius:2px;box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75); left: 300px; margin-top:25px; ">

         

            <img src= "{{asset('imgs/'.$hotel[$i]->picone)}}" width='200px;' height='150px;' style="border:1px solid black; padding:2px;  float:left; margin-right:10px; margin-bottom:5px; position:relative; top:30px; left:20px;">

               <h3 style="position: relative; top:27px; left:35px; font-family: Georgia ;font-weight: bold">{{$hotel[$i]->hname}}</h3>

               <h4 style="position: relative;left:35px; top: 35px; color: #B22222; ">Room : {{$hotel[$i]->roomname}}</h4>

               <h5 style="position: relative;left:30px; top: 50px;  ">Price : {{$hotel[$i]->price}}</h5>

               <a href="/hoteldetail/{{$hotel[$i]->id}}" class='Rqbutton' style="position: relative; padding-top:  10px; padding-bottom:10px; top:-30px; left:450px">Request</a>

         </div>


    @endfor

     
       </div>
        



      
     <div class="Sidenav">
   
         <nav>
            
            
            
            <ul>
                <li><a class="" href=""></a></li>
                 <li><a class="" href=""></a></li>
               <li><a class="active" href=""><i class="fa fa-home"></i> &nbsp &nbsp Home</a></li>
               <li><a href="#"><i class="fa fa-list"></i> &nbsp &nbsp News</a></li>
               <li><a href="#"><i class="fa fa-phone"></i> &nbsp &nbsp Contact us</a></li>
               <li><a href="#"><i class="fa fa-print"></i> &nbsp &nbsp About</a></li>
               <li><a href=""><i class="fa fa-user-circle"></i> &nbsp &nbspLog in</a></li>
            
            </ul>

   
         </nav>
</
      </div> 

  </form>

     </body>


     <script>

$(document).ready(function(){

        
 var original = $('#hote').html();
 
  $("#htnm").on('keyup',function(){

        var q = $(this).val();
        if(q != null){
          $.ajax({
            url:"{{url('searchHotel')}}",
            data:{
               q:q
            },
            dataType:'json',
             success:function(res){
              var ht='';
              
             $.each(res.data, function(index,data){
                var i = data.id;
                ht+='<div style="position: relative; width:980px; height: 205px; background-color: #ccffff; border-radius:2px;box-shadow: 2px 5px 28px -11px rgba(0,0,0,0.75); left: 300px; margin-top:25px; "><img src= "imgs/'+data.picone+'" width="200px;" height="150px;" style="border:1px solid black; padding:2px;  float:left; margin-right:10px; margin-bottom:5px; position:relative; top:30px; left:20px;"><h3 style="position: relative; top:27px; left:35px; font-family: Georgia ;font-weight: bold">'+data.hname+'</h3><h4 style="position: relative;left:35px; top: 35px; color: #B22222; ">Room :'+data.roomname+'</h4><h5 style="position: relative;left:30px; top: 50px;  ">Price : '+data.price+'</h5><a href="/hoteldetail/'+data.id+'" class="Rqbutton" style="position: relative; padding-top:  10px; padding-bottom:10px; top:-30px; left:450px">Request</a> </div>';

             });

             $('#hote').html(ht);

             }
          });
        }

      else{
         $('#hote').html(original);
      }

    });
});
    


     </script>

</html>




<!-- box-shadow: 0px -1px 26px -7px rgba(0,0,0,0.75); -->