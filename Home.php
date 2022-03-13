<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>NewWave Business Inc.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/pagees.css" rel="stylesheet" type="text/css" />
   <?php
        mysql_connect("localhost","root","");
		mysql_select_db("my_php");
		$q=mysql_query('select * from products');
      ?>

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
    <!--Top Block Ends -->
  </div>
    <!--Content Block Starts -->
  
<div class="adminbody">    
      <!--Left Block Starts -->
      <div id="left_block"><br /><br /> <br /><br />
       <ul id="sbar">
      
      <li> <a href="#"><img src="images/images_028.jpg" height="150" width="220" /></a></li><br />
      <li><a href="#"><img src="images/images_006.jpg" height="150" width="220" /></a></li><br /><br />
      </ul>
      <span>
      <br />
      </span>
     </div>
     
     <h1 align="center" style="font:30px Trebuchet MS; color:#000; text-shadow:1px 1px 120px blue; display:block;">
            	Latest Materials
            </h1>
 
 	 <div id="homMid"> 
	
     
     
     
     <?php 
$a=2;
while($return= mysql_fetch_array($q))
	{ 
	$pnm= $return['name'];
	$pic=$return['image'];
	$P_id=$return['prod_id'];
	$P_Kind=$return['Kind'];
	$P_price=$return['price']; 
	$P_id=$return['prod_id'];
	  if($a==1)
	  {echo ' <span class="prod_list1">
	  		<div class="picbox">
			<a href=more.php?id='.$P_id.'>
			<img src="'.$pic.'" height=200 width=300 />
			</a> </div>'.$pnm.
			'<br> Type:'.$P_Kind.'
			<br>  Price:<b style="color:#CCCCCC;  text-shadow:2px 2px 1px #F90;">
			$'.$P_price.'</b>
			<br><a href=more.php?id='.$P_id.'>More</a></span>';
			  $a=$a+1;
	  }
	  else if($a==2){echo ' <span class="prod_list2"><div class="picbox"><a href=more.php?id='.$P_id.'>
	  			<img src="'.$pic.'" height=200 width=300 ></a></div>
			  '.$pnm.'<br> Type:'.$P_Kind.'<br> Price:<b style="color:#CCCCCC;  text-shadow:2px 2px 1px #F90;">$'.					 				$P_price.'</b><br><a href=more.php?id='.$P_id.'>More</a></span>';
			  $a=$a-1;
	  }
	}
 ?>
    </div>
      <!--Left Block Ends -->
      <!--Right Block Starts --><!--Right Block Ends -->
      <!--Content Block Ends -->
  </div>
  <div id="sub_block2">
  
  
  <footer>
 <div style="width:80%; height:60px; background:hsla(0,0%,100%,0.1); margin:auto; padding:auto; margin-right:100px; padding-top:20px;">
 
 <span class="ftr_nv"> 
 <a href="#">Home</a> <span>|</span> 
 <a href="#">Clients </a> <span>|</span> 
 <a href="#">Services</a> <span>|</span> 
 <a href="#">About Us </a> <span>|</span> 
 <a href="#">Contact us</a> </span> <br />
 <span class="cpy">Copyright &copy; 2014, All rights reserved. Rollo cars designed by Joshua</span> 
 
 </div>
 </footer>
  
  
  </div>
</body>
</html>
