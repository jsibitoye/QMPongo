<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/morder.css" rel="stylesheet" type="text/css" />
</head>
<script type="text/javascript" src="jscript/js.js">
</script>
<?php
	$ct=$_GET['cat'];
	mysql_connect("localhost","root","");
	mysql_select_db("my_php");
	$q=mysql_query('select * from products where category="'.$ct.'" ');
	echo $ct.mysql_error()
	//category	brand	name	year_man	price	colour	quantity	image	product_date	about	prod_id
?>

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
  <div id="sch"><input type="text" placeholder="search" class="txbx" id="schbx"/> <input type="submit" id="schbut" value="SEARCH"/></div>
  </div>
      <div class="navi"> <a href="index.php" class="navi_hm">Home</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Clients </a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Services</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">About Us</a> <a href="adminside.php" class="navi_tx">Admin..</a> </div>
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
  <li> <a href="#">Account Settings</a></li><br />
  <li><a href="#">Google Connect</a></li><br />
  <li><a href="#">Accessory</a></li><br />
  <li><a href="#">Send A Message</a></li><br />
  <li><a href="#">Latest </a></li>
  </ul>
  </div>
 
 <div id="mid"> <div id="midl">
   <h1 align="center" style="font:30px Trebuchet MS; color:#FFF; text-shadow:1px 1px 120px blue; display:block;"><u><i>Order</i></u></h1>
   <div style=" height:320px; width:200px; float:right;"> <img id="p" src=""height="200px" width="100%"> <input type="text" id="tot_b" disabled/>
   <a href="construct.php"><input type="submit" value="BUY" style=" font:25px arial; margin:0 0 0 70px; text" ></a>
   </div>
   <table id="ord" border="0" width="70%">
   <tr id="ord1">
   	<td width="41%">Product</td><td width="16%">price</td><td width="19%">Available</td><td width="13%">Order</td><td width="11%">Sum</td>
 </tr>
 
 
 <?php 
 $a=0;
while($return= mysql_fetch_array($q))
	{ 
		$a +=1;
	$pnm= $return['name'];
	$pic=$return['image'];
	$P_id=$return['prod_id'];
	$P_brnd=$return['brand'];
	$P_price=$return['price']; 
	$P_id=$return['prod_id'];
	$P_av=$return['quantity'];
	$snd="'od".$a."','prc".$a."','av".$a."','sm".$a."'";
	$psus="'pic".$a."','".$pic."'";
	 echo'
	 <tr>
	 <td style="color:white;">
	 		<img id="pic'.$a.'" style="margin:10px 0 10px 0;" height="120px" width="90%" src="'.$pic.'" 
			onmouseover="da3('.$psus.')"> 
	 		<br> '.$pnm.'</td>
	 <td style="color:#F90;font: 25px arial;"> $<input type="text" class="prtb" id="prc'.$a.'" value="'.$P_price.'" disabled></td>
	 <td style="color:#F90;"> <input type="text" class="prtb" id="av'.$a.'" value="'.$P_av.'" disabled></td>
	 <td style="color:#F90;"> <input type="text" class="odtb" id="od'.$a.'" onkeyup="da2('.$snd.')" placeholder="Order"></td>
	  <td style="color:#F90;"> <input type="text" class="prtb" id="sm'.$a.'" disabled></td>
	 
	 </tr>
	 ';
	}
 ?>
 
 
   </table>
   <br /><br />
   
</div>  
 </div>
      <!--Left Block Ends -->
      <!--Right Block Starts --><!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
    <div id="footer_block"> <span class="ftr_nv"> <a href="http://all-free-download.com/free-website-templates/">Home</a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Clients </a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Services</a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">About Us </a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Contact us</a> </span> <span class="cpy">Copyright &copy; 2014, All rights reserved. Rollo cars designed by Joshua</span> </div>
  </div>
</center>
<div align=center></div></body>
</html>
