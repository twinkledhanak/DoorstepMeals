<html>
<head>

<title>Doorstep Meals-home</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="icon" href="icon.png">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/style.css"> <!-- Gem style -->
<script src="js/modernizr.js"></script> <!-- Modernizr -->
<script language="Javascript" type="text/javascript">	
var counter = 1;
var limit = 3;
function addInput(divName){
          var newdiv = document.createElement('div');
          
          var name_food=document.getElementById("Product_name").innerHTML;
          var cost_food=document.getElementById("Cost").innerHTML;
       


          newdiv.innerHTML =  "<div >"+(counter + 1) + " "+name_food+" "+cost_food+"</div>";
          document.getElementById("cd-cart-items").appendChild(newdiv);
          counter++;
     
}
</script>
</head>
<body>
<div class="top_part" >
<h1 class="h1_top">Doorstep Meals</h1>
<ul>
  <li><a href="dummy1.php" class="active">Home</a></li>
  <li><a href="ordering.php">Ordering</a></li>
  <li><a href="offers.html">Offers</a></li>
  <li><a href="hire.php">We're Hiring</a></li>

  <li><a  id="cd-cart-trigger" href="#cd-cart"><img  style="width:50px;height:40px;"src="cart-icon.png" alt="YUMMY"></a></li>
  <li style="float:right"><a class="active" href="index.html" >Sign In</a></li>
</ul>
</div>		
	
<div id="cd-shadow-layer"></div>
	<div id="cd-cart">
		<h2>Cart</h2>
		<ul class="cd-cart-items">
			<li>
				<span class="cd-qty">1x Product Name</span>
				<div class="cd-price">$9.99</div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>

			<li>
				<span class="cd-qty">2x</span> Product Name
				<div class="cd-price">$19.98</div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>

			<li>
				<span class="cd-qty">1x</span> Product Name
				<div class="cd-price">$9.99</div>
				<a href="#0" class="cd-item-remove cd-img-replace">Remove</a>
			</li>
		</ul> <!-- cd-cart-items -->

		<div class="cd-cart-total">
			<p>Total <span>$39.96</span></p>
		</div> <!-- cd-cart-total -->

		<a href="dummy1.php" class="checkout-btn">Checkout</a>
	</div> <!-- cd-cart -->
<img src="food2.jpg" alt="YUMMY" style="width:100%;height:70%;">
<div class="parent" style="width=100%;height:70%;">
  <div class="layout">
	<img src="img1.png" alt="ordering" style="display: block; margin: 0 auto;">
	<label class="flow" style="font-size:45px; margin-left:30%; display:inline;">Ordering</label>
	<p class="desc" style="text-align:center;font-size:20px;">The ordering platform features a contemporary design for a quick and seamless ordering and payment experience</p>
	
  </div>
  
  <div class="layout">
	<img src="img2.png" alt="packaging" style="display: block; margin: 0 auto;">
	<label class="flow" style="font-size:45px; margin-left:30%; display:inline;">Packaging</label>
	<p class="desc" style="text-align:center;font-size:20px;">Our packaging is engineered to keep the food fresh, hot and easy to consume. Our delivery bags maintain food integrity through the delivery cycle</p>
	
  </div>
  <div class="layout">
	<img src="img3.png" alt="delivery" style="display: block; margin: 0 auto;">
	<label class="flow" style="font-size:45px; margin-left:30%; display:inline; ">Delivery</label>
	<p class="desc" style="text-align:center;font-size:20px;">We provide fast delivery within 58 minutes. Extra 8 mins(50+8) are incorporated to ensure rider and road safety</p>
	
  </div>
 
</div>

</body>
</html>