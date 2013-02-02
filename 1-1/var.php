<html>
<head>
	<title>order-form</title>
</head>
<body>
	<h1>VAR</h1>
	<?php

		define("TPRICE",100);
		define("OPRICE",10);
		define("SPRICE",4);

		$varname = 't';

		echo TPRICE;

		// echo $php_errormsg


		// $a=2;
		// echo $a++;

		// $b=2;
		// echo ++$b;

		// $aa = 5;
		// $bb = &$aa;

		// $aa = 7;

		// echo $bb;

		$out = `ls -la`;
		echo '<pre>'. $out .'</pre>';

		class sampleClass{};
		$myObj = new sampleClass();

		if ( $myObj instanceof sampleClass ){
			echo "myObj is a instance of sampleClass";
		}
		

	?>


</body>
</html>