<!DOCTYPE html>
<?php
include('db.php');
?>
<html lang="en">
<head>

    <style>
        .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,<svg xmlns="http://www.w3.org/2000/svg"><filter id="filter"><feColorMatrix type="matrix" color-interpolation-filters="sRGB" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0" /><feGaussianBlur stdDeviation="3" /></filter></svg>#filter');
  filter: grayscale(1) blur(3px);
  -webkit-filter: grayscale(1) blur(3px);
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect a.info, .hovereffect h2 {
  -webkit-transform: scale(0.7);
  -ms-transform: scale(0.7);
  transform: scale(0.7);
  -webkit-transition: all 0.4s ease-in;
  transition: all 0.4s ease-in;
  opacity: 0;
  filter: alpha(opacity=0);
  color: #fff;
  text-transform: uppercase;
}

.hovereffect:hover a.info, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
#service-row{
margin: 20px 0px;
}
    </style>
</head>
<body>
<?php
include('header.php'); ?>


<h2><center>Our projects</center></h2>
<div class="container">

    <div class="row" id="service-row">
         
               <?php
  $selectsql="SELECT * FROM  projects ORDER BY id DESC ";
    $resul=mysqli_query($connection,$selectsql);
    while($gallery= mysqli_fetch_array($resul))
  {
    $id=$gallery['id'];
    $txtpic1=$gallery['heading'];
    $pic1=$gallery['image'];
    $link=$gallery['link'];
    
  

         ?>
                    <div class=" col-sm-4">
    
                            <div class="hovereffect">
                                <img class="img-responsive" src="images/<?php echo $pic1 ;?>">
                                <div class="overlay">
                                   <h2><?php echo $txtpic1 ;?></h2>
                                   <a class="info" href="<?php echo $link ;?>">link here</a>
                                </div>
                                  </br>  </br>
                            </div>

                          

                        </div>
            
            <?php }?>
                    </div> 
                </div>
              
    
         
                <?php
include('footer.php'); ?>

</body>
</html>