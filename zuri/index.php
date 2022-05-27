<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="phne.css">
    <link rel="stylesheet" type="text/css" href="tablet.css">
	
	<title></title>
</head>
<body>
     <header>
     	<h1> I4G Zuri training institute</h1>

     </header>
      <hr>
      
      
		     <div>
		     	
      <h2 align="center">
                WORKING WITH FORM IN PHP  
     </h2>
    <div class="form" align="center"> 

     
      <form method="POST" action="user_data.php">
		      <label for="name">NAME:</label><br> <input type="text" name="name" /> <br><br>
		      <label>E-MAIL:</label><br><input type="email" name="email"/><br><br>

		      <label>DATE OF BIRTH:</label><br><input type="date" name="dateofbirth" />
		      <br><br><br>
		      <select name="country">Country:
		      	<option value="Albania">Albania</option>
		      	<option value="Belgium">Belgium</option>
		      	<option value="Chad">Chad</option>
		      	<option value="Nigeria">Nigeria</option>

		      </select><br><br>
		      <label>MALE:</label><br> &nbsp;<input type="radio" name="gender" checked="checked" value="male" /><br>
		      <label>FEMALE:</label><br> &nbsp;<input type="radio" name="gender" value="female" /><br><br>

		      	<button type="Submit">Submit</button>

		</form>
</div>	

		     
            
</body>
</html>