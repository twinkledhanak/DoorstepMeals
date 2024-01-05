<?php
$conn_error='Could not connect';
$mysql_host='localhost';
$mysql_user='root';
$mysql_pass='';
$mysql_db='doorstep';

if(@mysql_connect($mysql_host,$mysql_user,$mysql_pass))
{
  if(@mysql_select_db($mysql_db))
  {
    //echo 'Ok';
  }
  else
    echo 'Not connected.';
}
?>
<html>
<head>

<title>Doorstep Meals-home</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">

<link rel="stylesheet" type="text/css" href="mychinese.css">
<link rel="icon" href="icon.png">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="http://www.google.com/jsapi" type="text/javascript"></script>
 
<script type="text/javascript">google.load("jquery", "1.3.2");</script>




<script src="js/main.js"></script> <!-- Gem jQuery -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->


</head>
<body>
<div class="top_part" >
<h1 class="h1_top">Doorstep Meals</h1>
<ul>
  <li><a href="dummy1.php" >Home</a></li>
  <li><a href="ordering.php" class="active">Ordering</a></li>
  <li><a href="offers.html">Offers</a></li>
  <li><a href="hire.php">We're Hiring</a></li>

  <li><a  id="cd-cart-trigger" href="#cd-cart"><img  style="width:50px;height:40px;"src="cart-icon.png" alt="YUMMY"></a></li>
  <li style="float:right"><a class="active" href="index.html" >Sign In</a></li>
</ul>
<div id="cd-shadow-layer"></div>

  <div id="cd-cart">
    <h2>Cart</h2>
    <ul class="cd-cart-items" id="cd-cart-items">
      <li>
        <span class="cd-qty">1x Product Name </span>
        <div class="cd-price">$9.99</div>
        <a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
      </li>


    </ul> <!-- cd-cart-items -->

    <div class="cd-cart-total">
      <p>Total <span>$39.96</span></p>
    </div> <!-- cd-cart-total -->

    <a href="" class="checkout-btn">Checkout</a>
  </div> <!-- cd-cart -->





</div>  


<?php
$var_value1="Chinese";
$var_value2="Continental";
$var_value3="Italian";
$var_value4="Fast Food";
$var_value5="North Indian";
$var_value6="Maharashtrian";
$var_value7="South Indian";
$var_value8="Desserts";






?>  

<div class="container" >

<div  class="class30"  >

<a href="chinese.php?cuisine=<?php echo $var_value1 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>Chinese</p>
  </div>
</div>
</span>
</a>


<a href="chinese.php?cuisine=<?php echo $var_value2 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>Continental</p>
  </div>
</div>
</span>
</a>

<a href="chinese.php?cuisine=<?php echo $var_value3 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>Italian</p>
  </div>
</div>
</span>
</a>

<a href="chinese.php?cuisine=<?php echo $var_value4 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>Fast Food</p>
  </div>
</div>
</span>
</a>

<a href="chinese.php?cuisine=<?php echo $var_value5 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>North Indian</p>
  </div>
</div>
</span>
</a>
<a href="chinese.php?cuisine=<?php echo $var_value6 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>Maharashtrian</p>
  </div>
</div>
</span>
</a>
<a href="chinese.php?cuisine=<?php echo $var_value7 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>South Indian</p>
  </div>
</div>
</span>
</a>
<a href="chinese.php?cuisine=<?php echo $var_value8 ?>">
<span>
<div class="smallplacard">
  <div class="transbox">
    <p>Desserts</p>
  </div>
</div>
</span>
</a>





</div><!--End of class30-->


<div   class="class65" >




<?php 


$cuisine=$_GET['cuisine'];
$query="SELECT * from `menu` where `cuisine`='$cuisine'";
  if($query_result = mysql_query($query))
  {

    if(mysql_num_rows($query_result)>0){

      //$num_rows=mysql_num_rows($query_result);
      $ctr=1;
      while($row=mysql_fetch_assoc($query_result)){


?>
<div class="clearfix">
<div class="placard">

        <img class="food_icon"  src="<?php echo $row['src']; ?>" alt="YUMMY">
        <div class="placard_desc">

        <h3><?php echo $row['name']; ?></h3><br> 

        <h4><?php echo $row['cuisine']; ?></h4><br>

        <h4><?php echo $row['price']; ?></h4>
        <br>

        <h5><?php echo $row['description']; ?></h5>

        </div>

            

<img src="veg.png" class="ingredients">

        
 </div>




 <a href="cart.php?insertion=<?php echo $ctr?>&cuisine=<?php echo $cuisine?>">
<input type="button" class="button" value="Add to Cart" />
</a>





 </div>      
  
<?php   
$ctr++;          
      }
   //$result->free();
    }
  }
?>



</div><!--End of class65-->



</div><!--End of container-->
<div class="clearfix"></div>




</body>
</html>