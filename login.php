<?php

$username = $_POST['username'];
$password = $_POST['password'];
if ($username&&$password)
{
	
	$connect = mysql_connect("localhost","root","") or die("couldn't connect");
	mysql_select_db("testing") or die ("couldn't find db");
	$query = mysql_query("SELECT * FROM 2nddatabase WHERE username='$username' ");
	$numrows = mysql_num_rows($query);
	if($numrows!=0)
	{
		//code to login
		while($row= mysql_fetch_assoc($query))
		{
			$dbusername =  $row['username'];
			$dbpassword =  $row['password'];
		}
		//check if they match 
		if($username==$dbusername && $password==$dbpassword)
            include('images.php');
		 //die("Now you will be able to view iron man wallpapers.<a href='images.php'>CLICK HERE TO GET THEM</a>");
		else 
			echo "incorrect password";
	}
	else
		die("u  are not my friend");
}
ELSE 	
	DIE("PLEASE ENTER USERNAME AND PASSWORD")
?>
</html>
