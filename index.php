<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>QMPongo.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />



<?php
session_start();
//if(isset($_SESSION['AdminLog'])){
//echo '<meta http-equiv="refresh" content="0.5; url=adminPan.php">';
//}
//else 
if(isset($_POST['nam']))
{
	  $unm= $_POST['nam'];
	  $pwrd=$_POST['pwrd'];
	  if( $unm !="" && $pwrd !="") 
	  {
		  mysql_connect("localhost","root","");
		  mysql_select_db('my_php');
		  $q= mysql_query('select * from  Users where U_name="'.$unm.'" and Password="'.$pwrd.'"');
		  if($q)
		  {
			  $user= mysql_fetch_array($q);
			  $u=$user['U_name'];
			  $p=$user['Password'];
			  if($u==$unm && $p==$pwrd)
			  {
				  $_SESSION['status']="user";
				  $_SESSION['Ulog']=1;
				  echo '<meta http-equiv="refresh" content="0.5; url=Home.php">';
			  }else  $_SESSION['err'] = "Invalid User Name or Password 1";
 		  } else  $_SESSION['err'] = "Invalid User Name or Password";
	   }
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
  <I>QMPongo.COM, HOME  OF BAG &amp; ACCESSORIES</I>
  </marquee></div>
  <div id="sch"><input type="text" placeholder="search"id="schbx"/> 
  <a href="">
   <img src="images/index.jpg" height="21	" width="30"  />
   
</a>   </div>
  </div>
   <div class="navi"> <a href="index.php" class="navi_hm">Home</a> 
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
           <li> <a href=products.php?cat=Bags class="prdt">				                 New Bags</a></li>
           <li> <a href=products.php?cat=Cloths class="prdt">				                 Cloths</a></li>
           <li><a href=products.php?cat=Shoes class="prdt">                 NewShoes</a></li>
           <li><a href=products.php?cat=Accessories class="prdt">                 Accessories</a></li>
           <li><a href=products.php?cat=Others class="prdt">	                 MoreItems</a></li>
         </ul>
     </li>
  </ul>
 </span>
 <a href="adminlogin.php" class="navi_tx">Admin..</a> </div>
      <div class="tp_img1">
        <div id="lay"> <h3>Don't miss out</h3>
			<a href="" style="color:#FFF" >Sign up</a> to receive 15% off your next order !!!</div>
      </div>
    </div>
    <!--Top Block Ends -->
  </div>
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <div id="left_block"> 
      
      
   
      <span class="blk1_lp"> 
          <span style="color:red; background:hsla(0,0%,100%,0.2); display:block; position:relative; left:-20px; text-align:center;">
   <?php
   	
   	if (isset($_SESSION['err'])){
	echo $_SESSION['err'];
	unset($_SESSION['err']);
	if (isset($_SESSION['err']))
	echo' but y na';
	}
   ?></span>
   <br />
      <span class="our">Member Login</span> <span class="usr" style="margin-top:12px;">User Login</span>
      <form action="index.php" method="post">
        <input name="nam" type="text" class="txbx" />
        <span class="usr">Password</span>
        <input name="pwrd" type="password" class="txbx" />
        <span class="chk">
        <input name="" type="checkbox" value="" />
        <span>Remember me</span> </span> <span class="usr">No Account Yet? <a href="userReg.php">Register</a></span>
        <input name="" type="submit" class="smt" value="" />
       
        </form>
        </span> <span class="blk2_lp"> <span class="nws">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Latest Updates</span> 
        <div style="height:400px; float:left;; width:250px;"><br />
      <div>  <img src="images/Tods-ss16-woman-todswavebag-menu.jpg"height="100px"  width="170px;"  /><span class="crs"><br />
      Moto sachel key fob<br /> <br />
      $64<br /> <br /><a href="www.rolo.buy"> MORE </a> </div>
      <div style=" margin-top:120px;">
       <img src="images/tods-sneakers-man-desktop.jpg" height="100px" width="170px;"  /><span class="crs"><br /> 
       Sport Shoe<br /> <br />
       $79<br /> <br /> <a href="www.rolo.buy"> MORE </a> 
      </div>
       <div style=" margin-top:250px;">
       <img src="images/tods-backpack-man-desktop.jpg" height="100px" width="170px;"  /><span class="crs"><br />
       Leader Traveling Bag<br /> <br />
       $7	0							        <br /> <br /> <a href="www.rolo.buy"> MORE </a> 
      </div>
        </div>
      </div>
      <!--Left Block Ends -->
      <!--Right Block Starts -->
      <div id="right_block"> <span class="modul"> <span class="wel">Welcome To  QMPongo</span> <span class="inr_bllk"> <img src="images/map.gif" width="195" height="120" class="flr" alt="" /> <span class="txt"> <a href="#">QMPongo </a>is  more than an online fashion marketplace with fashion designers around the globe  but it aims to be like your &ldquo;best virtual friend&rdquo; giving you tips in what to  wear 365 days as often as needed according to your Search Criteria.<br />
        <br />QM Pongo sells Clothing, Bags, Shoes and Accessories and it connects you to a community of fashion designers, giving you access to an ever-growing variety of products with information from past to present. </span> </span> <a href="#"><img src="images/rd.gif" alt="" width="56" height="12" class="rdmr" /></a> </span> <img src="images/rp_ln.gif" alt="" class="rp_ln" /> <span class="blks"> <span class="special"> <span class="our">Our Specializing</span> 
 <span class="lnk">
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <a href="#">Process reengineering</a> 
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <a href="#">Benchmarking based on call center needs</a> 
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <a href="#">Employee coaching and development</a> 
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <a href="#">Increase customer satisfaction</a> 
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <a href="#">Management training and coaching</a> 
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <a href="#">CRM and CTI applications</a> 
  </span> 
  <a href="#"><img src="images/rd.gif" alt="" width="56" height="12" class="rdmr2" /></a> 
  </span>
  <span class="clnt"> <span class="our">Our Clients</span> 
  <span class="lnk_cl"> <img src="images/blt.gif" alt="" width="5" height="7" style="margin-top:6px;" />
  <span class="cls2"><a href="#">Bank of America</a><br />
        Pasadena, New Bay Area
  </span> 
  <img src="images/blt.gif" alt="" width="5" height="7" />
  <span class="cls"><a href="#">Union Bank of California</a><br />
        Monterey Park, West Coast California </span> <img src="images/blt.gif" alt="" width="5" height="7" />
        <span class="cls"><a href="#">JCB Int'l Bank</a> <br />
        Los Angeles/ Tokyo Calabasas</span> <img src="images/blt.gif" alt="" width="5" height="7" />
        <span class="cls"><a href="#">LTD First Bank of Beverly Hills</a> <br />
        All around the world</span> </span> <a href="#"><img src="images/rd.gif" alt="" width="56" height="12" class="rdmr2" /></a> </span> </span> <span class="spcl_blk"> <img src="images/rp_ln.gif" alt="" class="rp_ln" /> <span class="widt"><span class="our">Our Specializing</span></span> <span class="widt"> <img src="images/man_c.jpg" alt="" width="235" height="97" /> <span class="tx_widt">In this new creative paradigm, your shirt or shoe is an opportunity to say as much about your company as your prospectus.<br />
        <br />
        Our team of consultants are world leading providers in solutions that help people in solving clothing and accessories related problems.</span> </span> </span> </div>
      <!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
    <div id="footer_block"> <span class="ftr_nv"> <a href="#">Home</a> <span>|</span> <a href="#">Clients </a> <span>|</span> <a href="#">Services</a> <span>|</span> <a href="#">About Us </a> <span>|</span> <a href="#">Contact us</a> </span> <span class="cpy">Copyright &copy; 2016, All rights reserved. <a href="http://www.buytemplates.net/CSS-XHTML-web-templates.aspx">QMPongo cars</a> designed by Joshua</span> </div>
  </div>
</center>
<div align=center></div></body>
</html>
