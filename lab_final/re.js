function registration()
{
	//alert("Connected");
	var id = document.getElementById('id').value;
	var name = document.getElementById('name').value;
	var email = document.getElementById('mail').value;
	var pass = document.getElementById('password').value;
	var conPass = document.getElementById('conPass').value;
	
	
	
	if(id == "")
	{
		alert('Empty id');
	}
	
	
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
	
	if(email == "")
	{
		alert('Empty Email');
	}
	
	
	
	
}