<!DOCTYPE html>
<html>
<head>
	<style>
	</style>
	<script>
		function screamValue(event) {
			var keystroke = event.which || event.keyCode;
			document.getElementById("scream").innerHTML = keystroke;
		}
	</script>
</head>
<body>
	<input type="text" onkeypress="screamValue(event)">  

	<p id="scream"></p>
	
</body>
</html>