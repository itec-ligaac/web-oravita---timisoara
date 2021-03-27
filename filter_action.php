<?php

session_start();

if(isset($_POST['filtButton'])){
	
	
	$rate=$_POST['rate'];
	$temperature=$_POST['temperature'];
			
	
	header("Location: ../web-oravita---timisoara/index.php?rate=".$rate."&temperature=".$temperature);
	exit();
	
}
else{
	header("Location: ../web-oravita---timisoara/index.php?error");
	exit();
}

?>
