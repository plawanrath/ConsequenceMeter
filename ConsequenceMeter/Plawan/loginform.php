<form name="login-form" id="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
  <fieldset> 
  <legend>Please login:</legend> 
  <dl> 
    <dt> 
      <label title="Email">Email:
      <input tabindex="1" accesskey="u" name="Email" type="text" maxlength="50" id="Email" /> 
      </label> 
    </dt> 
  </dl> 
  <dl> 
    <dt> 
      <label title="Password">Password:
      <input tabindex="2" accesskey="p" name="Password" type="password" maxlength="15" id="Password" /> 
      </label> 
    </dt> 
  </dl> 
  <dl> 
    <dt> 
      <label title="Submit"> 
      <input tabindex="3" accesskey="l" type="submit" name="cmdlogin" value="Login" /> 
      </label> 
    </dt> 
  </dl> 
  </fieldset> 
</form>
<p><form action="register.php" method="post"> 
<label title="Sign Up">
<input tabindex="4" accesskey="i" type="Submit" name="SignUp" value="SignUp" />
</label>
</form></p>
