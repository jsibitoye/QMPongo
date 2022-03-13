<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/morder.css" rel="stylesheet" type="text/css" />
<?php
	$id=$_GET['id'];
	mysql_connect("localhost","root","");
	mysql_select_db("my_php");
	$q=mysql_query('select * from products where prod_id="'.$id.'" ');
	//category	brand	name	year_man	price	colour	quantity	image	product_date	about	prod_id
?>

</head>
<body>
<center>
  <div id="main_block">
    <!--Top Block Starts -->
    <div id="top_block">
 <div id="top">   <div id="me" align="center"><i><b>
      QMPongo</b></i></div>
  <div id="me2">
  <marquee scrollamount="3"><I>ROLLO.COM, HOME OF CARS & INVESTMENTS</I></marquee>
  </div>
  <div id="sch"><input type="text" placeholder="search"id="schbx"/> <input type="submit" id="schbut" value="SEARCH"/></div>
  </div>
      <div class="navi"> <a href="index.php" class="navi_tx">Home</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Clients </a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Services</a>  <span class="navi_txp">
  <ul>
     <li id="t">Products
         <ul id="ls">
           <li> <a href=products.php?cat=car class="prdt">				                 New Cars</a></li>
           <li><a href=products.php?cat=lap class="prdt">                 Laptops</a></li>
           <li><a href=products.php?cat=mob class="prdt">                 Mobiles</a></li>
           <li><a href=products.php?cat=ext class="prdt">	                 Extremes</a></li>
         </ul>
     </li>
  </ul>
      
      </span><a href="adminside.php" class="navi_tx">Admin.</a> </div>
    </div>
    <!--Top Block Ends -->
  </div>
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <div id="left_blocko"> <span class="blk1_lp"> <span class="our">ORDER </span></span><br /><br /> <br /><br />
   <ul id="sbar">
  <li style=" background:#FC3; color:#FFF; font:25px 'Arial Black', Gadget, sans-serif">QUICKLINK</li><br>
  <li> <a href="motionorder.php">Mlti-Order</a></li><br />
  <li><a href="#">Google Connect</a></li><br />
  <li><a href="#">Organins Products</a></li><br />
  <li><a href="#">Send A Message</a></li><br />
  <li><a href="#">Accesories</a></li>
  </ul>
  </div>
 
 <div id="midh"><h1 align="center" style="font:30px Trebuchet MS; color: #666; text-shadow:1px 1px 120px blue; display:block; background: #FFC;"><i>Rollo &nbsp;</i></h1>
<?php 
	$return= mysql_fetch_array($q);
	$pnm= $return['name'];
	$pic=$return['image'];
	$P_id=$return['prod_id'];
	$P_brnd=$return['brand'];
	$P_price=$return['price']; 
	$P_id=$return['prod_id'];
	$P_dt=$return['about'];
	echo ' <span class="prod_list1"><div class="picbox2"><img src="'.$pic.'" height=100% width=100% > </div><br>
			  '.$pnm.'<br> MAKER:'.$P_brnd.'<br>  Price:<b style="color:green;  text-shadow:2px 2px 1px #F90;">$'. 		 				$P_price.'</b><br> <a href="construct.php"><input type="button" value="BUY"/ ></a></span> <br />
 <div id="abt">'.$P_dt.' </div>';
 ?><br />
 <span> </span>
 </div>
      <!--Left Block Ends -->
      <!--Right Block Starts --><!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
    <div id="footer_block"> <span class="ftr_nv"> <a href="http://all-free-download.com/free-website-templates/">Home</a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Clients </a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Services</a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">About Us </a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Contact us</a> </span> <span class="cpy">Copyright &copy; 2014, All rights reserved. QMPongo </span> </div>
  </div>
</center>
<div align=center></div></body>
</html>
