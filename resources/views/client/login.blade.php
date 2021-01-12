<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="{{ asset('css/Logstyle.css') }}">
</head>
<body>
	<form method="post">

		<input type="hidden" name="_token" value="{{csrf_token()}}">

		 <a href="/home"   class="btn btn-success" style="position: absolute; top:30px;left:20px; height:45px; width:80px;margin:10px 25px;  font-size: 20px;">Home</a>
		


    <div class="login-box">
    <img src="/imgs/avatar.png" class="avatar">
        <h1>Login Here</h1>
           
            <p>Username</p>
            <input type="text" name="uname" value="" placeholder="Enter Username">
            <div style="color: yellow;position: relative; left:70px; top:-10px">
			{{session('msg')}}
		</div>

    
   			<p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
             <div style="color: yellow;position: relative; left:70px; top:-10px">
			{{session('msg2')}}
		</div>
			
	    		
       <input class="LogBut" type="submit" name="submit" value="Login">


 	 

			
				
          <!-- 
                <div style="position: relative; top:-200px;color:yellow" class="alert alert-warning alert-dismissible fade show" role="alert">
                    <%= alert[0].msg %>

			
				 
                </div>


	
				
          
                <div style="position: relative; top:-115px;color:yellow" class="alert alert-warning alert-dismissible fade show" role="alert">
                    <%= alert[1].msg %>

			
			
                </div>
 -->



               



	</form>
	
</body>
</html>