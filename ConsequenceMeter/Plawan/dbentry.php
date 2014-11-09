<?php
define("HOST", "localhost");
define("DBUSER", "plawanrath");
define("PASS", "plawanrath");
define("DB", "ConsequenceMeter");

$connect = mysql_connect(HOST,DBUSER,PASS);
if(!$connect)
{
	die('Could not connect');
	}
$db = mysql_select_db(DB);
if(!db)
{
	die('Could not connect to Database!!!');
	}
if (isset($_POST['Name']) && !empty($_POST['Name']) && isset($_POST['Email']) && !empty($_POST['Email']) && isset($_POST['Age']) && !empty($_POST['Age']) && isset($_POST['Password']) && !empty($_POST['Password']) && isset($_POST['confirmPassword']) 
&& !empty($_POST['confirmPassword']) && isset($_POST['Income']) && !empty($_POST['Income']) && isset($_POST['RecExpense']) 
&& !empty($_POST['RecExpense']))
{
	//echo "Awesome!!";
	if ( strcmp($_POST['Password'],$_POST['confirmPassword']) == 0 )
	{
	$name = $_POST['Name'];
	$email = $_POST['Email'];
	$age = $_POST['Age'];
	$pass = $_POST['Password'];
	$income = $_POST['Income'];
	$recEx = $_POST['RecExpense'];
	if (isset($_POST['Ssn']) && !empty($_POST['Ssn']))
	{
		$ssn = $_POST['Ssn'];
		}
		else{
			$ssn = NULL;
			}
	$query = sprintf("INSERT INTO ConsequenceMeter.Users (Name, Ssn, Email, Password, Income, RecExpense, Age) VALUES ('%s', '%s', '%s', 
	'%s', '%s', '%s', '%s');", $name, $ssn, $email, $pass, $income, $recEx, $age);
	$res = mysql_query($query);
	if ($res == TRUE)
	{
		header('Location: loginform.php');
		}
		else{
			header('Location: register.html');
			}
	}
	header('Location: loginform.php');
	}
else
{
	header('Location: loginform.php');
	}
header('Location: loginform.php');
?>