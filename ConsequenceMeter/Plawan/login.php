<?php
if (!$_SESSION['Uid'] )
{
	if(isset($_POST['cmdlogin']))
	{
		$e = $_POST['Email'];
		$p = $_POST['Password'];
		$query = sprintf("SELECT Uid FROM Users where Email = '%s' AND Password = '%s' LIMIT 1;", $e, $p);
		$result = mysql_query($query);
		if(mysql_num_rows($result) != 1)
		{
			//invalid
			echo "Something wrong!!";
			include "loginform.php";
			}
			else
			{
				$row = mysql_fetch_array($result);
				$_SESSION['Uid'] = $row['Uid'];
				$_SESSION['Email'] = $e;
				$_SESSION['Name'] = $row['Name'];
				show_userbox();
				}
		}
		else
		{
			//User yet to login
			include "loginform.php";
			}
}
else
{
	//user already logged in
	show_userbox();
	}
?>