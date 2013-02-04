<html>
<body>
<?php 

	// $a[0] = "hello";
	// $a[1] = "jason";
	// $a[2] = "weng";

	// foreach ($a as $key) {
	// 	echo $key." ";
	// }


	$prices = array('tires' =>100 , 'oil' =>10, 'sp'=>4);

	$orders = file( "orders/orders.txt" );

	$number_of_orders = count( $orders );

	// for ($i=0; $i < $number_of_orders; $i++) { 
	// 	echo $orders[$i]."<br/>";
	// }


	// echo $prices['tires'];

	// echo "<br><br>";

	// foreach ($prices as $key => $value) {
	// 	echo $key." - ".$value."<br>";
	// 	}


	// // reset($prices);

	// $prices2 = array('tires' =>100 , 'oil' =>10, 'sp'=>4);

	// while (list($product, $price) = each( $prices2 ) ) {
	// 	echo "$product - $price";
	// }

 ?>

</body>
</html>