function cpass()
{
	//alert("Connected");
	
	var name = document.getElementById('name').value;
	var pass = document.getElementById('password').value;

	
	
	
	//Password 
	
	if(pass == "")
	{
		alert('Empty Password');
	}
	
	else
	{
		if(pass.length <=3 )
		{
			alert('password contains at least 3 char');
		}
		if(pass != conPass)
		{
			alert('Pass does not match');
		}
	}
	
		
	
	if(name == "")
	{
		alert('Empty Name');
	}
	
	
	
}