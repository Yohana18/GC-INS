<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" cotent="width=device-width,initial-scale=1.0">
	<title>materi 12</title>
</head>
<body>
	<form action="welcome.blade.php" method="post">
	<h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<label>First name:</label><br>
	<input type="text" name="name"><br><br>
	<label>Last name:</label><br>
	<input type="text" name="nama"><br><br>
	<label>Gender:</label><br>
	<input type="radio">Male<br>
	<input type="radio">Fermale<br>
	<input type="radio">Other<br><br>
	<label>Nationalty:</label><br>
	<select name="cars">
		<option value="Indonesian">Indonesian</option>
		<option value="Inggris">Inggris</option>
		<option value="Malaysia">Malaysia</option>
	</select> <br><br>
	<label>Language Spoken:</label><br>
	<input type="checkbox" name="Language Spoken:</">Bahasa Indonesia<br>
	<input type="checkbox" name="Language Spoken:</">English<br>
	<input type="checkbox" name="Language Spoken:</">Other<br><br>
	<label>Bio:</label><br>
	<textarea name="message" rows="10" cols="30"></textarea>
	<br> <br>
	<input type="submit" value="Sign Up">
</form>
</body>
</html>