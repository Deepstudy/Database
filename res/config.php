	
	<?php //start of php scripting
	$var =10;//declaring a variable using $
	$x = mysql_connect("127.0.0.1","root","");// $x  = mysql_connect("localhost" , username ,password)
	if(!$x) // check if connection is established
	{die("ERROR: ".mysql_error());}
	mysql_select_db("irrigation enterprise");
	session_start();
	if (isset($_SESSION['user']))
	{
	mysql_close($x);
	$x = mysql_connect("127.0.0.1","'$_SESSION[user]'","'$_SESSION[pwd]'");
	if(!$x)
	{die("ERROR: ".mysql_error());}

	}
	?>
