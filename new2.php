<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/adnew.css"rel="stylesheet" type="text/css" />

<?php
$cat=$_POST['cat'];
$kind=$_POST['Kind'];
$nam=$_POST['nam'];
$year=$_POST['year'];
$prc=$_POST['price'];
$col=$_POST['color'];
$qaunt=$_POST['quant'];
$abt=$_POST['abt'];
$pic="prods/";
$pic= $pic.$_FILES["img"]["name"];
$tm=$_FILES["img"]["tmp_name"];
$con= mysql_connect('localhost','root','');
mysql_select_db("my_php");
if ($con){

$q=mysql_query("insert into products(category,Kind,name,year_man,price,colour,quantity,image,about) values('$cat','$kind','$nam','$year','$prc','$col','$qaunt','$pic','$abt')");
move_uploaded_file($tm,$pic);
}
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
  <marquee scrollamount="3">
  <I>QMPongo.COM, HOME OF CARS & INVESTMENTS</I>
  </marquee>
  </div>
  <div id="sch"><input type="text" placeholder="search" class="txbx" id="schbx"/> <input type="submit" id="schbut" value="SEARCH"/></div>
  </div>
      <div class="navi"> <a href="index.php" class="navi_hm">Home</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Clients </a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Services</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">About Us</a> <a href="http://all-free-download.com/free-website-templates/" class="navi_tx">Products</a> </div>
    </div>
    <!--Top Block Ends -->
  </div>
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <div id="left_block"> <span class="blk1_lp"> <span class="our">ADMIN </span>     
  <div style="height:150px; width:150px; box-shadow:2px 2px 9px;"><img src="" height="150px" width="150px"/></div></span><br /><br /> <br /><br />
   <ul id="sbar">
  <li style=" background:#FC3; color:#FFF; font:25px 'Arial Black', Gadget, sans-serif">QUICK LINK</li><br>
  <li> <a href="#">Account Settings</a></li><br />
  <li><a href="#">Google Connect</a></li><br />
  <li><a href="#">Organiz Products</a></li>
  <br />
  <li><a href="adminside.php">Site Map</a></li>
  <br />
  <li><a href="#">Accesories</a></li>
  </ul>
  </div>

 <div id="mid">
<div id="mid2"><h1 align="center"style="font:30px Trebuchet MS; color:#FFF; text-shadow:1px 1px 120px blue;display:block;">Add New Products</h1>
 <span id="smap">
<div style=" margin:70px 0 0 0;height:100px; width:400px; text-align:center; text-shadow:1px 1px 1px #FFFFFF; font:30px 'MS Serif', 'New York', serif; color:green"><i>Product Has Been Successively Added</i></div>
   </span>

</div>  
 </div>
 </form>
      <!--Left Block Ends -->
      <!--Right Block Starts --><!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
    <div id="footer_block"> <span class="ftr_nv"> <a href="http://all-free-download.com/free-website-templates/">Home</a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Clients </a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Services</a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">About Us </a> <span>|</span> <a href="http://all-free-download.com/free-website-templates/">Contact us</a> </span> <span class="cpy">Copyright &copy; 2014, All rights reserved. QMPongo cars designed by Joshua</span> </div>
  </div>
</center>
<div align=center></div></body>
</html>
