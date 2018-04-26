<html>
<head>
		<link rel="stylesheet" href="style.css" type="text/css">	
	
	<script  language="javascript">
		function validate(form)
		{	
			returnvalue=true;
			
			fname=form.fname.value;
			lname=form.lname.value;
			email=form.email.value;
			phone=form.phone.value;
			colz=form.colz.value;
			faculty=form.faculty.value;
			sem=form.sem.value;
			
			atpos = email.indexOf("@");
			dotpos = email.lastIndexOf(".");
			
			num="0123456789";
			counter=0;
			
			
			/*if(isEmpty(fname))
				alert("fname not entered"); >>>>>does not work*/	
			
			if(fname==""||lname==""||email==""||phone==""||colz==""||faculty==""||sem=="")
			{	
				returnvalue=false;
				alert(" All fields are not entered ");
			}	
			
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
			{
				alert("Not a valid e-mail address");
				returnvalue=false;
				form.email.focus();
			}
			
			//>>>>>>NUNMERIC VALIDATION
			{	
				for(i=0;i<phone.length;i++)
				{
					digit=phone.charAt(i);
					for(j=0;j<num.length;j++)
					{
						if(digit==num.charAt(j))
							counter=counter+1;
					
					}
				}
				
				
				if(counter<10)
				{
					alert("INVALID NUMBER");
					form.phone.focus();
					returnvalue=false;
				}
			}
			return returnvalue;			
		}
	</script>

</head>
<body>
	 
	<form method="POST" onsubmit="return validate(this)" action="data.php" class="signup">
		<input type="image" src="emc.jpg" alt="emc logo" height="30%" width="250px" style="float:left;">
		<input type="image" src="putali.jpg" alt="emc logo" height="30%" width="250px" style="float:right;">
		<br>
		<h3>REGISTRATION FOR OPEN YOUR WINGS WITH </h3><h1>MILAN RAI</h1>
		<table>
			<tr>
				<td>FIRST NAME</td>
				<td><input type="text" name="fname" placeholder="FIRST NAME" maxlength="10"></td>
			</tr>
			
			<tr>
				<td>LAST NAME</td>
				<td><input type="text" name="lname" placeholder="LAST NAME" maxlength="15"></td>
			</tr>
			
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="email" placeholder="EMAIL ADDRESS"maxlength="30"></td>
			</tr>
			
			<tr>
				<td>CONTACT NUMBER</td>
				<td><input type="text" name="phone" placeholder="CONTACT NUMBER" maxlength="10"></td>
			</tr>
			
			<tr>
				<td>COLLEGE/ORGANISATION</td>
				<td><input type="text" name="colz" placeholder="COLLEGE/ORGANISATION" maxlength="20"></td>
			</tr>
			
			<tr>
				<td>FACULTY</td>
				<td><input type="text" name="faculty" placeholder="FACULTY" maxlength="10"></td>
			</tr>
			
			<tr>
				<td>SEMESTER/YEAR</td>
				<td><input type="text" name="sem" placeholder="SEMESTER/YEAR" maxlength="10"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit">
					<input type="reset" name="reset" value="reset">
				</td>
			
			</tr>
		</table>
		
	</form>
</body>
</html>