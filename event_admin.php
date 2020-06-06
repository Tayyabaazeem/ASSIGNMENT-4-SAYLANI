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
                    <a class="navbar-brand" href="#">Home</a>
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
                                <h4 class="title">Insert Record</h4>
                            </div>
							<?php
							$edit="";
	                        $edithead="";
	                        $editpara="";
	                        $btn="submit";
							if(isset($_POST['submit']))
							{
								
						$id=$_POST['id'];
                        $heading=$_POST['heading'];
                        $image=$_POST['image'];
                        $link=$_POST['link'];
                        	
						
						
						
					    $insertsql="insert into projects (id,heading,image,link) values ('$id','$heading','$image','$link')" ;
						mysqli_query($connection,$insertsql);
							}
							?>
                            
                            
					<?php
                   if(isset($_GET['del']))
                    {
	               $del=$_GET['del'];
                 if ($ressql=mysqli_query($connection,"delete from home where id='$del' "));
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
			    $selectsql="select * from  projects ";
					 $res=$connection->query($selectsql);
					 echo  "<thead>s
                                        <th>ID</th>
                                    	<th>Heading</th>
                                    	<th>Image</th>
                                    	
										<th>Link</th>
                                    </thead>
                                    <tbody>";
                    
					 	 while($home= mysqli_fetch_array($res))
						 {
							 $id=$home['id'];
							 $head=$home['heading'];
							 $image=$home['image'];
                             $link=$home['link'];
                                    echo "<tr>
                                        	<td>$id </td>
                                        	<td>$head</td>
                                        	<td>$image</td>
                                            <td>$link</td>
                                            
                                        	
                                        </tr>";
						 }
                                  echo "</tbody>";
                                echo "</table>";
						   ?>
                            </div>
                        </div>
                    </div>
					<?php		
			if(isset($_GET['edit']))
	{
		$edit=$_GET['edit'];
		echo $editsql="select * from home where id='$edit' ";
		$res=$connection->query($editsql);
		while($row=mysqli_fetch_assoc($res))
		{
			$id=$row['id'];
			$edithead=$row['heading'];
			$editpara=$row['para'];
			
		}
		$btn="update";
	}
	if(isset($_GET['update']))
	{
		 $id=$_GET['id'];
		$head=$_GET['txthead1'];
		$para=$_GET['txtpara1'];
		
	echo $updatesql="update home set heading='$heasud', para='$para' where id='$id'";
	echo $connection->query($updatesql);
                echo "<script>alert('Recod Update'); 
				</script>"; 
	}
?>	
<div class="content">
                                <form method="post">
                                    <div class="row">
                                        
										<div class="col-md-4">
                                            <div class="form-group" >
											
                                               <label>ID Autoincrement</label>
                                                <input type="text" name="id" class="form-control"  value="<?php echo $edit;?>"   >
                                            </div>
                                        </div>
										
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>heading</label>
                                                <input type="text"  class="form-control" name="heading" placeholder="Heading" value="<?php echo $edithead;?>" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >Image</label>
                                                <input type="file"  class="form-control" name="image" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label >Link</label>
                                                <input type="text"  class="form-control" name="link" >
                                            </div>
                                        </div>
									
                                    </div>

                                    

                                   <input type="submit"  class="btn btn-info btn-fill pull-right"   name="<?php echo $btn; ?>" value="<?php echo $btn; ?>">
									
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

       
	
	
</body>
</html>
