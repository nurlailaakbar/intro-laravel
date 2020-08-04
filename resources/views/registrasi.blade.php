<!DOCTYPE html>
<html>
<head>
	<title>Form Akun Baru</title>
</head>
<body>
	<div>
		<h1>Buat Account Baru!</h1>
		<h4>Sign Up Form</h4>
	</div>
	<form action="/welcome" >
	  <label for="firstname">First name: </label><br>
	  <input type="text" id="firstname" name="firstname"><br><br>
	  <label for="name">Last name: </label><br>
	  <input type="text" id="lastname" name="lastname">
	</form>

	<form action="/welcome" >
	<p>Gender: </p>
	  <input type="radio" id="male" name="gender" value="male">
	  <label for="male">Male</label><br>
	  <input type="radio" id="female" name="gender" value="female">
	  <label for="female">Female</label><br>
	  <input type="radio" id="other" name="gender" value="other">
	  <label for="other">Other</label>
	</form>

	<form action="/welcome">
	<p>Nationality: </p>
	  <select type="" id="nationality" name="nationality">
	    <option value="indonesian">Indonesian</option>
	    <option value="singapuran">Singapuran</option>
	    <option value="malaysia">Malaysian</option>
	    <option value="australian">Australian</option>
	  </select>
	</form>

	<form action="/welcome" >
	<p>Language Spoken:</p>
	  <input type="checkbox" id="indo" name="language" value="indo">
	  <label for="indo">Bahasa Indonesia</label><br>
	  <input type="checkbox" id="eng" name="language" value="eng">
	  <label for="eng">English</label><br>
	  <input type="checkbox" id="other" name="language" value="other">
	  <label for="other">Other</label>
	</form>

	<form action="/welcome">
		<p>Bio:</p>
	  <textarea name="bio" rows="10" cols="30"></textarea>
	  <br><br>
	</form>
<a href="/welcome">
		<input type="submit" value="Sign Up"></a>
</body>
</html>