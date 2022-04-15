<html>
	<body>
		<h1 style="text-align:center;">Sign Up completed!</h1>
		<hr>
		<?php
		//print_r($_POST);
		echo "Name is:".$_POST["name"]."<br>";
		echo "Password is:".$_POST["pass"]."<br>";
		echo "Gender is:".$_POST["gender"]."<br>";
		echo "Skills are:";
		foreach($_POST["skills"] as $value)
		{
			echo $value.",";
		}
		echo "<br>";
		echo "Department is:".$_POST["dept"]."<br>";
		echo "Address is:".$_POST["address"]."<br>";
		?>
	</body>
</html>