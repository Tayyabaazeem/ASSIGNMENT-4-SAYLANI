<!DOCTYPE html>
<html lang="en">
<head>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid" id="header-img" >
        <div class="container" id="header-content">
              <h3>  Welcome To Quantum Home</h3>
               <h1> Improvements Company </h1>
               <p> Quantum is a local, reliable home improvements company serving the UK's geographic <br />
                regions of Herefordshire, Worcestershire and Gloucestershire.</p><br />
        </div>
</div>

 <?php
      //---------------------------------------login form------------------------------//
      include('db.php');
          session_start();

   
      if(isset($_POST['submit']))

      {
        
        
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);

        $select_query="select email,password from login where email='$email' && password='$password' ";
        $result=mysqli_query($connection,$select_query) or die(mysqli_error($connection));
       
        if(mysqli_num_rows($result)>0)
        {
          $_SESSION['email']=$email;
           echo "<script>  window.location='desh.php'; </script>";
        }
        else
  {
    echo "<script> alert('Invalid Email Or Password!'); window.location='login.php'</script>";
}
        
        
      }

      ?>
<div class="container">	
	<div class="row">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- Start form -->
                    <form method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      </div>
                      <div class="form-check">
                        <button class="btn btn-info" type="button" name="showpassword" id="showpassword" value="Show Password">Show password</button> 
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                      </div>
                      
                    </form>


			<!-- End form -->
		</div>
		
	
		
	</div>
</div>
<script>
    jQuery(document).ready(function(){


// Show password Button
$("#showpassword").on('click', function(){
    
    var pass = $("#password");
    var fieldtype = pass.attr('type');
    if (fieldtype == 'password') {
        pass.attr('type', 'text');
        $(this).text("Hide Password");
    }else{
        pass.attr('type', 'password');
        $(this).text("Show Password");
    }


});





});






</script>
</body>
</html>