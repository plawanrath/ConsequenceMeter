<?php
function show_userbox()
{
	$e = $_SESSION['Email'];
	$Uid = $_SESSION['Uid'];
	$n = $_SESSION['Name'];
	echo "<div id='userbox'>
	Welcome $n
	<ul>
		   <li><a href='./logout.php'>Logout</a></li>
		</ul>
             </div>";
	}
?>