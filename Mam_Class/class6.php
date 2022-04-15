<?php
$isPost=false;
$name="";	
$password="";	
$department="";	
if(isset($_POST["btnSave"]))
{
	$isPost=true;
	if(isset($_POST["name"]))
	{
		$name=$_POST["name"];
		//echo $name;
	}
	if(isset($_POST["pass"]))
	{
		$password=$_POST["pass"];
	}
	if(isset($_POST["dept"]))
	{
		$department=$_POST["dept"];
		//echo $name;
	}
}
?>
<html>
	<body>
		<h1 style="text-align:center;">Sign Up!</h1>
		<hr>
		
		<form action="#" method="post">
			Name:<input type="text" id="name" name="name" value="<?php echo $name; ?>">
			<?php
			
			if($isPost==true && $name=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br><br>";
			?>
			Password:<input type="password" id="pass" name="pass">
			<?php
			
			if($isPost==true && $password=="")
			{
				echo "<span style='color:red;'>Required</span>";
			}
			echo "<br><br>";
			?>
			Gender:<input type="radio" name="gender" value="Male">Male 
			<input type="radio" name="gender" value="Female"> &nbsp; Female
			<br><br>
			Skills:
			<input type="checkbox" name="skills[]" value="C">C
			<input type="checkbox" name="skills[]" value="C++">C++
			<input type="checkbox" name="skills[]" value="C#">C#
			<input type="checkbox" name="skills[]" value="Java">Java
			<br><br>
			Department:	<select name="dept">
			                <option value="0">Select</option>
							<option value="1">CSE</option>
							<option value="2">BBA</option>
							<option value="3">EEE</option>
				        </select>
						<?php
						
						if($isPost==true && $department=="0")
						{
							echo "<span style='color:red;'>Select a department</span>";
						}
						echo "<br><br>";
						?>
			Address:<textarea name="address" rows="3" cols="20">
			</textarea><br><br>
			<input type="submit" value="Click" name="btnSave">
		<form>
	</body>
</html>