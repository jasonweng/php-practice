<html>
<head>
	<title>order-form</title>
</head>
<body>
	<h1>Jason's auto parts</h1>
	<h2>Order results at</h2>
	<?php



		define("TPRICE",100);
		define("OPRICE",10);
		define("SPRICE",4);

		$totleamount = 0.00;

		$t =  $_POST['tireqty'];
		$o = $_POST['oilqty'];
		$s = $_POST['sparkqty'];
		$find = $_POST['find'];
		$address = $_POST['address'];
		$date = date( 'H:i, jS F Y' );


		$DOCUMENT_ROOT = $_SERVER[ 'DOCUMENT_ROOT' ];

		// echo "$DOCUMENT_ROOT"

		

		echo "<p>at".date( 'H:i, jS F Y' )."</p>";

		$outputstring = $date."\t".$t."tireqty \t".$o."oilqty \t".$s."sparkqty"
						.$s."sparkqty".$address."\n".

		@ $fp = fopen( "orders/orders.txt", 'ab' );

		flock( $fp, LOCK_EX );
		if( !$fp ){
			echo "could not be";
			exit;
		}

		fwrite( $fp, $outputstring, strlen($outputstring) );

		flock( $fp, LOCK_UN );
		fclose( $fp );


		// $totalqty = $t + $o + $s;

		// $totleamount = $t * TPRICE + $o * OPRICE + $s * SPRICE;

		// if( $f == 'a' ){
		// 	echo "<p>I'm a regular customer</p>";
		// }else{
		// 	echo "funck";
		// }

		// switch ($f) {
		// 	case 'a':
		// 		echo "<p>I'm a regular customer</p>";
		// 		break;
			
		// 	default:
		// 		echo "<p>do not know.</p>";
		// 		break;
		// }

		// echo "subtotal: $".number_format($totleamount,2)."<br/>";

		//echo empty($s);

		// echo '<p> your oder is as follows: </p>';
		// echo "$t tire<br/>"; //放在里面的变量必须要双引号
		// echo $o.'oilqty<br/>';
		// echo $s.'sparkqty<br/>';


	?>


</body>
</html>