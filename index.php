<!DOCTYPE html>
<html>
<head>
	<title>My PHP Preactis</title>
</head>
<body>
	<header>
		<h4>PHP Explore</h4>
		<hr>
	</header>
	<?php
		echo "welcome to my php code.";
	?>
	<br>

	<?php
		// This is a php Syntax.

		// comment using
		# This is also a single-line comment
		/*
		This is a multiple-lines comment block
		that spans over multiple
		lines
		*/
		/* + 15 */
		?>

	<?php
		$color = "red";
		echo "My car color is " . $color. "<br>";
		$language = "php, html, css, js, node, mongoDB, react.";
		echo "I am expert in " . $language. "<br>";
	?>

	<?php 
		#This is php variable example.
		$myBalance = 5 +10 +10;
		echo "my balance is total " .$myBalance . "<br>";
		$tex = "this is text variable.";
		echo "Hey ". $tex ."<br>"; 
		# the sum of two variables
		$x = 5;
		$y = 4.5;
		echo $x + $y;
	 ?>

	 <?php
	 #PHP echo and print Statements
	 #1.The PHP echo Statement
	 echo "<h2>PHP is Fun echo first!</h2>"; //first
	 print "<h2>PHP is Fun print than slow!</h2>"; // slow

	 echo('Learn PHP <br>');
	 print('Learn PHP <br>');
	 ?>

	 <?php 
	 #PHP Data Types
	 /*
	 Variables can store data of different types, and different data types can do different things.
	PHP supports the following data types:

	1.String
	2.Integer
	3.Float (floating point numbers - also called double)
	4.Boolean
	5.Array
	6.Object
	7.NULL
	8.Resource
	*/
	#PHP String Example
	$stringExample = "I hava 10 and 5 +10 tk"; //String
	echo "$stringExample <br>";

	#PHP Integer Example
	$ages=20; //Integer
	echo "$ages <br>";

	#PHP Float Example
	$flt=1.500; //Float
	echo '$flt';

	#PHP Boolean Example
	#PHP Array Example
	#PHP Object Example
	#PHP NULL Example
	#PHP Resource Example

	  ?>
</body>
</html>