<!doctype html>
<?php
include('head.php');
include('db.php');
?>
<body>

<?php 
include('menu.php');
?>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Order</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-15">
                        <div class="card">
                            <div class="header">
                                
                            </div>
							<?php
							$edit="";
	                        $edithead="";
	                        $editpara="";
	                        $btn="submit";
							if(isset($_POST['submit']))
							{
								
						$head1=$_POST['txthead1'];
						$para1=$_POST['txtpara1'];	
						
						
						
					    $insertsql="insert into home (heading,para) values ('$head1','$para1')" ;
						mysqli_query($conn,$insertsql);
							}
							?>
                            
					<?php
                   if(isset($_GET['del']))
                    {
	               $del=$_GET['del'];
                 if ($ressql=mysqli_query($conn,"delete from home where id='$del' "));
	               {
		              echo "<h1 align='center'> $del This id is Deleted successfuly</h1>"; 
	               }
	                  
                    }
                     ?>	 
					
					<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Record</h4>
                               
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table method="post" class="table table-hover table-striped">
                                   
               <?php
			   // fetching record
			    $selectsql="select * from  booking ";
					 $res=$connection->query($selectsql);
					 echo  "<thead>
                                        <th>ID</th>
                                    	<th>First Name</th>
                                    	<th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phon No</th>
                                        <th>Country</th>
                                        <th>City</th>
                                        <th>Street No</th>
                                        <th>House no</th>
                                        <th>Description</th>
                                    	
										
                                    </thead>
                                    <tbody>";
                    
					 	 while($home= mysqli_fetch_array($res))
						 {
							 $id=$home['id'];
							 $first_name=$home['first_name'];
							 $last_name=$home['last_name'];
                             $email=$home['email'];
                             $phone=$home['contect_no'];
                             $country=$home['country'];
                             $city=$home['city'];
                             $street=$home['street_no'];
                             $house=$home['house_no'];
                             $des=$home['description'];
                                    echo "<tr>
                                        	<td>$id </td>
                                        	<td>$first_name</td>
                                        	<td>$last_name</td>
                                            <td>$email</td>
                                            <td>$phone</td>
                                            <td>$country</td>
                                            <td>$city</td>
                                            <td>$street</td>
                                            <td>$house</td>
                                            <td>$des</td>
                                        	
                                        </tr>";
						 }
                                  echo "</tbody>";
                                echo "</table>";
						   ?>
                            </div>
                        </div>
                    </div>
					

</body>
</html>
