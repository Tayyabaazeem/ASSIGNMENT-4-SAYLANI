<!DOCTYPE html>
<html lang="en">

 <?php
          //---------------------------------------Insert Data Registration Form ------------------------------//
          
include('db.php');
          
          
          if(isset($_POST['submit']))

          {
            
          
            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];
            $email=$_POST['email'];
            $contect=$_POST['contect'];
            $country=$_POST['country'];
             $city=$_POST['city'];
            $street=$_POST['street'];
            $house=$_POST['address'];
            $description=$_POST['description'];
   
           $insert_query=" INSERT INTO booking 
           (first_name,last_name,email,contect_no,country,city,street_no,house_no,description) VALUES 
           ('$first_name','$last_name','$email','$contect','$country','$city','$street','$house',
           '$description')";
                     $run=mysqli_query($connection,$insert_query) or die(mysqli_error($connection));

                     echo "<script>alert('Save'); window.location:'order.php'</script>";
           }
          
            
            
        

          ?>

<body>
<?php
include('header.php'); ?>
        <div class="container" >
                <div class="row" id="form-container">
                        <div class="col-md-6"><form method="post">
                            <div class="form-group">
                              <label for="first-name">First Name:</label>
                              <input type="text" name="first_name" class="form-control" id="uname">
                              <label for="email">Email address:</label>
                              <input type="email" name="email" class="form-control" id="email">
                              <label for="Country">Country</label>
                              <input type="text" name="country" class="form-control" id="country">
                              <label for="street">Street No:</label>
                              <input type="text" name="street" class="form-control" id="contact-no">
                              <label for="description">Description:</label>
                              <textarea class="form-control" name="description" id="house-no"></textarea>
                              
                            </div></div>
                        <div class="col-md-6"><form action="/action_page.php">
                            <div class="form-group">
                              <label for="last-name">Last Name:</label>
                              <input type="text" name="last_name" class="form-control" id="lname">
                              <label for="contact">Contact No:</label>
                              <input type="text" name="contect" class="form-control" id="contact">
                              <label for="city">City</label>
                              <input type="text" name="city" class="form-control" id="city">
                              <label for="house">House NO:</label>
                              <input type="text" name="address" class="form-control" id="house-no">
                              
                            </div>
                            <div class="form-check">
                        
                        <button type="submit" name="submit" Value="Order" class="btn btn-primary">Order</button>
                      </div>

                        
                        </div>
        </div>
        </div>
        <?php
include('footer.php'); ?>
</body>
</html>