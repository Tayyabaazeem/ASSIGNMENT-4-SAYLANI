<?php
include('db.php');

    if(isset($_SESSION['email']))
    {

?>
<!doctype html>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="" data-image="assets/img/sidebar-4.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
               <form method="post" >  <?php echo $_SESSION['email'] ;  ?> </form>
                </a>
            </div>

           
                
            <ul class="nav">
                <li class="active">
                    <a href="order_admin.php">
                        <i class="pe-7s-graph"></i>
                        <p>Order</p>
                    </a>
                </li>
                <li>
                    <a href="event_admin.php">
                        <i class="pe-7s-user"></i>
                        <p>Events</p>
                    </a>
                </li>
                <li>
                    <a href="news.php">
                        <i class="pe-7s-user"></i>
                        <p>Services</p>
                    </a>
                </li>          
            </ul>
        </div>
    </div>
    </body>
    <?php
    ob_flush();
    }
    else
    {
        echo "<script>window.location='logout.php';</script>";
    }
?>
    
    </html>