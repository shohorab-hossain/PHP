<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function sum_cal(){
			var a,b,c,sum;
			a = Number(document.getElementById("input").value);
			b = Number(document.getElementById("input1").value);
			c = Number(document.getElementById("input2").value);
			sum = a+b+c;
			document.write(sum);
		}
	</script>
	<title>sum</title>
</head>
<body>
<h1>sum</h1>
<form action="sum.php" method="POST">
	<b>fn1:</b><input type="text" name="fn1" id="input"><br>
	<b>fn2:</b><input type="text" name="fn2" id="input1"><br>
	<b>fn3:</b><input type="text" name="fn3" id="input2"><br>
	<input type="button" name="button" onclick="sum_cal()" value="Done">
</form>
</body>
</html>