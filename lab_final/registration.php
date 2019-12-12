<html>
	<head>
		<title>REGISTRATION</title>
<body>		

<script type="text/javascript" src="re.js"></script> 

<fieldset>
    <legend><b>Registration</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input name="id" type="text" id="id"></td>
				<td>
					<div id="tdid"></div>
				</td>
			</tr>	
          <tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password" id="password"></td>
				<td id="tdpass"></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password" id="conPass"></td>
				<td id="tdconPass"></td>
			</tr>	
			<tr><td colspan="4"><hr/></td></tr>
               <tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" id="name"></td>
				<td>
					<div id="tdName"></div>
				</td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" id="mail">
					<abbr title="hint: hasib3030@gmail.com"><b></b></abbr>
				</td>
				<td id="tdEmail"></td>
			</tr>		
		
		</table>
		<hr/>
		<input type="submit" value="Submit" onclick="registration()">
		<input type="reset">
		<a href="login.php">Logout</a>
	</form>
</fieldset>
</body>
</head>
</html>