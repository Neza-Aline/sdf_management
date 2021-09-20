<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SDF MIS</title>
    <!-- <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body class="form-container">
<div class="m">
<img scr="img.png"></div>
	<p>Welcome to IPRC Ngoma SDF Program</p>
	<p> SDF is a program implemented by IPRC Ngoma  If you want to register a new cooperative, 
		<!-- <a href="#">  click here.</a>  -->
	</p>

	<div style="width:50%; margin:auto">
		

		<p> Fill this form to apply: </p>
<div class="container">
		<form name="new_applicant_form" action="registration.php" method="post">
			<p> First name: <input type="text" name="izina"class="form-control" > </p>
			<p> Last name:  <input type="text" name="last_name" class="form-control"></p>
			<p> Gender: <br>
				<input type="radio" id="female" name="gender" value="Female">
				<label for="female">Female</label><br>
				<input type="radio" id="male" name="gender" value="Male">
				<label for="male">Male</label><br>
			<p> Date of birth: <input type="date" name="date_of_birth" class="form-control"></p>
			<p> Highest academic level
				<select name="education_level"  class="form-select">
					<option value="primary">Primary</option>
					<option value="secondary">Secondary</option>
					<option value="university">University</option>
				</select>
</p>
			
			<p> Province: <input type="text" name="province" class="form-control"></p>
			<p> District: <input type="text" name="district" class="form-control"></p>
			<p> Sector:   <input type="text" name="sector" class="form-control"></p>
			<p> Cell:     <input type="text" name="cell" class="form-control"></p>
			<p> Email:    <input type="email" name="email" class="form-control"></p>
			<p> Password: <input type="password" name="password" class="form-control"></p>
			<p> Learning Option: <br>
				<input type="radio" id="iot" name="course" value="1">
				<label for="iot">IOT</label><br>
				<input type="radio" id="sod" name="course" value="2">
				<label for="sod">Software Development</label><br>
				<input type="radio" id="civil_engineering" name="course" value="3">
				<label for="civil_engineering">Civil Engineering</label>
			</p>
			<p><input type="submit" name="submit" value="Submit" class ="btn btn-danger"></p>
		</form>
	</div>
</body>
</html>