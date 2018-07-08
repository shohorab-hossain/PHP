<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function alert_sys(){
			var count;
			count = Number(document.getElementById("input").value);
			if (count%2==0) {
				alert("even number");
			}else{
				alert("odd number");
			}
		}
	</script>
	<title>alert</title>
</head>
<body>
<form action="alert.php" method="POST">
	<b>enter the number:</b><input type="text" name="number" id="input"><br>
	<input type="button" name="button" onclick="alert_sys()" value="Done">
</form>
</body>
</html>