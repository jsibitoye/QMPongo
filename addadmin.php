<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
if(isset($_POST['bn']))
{	session_start();
	$con= mysql_connect('localhost','root','');
	mysql_select_db("my_php");
	if($con)
	{
		
	}
	else
	{}
	
	$name = $_POST['username'];
	$pw1=$_POST['p1'];
	$pw2= $_POST['p2'];	
	$Fullname=$_POST['Fullname'];
	$mail=$_POST['maile'];
	$phone=$_POST['Phone'];
	$pos=$_POST['pos'];
	$pic="prods/";
$pic= $pic.$_FILES["img"]["name"];
$tm=$_FILES["img"]["tmp_name"];
  $con= mysql_connect('localhost','root','');
  mysql_select_db("my_php");
	if ($con){
			  $q=mysql_query("insert into employees(U_name,Password,pic,Full_name,Maile,Phone,Pos) 				values('$name','$pw2','$pic','$Fullname','$mail','$phone','$pos')");
	  move_uploaded_file($tm,$pic);
		}
	else { }
if($q)
{$_SESSION['state']= 'A staff account has been succesfully created!!! ';} else{ $_SESSION['state']= 'There is an error in the parameters you filled in, please review it!!!'; 	}
}
?>
<link href="css/pagees.css" rel="stylesheet" type="text/css" />
</head>
<body id="home2">
    <div  style="width:100%; background:#000">
  <div style=" margin:auto; padding:auto !important; width:70%">
 <div id="top">   <div id="me" align="center"><i><b>
      QMPongo</b></i></div>
  <div id="me2">
  <marquee scrollamount="3">
  <I>QMPongo.COM, HOME  OF BAG &amp; ACCESSORIES</I>
  </marquee></div>
  <form action="search.php" method="post">
   <div id="sch"><input type="text" name="srch" placeholder="search"id="schbx"/> 
  <a href="">
 
   <input type="image" src="images/index.jpg" height="21	" width="30"
   style=" margin:0 0 -10px 3px;" />
   </a>
   <br /><br />
   <span style="color:white;">Search By:   
   <select name="cat" style="background:#999; border:none;" >
   <option>All</option>
   <option>Accessories</option>
   <option>Bags</option>
   <option>Cloths</option>
   <option>Shoes</option>
   <option>Others</option>
   </select></span>
    </div>
    </form>
 </div>
   <div class="navi2"> <a href="index.php" class="navi_tx"  id="navAd">Home</a> 
 <span class="navi_txp">
  <ul>
     <li id="t">Clothing
         <ul id="ls">
           <li> <a href=products.php?cat=car class="prdt">				                 New Arrivals</a></li>
           <li><a href=products.php?cat=lap class="prdt">                Dressing & Skirts</a></li>
           <li><a href=products.php?cat=mob class="prdt">                 Tops & Shirts</a></li>
           <li><a href=products.php?cat=ext class="prdt">	                Pants & Shorts</a></li>
           <li><a href=products.php?cat=ext class="prdt">	                Shop All</a></li>
         </ul>
     </li>
  </ul>
 </span>
   
  <a href="#" class="navi_tx">What’s Hot</a> 
<span class="navi_txp">
  <ul>
     <li id="t">Products
         <ul id="ls">
           <li> <a href=products.php?cat=car class="prdt">				                 New Bags</a></li>
           <li><a href=products.php?cat=lap class="prdt">                 NewShoes</a></li>
           <li><a href=products.php?cat=mob class="prdt">                 Accessories</a></li>
           <li><a href=products.php?cat=ext class="prdt">	                 MoreItems</a></li>
         </ul>
     </li>
  </ul>
 </span>
 <a href="#" class="navi_tx">Contact</a> </div>
 </div>
 </div>
 <hr />
    </div>
    <!--Top Block Ends -->
  </div>
  <div class="adminbody">
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <form method="post" action="addadmin.php" enctype="multipart/form-data">
      <div id="adlog2"> <div style="z-index:1; position:relative; width:130px; left:220px; top:-40px;">Employee Registration</div>
  
 <div style=" border-right:1px solid hsla(240,100%,50%,0.2); width:45%; float:left; height:150px; padding:10px 30px 0 0;">	
    User name: <input type="text" placeholder="Login name" name="username" style="width:140px; float:right" />
    <br /><br />
      Password: <input type="password" placeholder="login password" name="p1" style="width: 140px; float:right" />
<br /><br />
Confirm Password:  <input type="password" placeholder="input password again" name="p2" style="width: 140px; float:right" />
<br /><br />
Picture:  <input type="file" name="img" style="width:140px; float:right" />
</div>

<div style=" border-left:1px solid hsla(240,100%,50%,0.2); width:45%; padding:10px 0 0 20px; float:left; height:150px;">	
    Full Name: 
  	<input type="text" name="Fullname" placeholder="First and Last Name" style="width: 140px; float:right" />
    <br /><br />
      Email Address: <input type="text" name="maile" style="width: 140px; float:right" placeholder="Valid email address" />
<br /><br />
Phone Nuber:  <input type="text" placeholder="Phone" name="Phone" style="width: 140px; float:right" />
<br /><br />
Position:	<input type="text" name="pos" placeholder="Possition in company" style="width: 140px; float:right" /></div>

<br /><br /><br />
<input type="submit" value="Register" style="float:right; margin:0 80px 0 0"  name="bn"/><br />
 <br /> <br /> <br /><br /> <br /> <br /> <br /> <br /> <br /> <br />
 <p style="font-family: 'Lemon', cursive; height:20px; color:#9C9; font-size:14px; text-align:center; padding:5px 0 0 0;">
 <?php
   	if (isset($_SESSION['state'])){
	echo $_SESSION['state'];
	unset($_SESSION['state']);
	}
   ?>
</p>
  </div>
  </form>
       <div id="left_block">
       <span class="blk1_lp"> <span class="our">ADMIN</span>     
      		<div style="height:150px; width:150px; box-shadow:2px 2px 9px;">
        		<img src="images/CopyUserSettings.png" height="150px" width="150px"/>
      		</div>
	  </span>
  	  <br /><br /> <br /><br />
       <ul id="sbar">
      <li style=" background:#FC3; color:#FFF; font:25px 'Arial Black', Gadget, sans-serif">QUICK LINK</li><br>
      <li> <a href="#">Employee maintenance</a></li><br />
      <li><a href="#">Item maintenance</a></li><br />
     
      <li><a href="adminside.php">Edit Site Map</a></li><br />
      </ul>
      <span>
      <br />
      </span>
     </div>
  
      <!--Left Block Ends -->
      <!--Right Block Starts --><!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
  </div>
</center>
<div align=center>
</div>
</div>
<div id="footer_block"> 
<div style="width:700px; position:relative; left:100px; height:20px; padding-top:20px;">
<span class="ftr_nv"> 
<a href="#">Home</a> <span>|</span> 
<a href="index.php">Clients </a> <span>|</span> 
<a href="clients.php">Services</a> <span>|</span> 
<a href="services.php">About Us </a> <span>|</span> 
<a href="about.php">Contact us</a> 
</span> 
<span class="cpy">Copyright &copy; 2014, All rights reserved. Rollo cars designed by Joshua</span>
</div>
</body>
</html>
