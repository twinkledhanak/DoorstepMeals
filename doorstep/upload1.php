

<?php
if( $_SERVER['REQUEST_METHOD'] === 'POST' )
{
$name=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['type'];
$extension=strtolower(substr($name, strpos($name, '.')+1));
$tmp_name=$_FILES['file']['tmp_name'];
if(isset($name))
{
	if(!empty($name))
	{
		if($extension=='doc'||$extension=='docx')
		{
			$location ="uploads/";
			if(move_uploaded_file($tmp_name, $location.$name))
			{
				echo '<script type="text/javascript">alert("Uploaded!");</script>';
			}
			else
			{
				echo '<script type="text/javascript">alert("There was an error");</script>';
			}
		}
		else
		{echo '<script type="text/javascript">alert("Only doc/docx files allowed ");</script>';}	
	}
	else
	{
		echo '<script type="text/javascript">alert("Please choose a file!");</script>';
	}




}
}
?>
