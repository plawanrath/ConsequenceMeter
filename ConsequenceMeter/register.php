<?php
echo "
	<form id=entry method='post' action='dbentry.php'>
		<fieldset>
			<legend><h4>Personal details</h4></legend>
				<table border='0'>
					<tr align='left'>				
					<th align='left'><label for=Name>Name: </label></th>
					<th align='left'><input id=Name name=Name type=text placeholder='First and last name' required autofocus /></th>
					</tr>
					<tr align='left'>
					<th align='left'><label for=Email>Email: </label></th>
					<th align='left'><input id=Email name=Email type=email placeholder='example@domain.com' required /></th>
					</tr>
					<tr align='left'>
					<th align='left'><label for=Age>Age: </label></th>
					<th align='left'><input id=Age name=Age type=text required/></th>
					</tr>
					<tr align='left'>
					<th align='left'><label for=Ssn>SSN: </label></th>
					<th align='left'><input id=Ssn name=Ssn type=text /></th>
					</tr>
					<tr align='left'>
					<th align='left'><label for=Password>Password: </label></th>
					<th align='left'><input id=Password name=Password type=password placeholder='******' required/></th>
					</tr>
					<tr align='left'>
					<th align='left'><label for=confirmPassword>Confirm Password: </label></th>
					<th align='left'><input id=confirmPassword name=confirmPassword type=password placeholder='******' required/></th>
					</tr>
				</table>
		</fieldset>
		<fieldset>
			<legend><h4>Financial Details</h4></legend>
			<table border='0'>
				<tr align='left'>
				<th align='left'><label for=Income>Monthly Income: </label></th>
				<th align='left'><input id=Income name=Income type=text placeholder='$'/></th>
				</tr>
				<tr>	
				<th align='left'><label for=RecExpense >Monthly Recurring Expenses: </label></th>
				<th align='left'><input id=RecExpense name=RecExpense type=text placeholder='$'/></th>
				</tr>
			</table>
		</fieldset>

			<button type=submit>Register</button>
			<input type='reset' name='reset' id='reset' value='Reset'/>

	</form>		
"	;
echo "<p><a href='index.php'>Go Back</a></p>";
?>