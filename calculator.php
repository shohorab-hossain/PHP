<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		function cal_sum(){
			var a,b,oper;
			a = Number(document.getElementById("input").value);
			b = Number(document.getElementById("input1").value);
			oper = document.getElementById("operator").value;
			if (oper=="+") {
				document.getElementById("result").value=a+b;
			}
			if (oper=="-") {
				document.getElementById("result").value=a-b;
			}
			if (oper=="*") {
				document.getElementById("result").value=a*b;
			}
			if (oper=="/") {
				document.getElementById("result").value=a/b;
			}
			if (oper=="^") {
				document.getElementById("result").value=Math.pow(a,b);
			}
		}
	</script>
	<title>calculator</title>
</head>
<body>
<h1>calculator</h1>
<form action="calculator.php" method="POST">
	<b>fn1:</b><input type="text" name="fn1" id="input"><br>
	<b>fn2:</b><input type="text" name="fn2" id="input1"><br>
	<b>operator:</b><select id="operator">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="*">*</option>
		<option value="/">/</option>
		<option value="^">^</option>
	</select>
	<br>
	<input type="text" name="result" id="result"><br>
	<input type="button" name="button" onclick="cal_sum()" value="Cal">
</form>
</body>
</html>