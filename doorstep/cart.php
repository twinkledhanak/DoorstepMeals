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


/*
 

  if (isset($_GET['product'])) {
    addtoCart();
  }


function addtoCart() {
	
$product=$_GET['product'];
$userid=15;
  

$query=mysql_query("insert into `orders` values('$product','14')");
		if($query)
		{
		echo '<script type="text/javascript">alert("Added to Cart!");</script>';
		}
		else
		{
		echo '<script type="text/javascript">alert("Could not add to cart");</script>';
		}

}
*/
$insertion=$_GET['insertion'];
$cuisine=$_GET['cuisine'];
//echo $insertion;
//echo $cuisine;

$query="SELECT * from `menu` where `cuisine`='$cuisine'";
  if($query_result = mysql_query($query))
  {

    if(mysql_num_rows($query_result)>0){

      //$num_rows=mysql_num_rows($query_result);
      $ctr=1;
      while($row=mysql_fetch_assoc($query_result)){
      	if($ctr==$insertion)
      		{$id=$row['id'];
      			$name=$row['name'];
      			$quantity=1;
      			$price=$row['price'];
      			//echo $row['name'];
      		}

      	$ctr++;

      	   }
   //$result->free();
    }
  }

//$username=$_SESSION['username'];
if(!empty($_SESSION['username']))
{
$query=mysqli_query("insert into `orders` values('$name','$price','$quantity','$username')");
 // $query=mysql_query("insert into `orders` values('$id','15')");
		if($query)
		{
		echo '<script type="text/javascript">alert("Added to Cart!");</script>';
		}
		else
		{
		echo '<script type="text/javascript">alert("Could not add to cart");</script>';
		}

}
else
{
	echo 'YOU HAVE TO LOGIN FIRST :)';

$query=mysql_query("insert into `orders` values('$name','$price','$quantity','umasreerarm')");
 // $query=mysql_query("insert into `orders` values('$id','15')");
    if($query)
    {
    echo '<script type="text/javascript">alert("Added to Cart!");</script>';
    }
    else
    {
    echo '<script type="text/javascript">alert("Could not add to cart");</script>';
    }


}
?>