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

		$totalqty = $t + $o + $s;

		$totleamount = $t * TPRICE + $o * OPRICE + $s * SPRICE;

		echo "subtotal: $".number_format($totleamount,2)."<br/>";

		//echo empty($s);
		
		// echo '<p> your oder is as follows: </p>';
		// echo "$t tire<br/>"; //放在里面的变量必须要双引号
		// echo $o.'oilqty<br/>';
		// echo $s.'sparkqty<br/>';


	?>


</body>
</html>