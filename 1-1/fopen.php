<h1>Jason's auto parts</h1>
<?php 
	
	@ $fp = fopen( "orders/orders.txt", 'rb' );

	if( !$fp ){
		echo "no orders pending";
		exit;
	}

	while (!feof($fp)) {
		$order = fgets($fp,999);
		echo $order."<br>";
	}

 ?>