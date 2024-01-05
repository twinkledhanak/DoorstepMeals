<html>
<head>

<title>Doorstep Meals-home</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="icon" href="icon.png">

<script src="http://www.google.com/jsapi" type="text/javascript"></script>
 
<script type="text/javascript">google.load("jquery", "1.3.2");</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->




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

</head>
<body>
<div class="top_part" >
<h1 >Doorstep Meals</h1>
<ul>
  <li><a href="dummy1.php" >Home</a></li>
  <li><a href="ordering.php" class="active">Ordering</a></li>
  <li><a href="offers.html">Offers</a></li>
  <li><a href="hire.php">We're Hiring</a></li>

  <li><a  id="cd-cart-trigger" href="#cd-cart"><img  style="width:50px;height:40px;"src="cart-icon.png" alt="YUMMY"></a></li>
  <li style="float:right"><a class="active" href="index.html" >Sign In</a></li>
</ul>
</div>    

<div class="cuisine">Our Cuisines..</div>

<div class="menu">

<a href="chinese.php?cuisine=<?php echo $var_value1 ?>">
<span>
<div class="responsive" id='Chinese' >
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc">Chinese</div>
  </div>
</div>
</span>
</a>
<a href="chinese.php?cuisine=<?php echo $var_value2 ?>">
<span>
<div class="responsive" id='Continental' >
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc">Continental</div>
  </div>
</div>
</span>
</a>

<a href="chinese.php?cuisine=<?php echo $var_value3 ?>">
<span>
<div class="responsive" id='Italian' >
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc" >Italian</div>
  </div>
</div>
</span>
</a>

<a href="chinese.php?cuisine=<?php echo $var_value4 ?>">
<span>
<div class="responsive">
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc" id='cuisine'>Fast Food</div>
  </div>
</div>
</span>
</a>

</div>

<div class="clearfix"></div>


<div class="menu">

<a href="chinese.php?cuisine=<?php echo $var_value5 ?>">
<span>
<div class="responsive">
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc" >North Indian</div>
  </div>
</div>
</span>
</a>

<a href="chinese.php?cuisine=<?php echo $var_value6 ?>">
<span>
<div class="responsive">
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc" >Maharashtrian</div>
  </div>
</div>
</span>
</a>


<a href="chinese.php?cuisine=<?php echo $var_value7 ?>">
<span>
<div class="responsive">
  <div class="img">
    
      <img src="sample1.jpg" alt="Food" >
  
    <div class="desc">South Indian</div>
  </div>
</div>
</span>
</a>


<a href="chinese.php?cuisine=<?php echo $var_value8 ?>">
<span>
<div class="responsive">
  <div class="img">
    
      <img src="dessert.png" alt="Food" >
  
    <div class="desc">Desserts</div>
  </div>
</div>
</span>
</a>

</div>

<div class="clearfix"></div>




</body>
</html>