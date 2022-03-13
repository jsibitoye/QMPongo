<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>

<?php
session_start();
//if(isset($_SESSION['AdminLog'])){
//echo '<meta http-equiv="refresh" content="0.5; url=adminPan.php">';
//}
//else 
if(isset($_POST['nam'])){
	  $unm= $_POST['nam'];
	  $pwrd=$_POST['pwrd'];
if( $unm !="" && $pwrd !="") 
{
	
  if($unm=="admin" && $pwrd=="admin")
	  {
		  echo "login";
		  $_SESSION['Astatus']="admin";
		  $_SESSION['AdminLog']=1;
		  echo '<meta http-equiv="refresh" content="0.5; url=adminPan.php">';
	  }
  else{
			mysql_connect("localhost","root","");
		  mysql_select_db('my_php');
		  $q= mysql_query('select * from  employees where U_name="'.$unm.'" and Password="'.$pwrd.'"');
		  if($q)
		  {
			  $user= mysql_fetch_array($q);
			  $u=$user['U_name'];
			  $p=$user['Password'];
			  if($u==$unm && $p==$pwrd)
			  {
				  $_SESSION['Astatus']="staff";
				  $_SESSION['AdminLog']=1;
				  echo '<meta http-equiv="refresh" content="0.5; url=adminPan.php">';
			  }
			  else  $_SESSION['err'] = "Invalid User Name or Password";
 		 }
		  else  $_SESSION['err'] = "Invalid User Name or Password".mysql_error();
	   }
}
else{ $_SESSION['err'] = "Invalid User Name or Password";
	}
}
?>
<link href="css/pagees.css" rel="stylesheet" type="text/css" />


</head>

<body id="home">	
    <div  style="width:100%; background:#000">
  <div style=" margin:auto; padding:auto !important; width:70%">
 <div id="top">   <div id="me" align="center"><i><b>
      QMPongo</b></i></div>
  <div id="me2">
  <marquee scrollamount="3">
  <I>QMPongo.COM, HOME  OF BAG &amp; ACCESSORIES</I>
  </marquee></div>
 </div>
   <div class="navi"> <a href="index.php" class="navi_tx">Home</a> 
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
 <a href="admin.php" class="navi_tx" id="navAd">Admin..</a> </div>
 </div>
 </div>
 <hr />
 <div style=" margin:auto;width:30%">
 
 <div class="adminPan">
   <div style="width:50%; margin:auto; padding-top:5%">
   <span class="our"> <br /> <h3>Administrator Login</h3></span>
   <span style="color:white;">
   <?php
   	if (isset($_SESSION['err'])){
	echo $_SESSION['err'];
	unset($_SESSION['err']);
	}
   ?></span> <br />
   
   <br />
   <form action="adminlogin.php" method="post">
   ................Admin Id: <input type="text"  name="nam" /> <br /><br />
   ................Password: <input type="password" name="pwrd" /> <br /><br />
   <hr />
  <input type="submit" value="Login" />	
  </form>
   </div>
 </div>
 
 
 </div>
 <br />
 <br /><br /><br />
<footer style=" color:#FFF; width:100%; height:100px; background:#000; padding-top:20px;">
 <div style="width:80%; height:60px; background:hsla(0,0%,100%,0.1); margin:auto; padding:auto;">this must stay at xthe foot</div>
 </footer>
</body>
</html>
