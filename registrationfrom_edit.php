<?php
$db = mysqli_connect("localhost","root","","register");
$id = $_GET['id'];
if (isset($_POST['Done'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$comment = $_POST['comment'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	$choose = $_POST['choose'];
	$sql = "UPDATE user SET name = '$name', email = '$email', website = '$website', comment = '$comment', birthday = '$birthday', gender = '$gender', age = '$age', choose = '$choose' WHERE id='$id'";
	$edit = mysqli_query($db,$sql);
	if (!$edit) {
		echo mysql_error();
	}else{
		header("location:registrationfrom1.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">.error{color:red;}</style>
	<title>registration from</title>
</head>
<body>
<center>
<?php
$nameERR=$emailERR=$websiteERR=$commentERR=$birthdayERR=$genderERR=$ageERR=$chooseERR="";
$name=$email=$website=$comment=$birthday=$gender=$age=$choose="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	if (empty($_POST["name"])) {
		$nameERR = "name is required";
	}else{
		$name = input($_POST['name']);
	}
	if (empty($_POST["email"])) {
		$emailERR = "email is required";
	}else{
		$email = input($_POST['email']);
	}
	if (empty($_POST["website"])) {
		$websiteERR = "website is required";
	}else{
		$website = input($_POST['website']);
	}
	if (empty($_POST["comment"])) {
		$commentERR = "comment is required";
	}else{
		$comment = input($_POST['comment']);
	}
	if (empty($_POST["birthday"])) {
		$birthdayERR = "birthday is required";
	}else{
		$birthday = input($_POST['birthday']);
	}
	if (empty($_POST["gender"])) {
		$genderERR = "gender is required";
	}else{
		$gender = input($_POST['gender']);
	}
	if (empty($_POST["age"])) {
		$ageERR = "age is required";
	}else{
		$age = input($_POST['age']);
	}
	if (empty($_POST["choose"])) {
		$chooseERR = "choose is required";
	}else{
		$choose = input($_POST['choose']);
	}
}
function input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	return $data;
}
?>
<h1>Registration Form</h1>
<span class="error">* REQUIRED FILE *</span>
<form  method="POST">
	<b>name:</b><input type="text" name="name" placeholder="name">
    <span class="error"> * <?php echo $nameERR;?></span>
	<br><br>
	<b>email:</b><input type="text" name="email" placeholder="email">
    <span class="error"> * <?php echo $emailERR;?></span>
	<br><br>
	<b>website:</b><input type="text" name="website" placeholder="website">
    <span class="error"> * <?php echo $websiteERR;?></span>
	<br><br>
	<b>comment:</b><textarea type="text" name="comment" rows="5" cols="50" placeholder="comment"></textarea>
    <span class="error"> * <?php echo $commentERR;?></span>
	<br><br>
	<b>birthday:</b><input type="date" name="birthday">
    <span class="error"> * <?php echo $birthdayERR;?></span>
	<br><br>
	<b>gender:</b><input type="radio" name="gender" value="female">female
	<input type="radio" name="gender" value="male">male
	<span class="error"> * <?php echo $genderERR;?></span>
	<br><br>
	<b>age:</b><select name="age">
		<option value="21">1</option>
		<option value="23">2</option>
		<option value="25">3</option>
		<option value="18">4</option>
	</select>
	<span class="error"> * <?php echo $ageERR;?></span>
	<br><br>
	<b>choose:</b><input type="checkbox" name="choose" value="I Agree">I Agree
	<input type="checkbox" name="choose" value="Disagree">Disagree
	<span class="error"> * <?php echo $chooseERR;?></span>
	<br><br>
	<input type="submit" name="Done" value="Register">
</form>
<?php
echo "<h2>my input</h2>";
echo $name;
echo "</br>";
echo $email;
echo "</br>";
echo $website;
echo "</br>";
echo $comment;
echo "</br>";
echo $birthday;
echo "</br>";
echo $gender;
echo "</br>";
echo $age;
echo "</br>";
echo $choose;
?>
</center>
</body>
</html>