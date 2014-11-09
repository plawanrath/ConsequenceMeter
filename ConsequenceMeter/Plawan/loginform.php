<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login to FinPact</title>
</head>
<body bgcolor="#F0F0F0">
<table style="width:100%;background-image: url('./images/head1.png'); text-align: center; text-decoration: underline; color: #FFFFFF; font-size: 40px;">
    <tr style="height: 150px; padding: 0px; border: 0px">
        <td >Welcome to FinPact </td>
        <td ></td>
        <td align="right">
            
            <a href="register.html"><img style="width: 64px; height: 64px; padding: 2px; border: 0px" title="Register New User" src="./images/config-users.png"/></a>
            
            
        </td>
    </tr>
</table>
<br><br><br><br>
<form name="login-form" id="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<center>
<fieldset style="width: 400px">
<legend>Login</legend>
<table>
<tr>
			<td> Email Id </td>
			<td> <input type="email" name ="Email" placeholder="yourname@email.com" required autofocus>
		</tr>
		<tr>
			<td> Password </td>
			<td> <input type=password name ="Password" required>
		</tr>
		<tr>
		</tr>
		<tr>
			<td>       <input tabindex="3" accesskey="l" type="submit" name="cmdlogin" value="Login" />  </td>
			<td> <input type="reset" value = Refresh></td>
		</tr>
</table>
</fieldset>
</center>
</form>
